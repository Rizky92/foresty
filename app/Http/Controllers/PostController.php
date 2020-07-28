<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Models\Image;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BeritaRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;
    private $beritaRepository;

    public function __construct(PostRepository $postRepo, BeritaRepository $beritaRepo)
    {
        $this->postRepository = $postRepo;
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->postRepository->all();

        return view('backend.posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->except('img_paths');

        $post = $this->postRepository->create($input);

        if ($request->hasFile('img_paths')) {

            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('post', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->judul;
                $gallery->imageable()->associate($post);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Post saved successfully.');

        return redirect(route('dashboard.posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('dashboard.posts.index'));
        }

        return view('backend.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('dashboard.posts.index'));
        }

        return view('backend.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('dashboard.posts.index'));
        }

        $post = $this->postRepository->update($request->except('img_paths'), $id);

        if ($request->hasFile('img_paths')) {

            $post->images()->delete();
            $files = $request->file('img_paths');

            foreach($files as $file) {
                $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

                $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

                $image = $file->storeAs('post', $fn, 'public');
                $path = asset('assets/frontend/images/'.$image);

                $gallery = new Image();
                $gallery->judul = $request->judul;
                $gallery->imageable()->associate($post);
                $gallery->img_path = $path;
                $gallery->save();
            }
        }

        Flash::success('Post updated successfully.');

        return redirect(route('dashboard.posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('dashboard.posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('dashboard.posts.index'));
    }

    public function beranda()
    {
        $post = \App\Models\Post::where('id', 1)->firstOrFail();
        $beritas = $this->beritaRepository->paginate(15);
        $galleries = $post->images()->get();
        views($post)->record();
        return view('welcome', compact('post', 'beritas', 'galleries'));
    }

    public function profil()
    {
        $post = \App\Models\Post::where('id', 2)->firstOrFail();
        views($post)->record();
        return view('public.profil.profil', compact('post'));
    }

    public function cari()
    {
        return view('public.search');
    }
}
