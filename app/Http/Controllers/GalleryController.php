<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Repositories\GalleryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use illuminate\support\Str;
use Flash;
use Response;

class GalleryController extends AppBaseController
{
    /** @var  GalleryRepository */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $galleries = $this->galleryRepository->all();

        return view('backend.galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $input = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'file|mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('galeri', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $input['img_path'] = $path;
        }

        $gallery = $this->galleryRepository->create($input);

        Flash::success('Gallery saved successfully.');

        return redirect(route('dashboard.galleries.index'));
    }

    /**
     * Display the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('dashboard.galleries.index'));
        }

        return view('backend.galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('dashboard.galleries.index'));
        }

        return view('backend.galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param int $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('dashboard.galleries.index'));
        }

        $update = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'file|mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('galeri', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $update['img_path'] = $path;
        }

        $gallery = $this->galleryRepository->update($update, $id);

        Flash::success('Gallery updated successfully.');

        return redirect(route('dashboard.galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('dashboard.galleries.index'));
        }

        $this->galleryRepository->delete($id);

        Flash::success('Gallery deleted successfully.');

        return redirect(route('dashboard.galleries.index'));
    }

    public function publicIndex()
    {
        $galleries = $this->galleryRepository->all();
        $post = \App\Models\Post::where('id', 2)->firstOrFail();

        return view('public.gallery.gallery', compact('galleries', 'post'));
    }
}
