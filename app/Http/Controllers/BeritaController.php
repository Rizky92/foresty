<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use App\Imports\BeritaImport;
use App\Models\Image;
use Illuminate\Http\Request;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
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
        $input = $request->except('img_paths');

        $berita = $this->beritaRepository->create($input);

        if ($request->hasFile('img_paths')) {

            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('berita', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->judul;
                $gallery->imageable()->associate($berita);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

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

        $berita = $this->beritaRepository->update($request->except('img_paths'), $id);

        if ($request->hasFile('img_paths')) {

            $berita->images()->delete();
            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('berita', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->judul;
                $gallery->imageable()->associate($berita);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

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

        $files = $request->file('img_paths');

        Flash::success('Berita deleted successfully.');

        return redirect(route('dashboard.beritas.index'));
    }

    public function publicIndex()
    {
        $beritas = $this->beritaRepository->all();
        $post = \App\Models\Post::where('id', 7)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Berita::class)->get();
        views($post)->record();

        return view('public.berita.berita', compact('beritas', 'post', 'galleries'));
    }

    public function publicImages()
    {
        $post = \App\Models\Post::where('id', 7)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Berita::class)->get();
        views($post)->record();

        return view('public.gallery.gallery', compact('galleries', 'post'));
    }

    public function readArticle($slug)
    {
        $berita = $this->beritaRepository->detail($slug);
        $post = \App\Models\Post::where('id', 7)->firstOrFail();
        $galleries = $berita->images;
        views($berita)->record();

        return view('public.berita.detail', compact('berita', 'post', 'galleries'));
    }

    public function articleImages($slug)
    {
        $berita = $this->beritaRepository->detail($slug);
        $post = \App\Models\Post::where('id', 7)->firstOrFail();
        $galleries = $berita->images;

        return view('public.gallery.gallery', compact('berita', 'post', 'galleries'));
    }

    public function import(Request $request)
    {
        return view('public.berita.import');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('excel')) {
            Excel::import(new BeritaImport, $request->file('excel'));

            Flash::success('Berita imported successfully');

            return redirect(route('dashboard.beritas.index'));
        }
    }
}
