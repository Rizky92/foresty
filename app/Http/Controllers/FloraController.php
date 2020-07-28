<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFloraRequest;
use App\Http\Requests\UpdateFloraRequest;
use App\Repositories\FloraRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Image;
use Illuminate\Http\Request;
use Flash;
use Response;

class FloraController extends AppBaseController
{
    /** @var  FloraRepository */
    private $floraRepository;

    public function __construct(FloraRepository $floraRepo)
    {
        $this->floraRepository = $floraRepo;
    }

    /**
     * Display a listing of the Flora.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $floras = $this->floraRepository->all();

        return view('backend.floras.index')
            ->with('floras', $floras);
    }

    /**
     * Show the form for creating a new Flora.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.floras.create');
    }

    /**
     * Store a newly created Flora in storage.
     *
     * @param CreateFloraRequest $request
     *
     * @return Response
     */
    public function store(CreateFloraRequest $request)
    {
        $input = $request->except('img_paths');

        $flora = $this->floraRepository->create($input);

        if ($request->hasFile('img_paths')) {

            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('flora', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($flora);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Flora saved successfully.');

        return redirect(route('dashboard.floras.index'));
    }

    /**
     * Display the specified Flora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('dashboard.floras.index'));
        }

        return view('backend.floras.show')->with('flora', $flora);
    }

    /**
     * Show the form for editing the specified Flora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('dashboard.floras.index'));
        }

        return view('backend.floras.edit')->with('flora', $flora);
    }

    /**
     * Update the specified Flora in storage.
     *
     * @param int $id
     * @param UpdateFloraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFloraRequest $request)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('dashboard.floras.index'));
        }

        $flora = $this->floraRepository->update($request->except('img_paths'), $id);

        if ($request->hasFile('img_paths')) {

            $flora->images()->delete();
            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('flora', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->nama;
                $gallery->imageable()->associate($flora);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Flora updated successfully.');

        return redirect(route('dashboard.floras.index'));
    }

    /**
     * Remove the specified Flora from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('dashboard.floras.index'));
        }
        $flora->images()->delete();

        $this->floraRepository->delete($id);

        Flash::success('Flora deleted successfully.');

        return redirect(route('dashboard.floras.index'));
    }

    public function publicIndex()
    {
        $floras = $this->floraRepository->all();
        $post = \App\Models\Post::where('id', 3)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Flora::class)->get();
        views($post)->record();

        return view('public.flora.flora', compact('floras', 'post', 'galleries'));
    }

    public function publicImages()
    {
        $post = \App\Models\Post::where('id', 3)->firstOrFail();
        $galleries = \App\Models\Image::whereHasMorph('imageable', \App\Models\Flora::class)->get();
        views($post)->record();

        return view('public.gallery.gallery', compact('galleries', 'post'));
    }

    public function findPublicImages($slug)
    {
        $flora = $this->floraRepository->detail($slug);
        $post = \App\Models\Post::where('id', 3)->firstOrFail();
        $galleries = $flora->images;

        return view('public.gallery.gallery', compact('flora', 'post', 'galleries'));
    }
}
