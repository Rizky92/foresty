<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTempatWisataRequest;
use App\Http\Requests\UpdateTempatWisataRequest;
use App\Repositories\TempatWisataRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Image;
use Illuminate\Http\Request;
use Flash;
use Response;

class TempatWisataController extends AppBaseController
{
    /** @var  TempatWisataRepository */
    private $tempatWisataRepository;

    public function __construct(TempatWisataRepository $tempatWisataRepo)
    {
        $this->tempatWisataRepository = $tempatWisataRepo;
    }

    /**
     * Display a listing of the TempatWisata.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tempatWisatas = $this->tempatWisataRepository->all();

        return view('backend.tempat_wisatas.index')
            ->with('tempatWisatas', $tempatWisatas);
    }

    /**
     * Show the form for creating a new TempatWisata.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tempat_wisatas.create');
    }

    /**
     * Store a newly created TempatWisata in storage.
     *
     * @param CreateTempatWisataRequest $request
     *
     * @return Response
     */
    public function store(CreateTempatWisataRequest $request)
    {
        $input = $request->except('img_paths');

        $tempatWisata = $this->tempatWisataRepository->create($input);

        if ($request->hasFile('img_paths')) {

            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('flora', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($tempatWisata);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Tempat Wisata saved successfully.');

        return redirect(route('dashboard.tempatWisatas.index'));
    }

    /**
     * Display the specified TempatWisata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tempatWisata = $this->tempatWisataRepository->find($id);

        if (empty($tempatWisata)) {
            Flash::error('Tempat Wisata not found');

            return redirect(route('dashboard.tempatWisatas.index'));
        }

        return view('backend.tempat_wisatas.show')->with('tempatWisata', $tempatWisata);
    }

    /**
     * Show the form for editing the specified TempatWisata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tempatWisata = $this->tempatWisataRepository->find($id);

        if (empty($tempatWisata)) {
            Flash::error('Tempat Wisata not found');

            return redirect(route('dashboard.tempatWisatas.index'));
        }

        return view('backend.tempat_wisatas.edit')->with('tempatWisata', $tempatWisata);
    }

    /**
     * Update the specified TempatWisata in storage.
     *
     * @param int $id
     * @param UpdateTempatWisataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTempatWisataRequest $request)
    {
        $tempatWisata = $this->tempatWisataRepository->find($id);

        if (empty($tempatWisata)) {
            Flash::error('Tempat Wisata not found');

            return redirect(route('dashboard.tempatWisatas.index'));
        }

        $tempatWisata = $this->tempatWisataRepository->update($request->except('img_paths'), $id);

        if ($request->hasFile('img_paths')) {

            $tempatWisata->images()->delete();
            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('tempat_wisata', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($tempatWisata);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Tempat Wisata updated successfully.');

        return redirect(route('dashboard.tempatWisatas.index'));
    }

    /**
     * Remove the specified TempatWisata from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tempatWisata = $this->tempatWisataRepository->find($id);

        if (empty($tempatWisata)) {
            Flash::error('Tempat Wisata not found');

            return redirect(route('dashboard.tempatWisatas.index'));
        }

        $this->tempatWisataRepository->delete($id);

        Flash::success('Tempat Wisata deleted successfully.');

        return redirect(route('dashboard.tempatWisatas.index'));
    }

    public function publicIndex()
    {
        $tempatWisatas = $this->tempatWisataRepository->all();
        $post = \App\Models\Post::where('id', 6)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\TempatWisata::class)->get();
        views($post)->record();

        return view('public.tempat_wisata.wisata', compact('tempatWisatas', 'post', 'galleries'));
    }

    public function publicImages()
    {
        $post = \App\Models\Post::where('id', 6)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\TempatWisata::class)->get();
        views($post)->record();

        return view('public.gallery.gallery', compact('galleries', 'post'));
    }

    public function findPublicImages($slug)
    {
        $tempatWisata = $this->tempatWisataRepository->detail($slug);
        $post = \App\Models\Post::where('id', 6)->firstOrFail();
        $galleries = $tempatWisata->images;

        return view('public.gallery.gallery', compact('tempatWisata', 'post', 'galleries'));
    }
}
