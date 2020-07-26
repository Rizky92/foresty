<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BeritaController extends AppBaseController
{
    /** @var  BeritaRepository */
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $beritas = $this->beritaRepository->all();

        return view('backend.beritas.index')
            ->with('beritas', $beritas);
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.beritas.create');
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaRequest $request)
    {
        $input = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('berita', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $input['img_path'] = $path;
        }

        $berita = $this->beritaRepository->create($input);

        Flash::success('Berita saved successfully.');

        return redirect(route('dashboard.beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('dashboard.beritas.index'));
        }

        return view('backend.beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('dashboard.beritas.index'));
        }

        return view('backend.beritas.edit')->with('berita', $berita);
    }

    /**
     * Update the specified Berita in storage.
     *
     * @param int $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('dashboard.beritas.index'));
        }

        $update = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('berita', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $update['img_path'] = $path;
        }

        $berita = $this->beritaRepository->update($update, $id);

        Flash::success('Berita updated successfully.');

        return redirect(route('dashboard.beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('dashboard.beritas.index'));
        }

        $this->beritaRepository->delete($id);

        Flash::success('Berita deleted successfully.');

        return redirect(route('dashboard.beritas.index'));
    }

    public function publicDetail($slug)
    {
        $berita = $this->beritaRepository->findBySlug($slug);
        $post = \App\Models\Post::where('id', 1)->firstOrFail();
        views($berita)->record();

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('public.home'));
        }

        return view('public.berita.detail', compact('berita', 'post'));
    }
}
