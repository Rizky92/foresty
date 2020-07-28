<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaunaRequest;
use App\Http\Requests\UpdateFaunaRequest;
use App\Repositories\FaunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Image;
use Flash;
use Response;

class FaunaController extends AppBaseController
{
    /** @var  FaunaRepository */
    private $faunaRepository;

    public function __construct(FaunaRepository $faunaRepo)
    {
        $this->faunaRepository = $faunaRepo;
    }

    /**
     * Display a listing of the Fauna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faunas = $this->faunaRepository->all();

        return view('backend.faunas.index')
            ->with('faunas', $faunas);
    }

    /**
     * Show the form for creating a new Fauna.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.faunas.create');
    }

    /**
     * Store a newly created Fauna in storage.
     *
     * @param CreateFaunaRequest $request
     *
     * @return Response
     */
    public function store(CreateFaunaRequest $request)
    {
        $input = $request->except('img_paths');

        $fauna = $this->faunaRepository->create($input);

        if ($request->hasFile('img_paths')) {

            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('berita', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($fauna);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Fauna saved successfully.');

        return redirect(route('dashboard.faunas.index'));
    }

    /**
     * Display the specified Fauna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fauna = $this->faunaRepository->find($id);

        if (empty($fauna)) {
            Flash::error('Fauna not found');

            return redirect(route('dashboard.faunas.index'));
        }

        return view('backend.faunas.show')->with('fauna', $fauna);
    }

    /**
     * Show the form for editing the specified Fauna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fauna = $this->faunaRepository->find($id);

        if (empty($fauna)) {
            Flash::error('Fauna not found');

            return redirect(route('dashboard.faunas.index'));
        }

        return view('backend.faunas.edit')->with('fauna', $fauna);
    }

    /**
     * Update the specified Fauna in storage.
     *
     * @param int $id
     * @param UpdateFaunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaunaRequest $request)
    {
        $fauna = $this->faunaRepository->find($id);

        if (empty($fauna)) {
            Flash::error('Fauna not found');

            return redirect(route('dashboard.faunas.index'));
        }

        $fauna = $this->faunaRepository->update($request->except('img_paths'), $id);

        if ($request->hasFile('img_paths')) {

            $fauna->images()->delete();
            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('fauna', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($fauna);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Fauna updated successfully.');

        return redirect(route('dashboard.faunas.index'));
    }

    /**
     * Remove the specified Fauna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fauna = $this->faunaRepository->find($id);

        if (empty($fauna)) {
            Flash::error('Fauna not found');

            return redirect(route('dashboard.faunas.index'));
        }

        $this->faunaRepository->delete($id);

        Flash::success('Fauna deleted successfully.');

        return redirect(route('dashboard.faunas.index'));
    }

    public function publicIndex()
    {
        $faunas = $this->faunaRepository->all();
        $post = \App\Models\Post::where('id', 4)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Fauna::class)->get();
        views($post)->record();

        return view('public.fauna.fauna', compact('faunas', 'post', 'galleries'));
    }

    public function publicImages()
    {
        $post = \App\Models\Post::where('id', 4)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Fauna::class)->get();
        views($post)->record();

        return view('public.gallery.gallery', compact('galleries', 'post'));
    }

    public function findPublicImages($slug)
    {
        $fauna = $this->faunaRepository->detail($slug);
        $post = \App\Models\Post::where('id', 4)->firstOrFail();
        $galleries = $fauna->images;

        return view('public.gallery.gallery', compact('fauna', 'post', 'galleries'));
    }
}
