<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use illuminate\support\Str;
use Flash;
use Response;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;
    private $beritaRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
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
        $input = $request->except('header_path', 'slug');
        $slug = Str::slug($input['judul']);

        if ($request->hasFile('header_path')) {

            $validate = $request->validate([
                'header_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['header_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('post', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $input['header_path'] = $path;
        }

        $input['slug'] = $slug;

        $post = $this->postRepository->create($input);

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

        $update = $request->except('header_path', 'slug');
        $slug = Str::slug($update['judul']);

        if ($request->hasFile('header_path')) {

            $validate = $request->validate([
                'header_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['header_path'];

            $fn = date("Y-m-d") . '-' . $slug. '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('post', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $update['header_path'] = $path;
        }

        $update['slug'] = $slug;

        $post = $this->postRepository->update($update, $id);

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

    public function beranda(BeritaRepository $beritaRepo)
    {
        $this->beritaRepository = $beritaRepo;
        $post = $this->postRepository->find(1);

        $beritas = $this->beritaRepository->paginate(8);
        views($post)->record();

        return view('welcome', compact('post', 'beritas'));
    }

    public function profil()
    {
        $post = $this->postRepository->find(2);
        views($post)->record();

        return view('public.profil.profil')
            ->with('post', $post);
    }
}
