<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHerbariumRequest;
use App\Http\Requests\UpdateHerbariumRequest;
use App\Repositories\HerbariumRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HerbariumController extends AppBaseController
{
    /** @var  HerbariumRepository */
    private $herbariumRepository;

    public function __construct(HerbariumRepository $herbariumRepo)
    {
        $this->herbariumRepository = $herbariumRepo;
    }

    /**
     * Display a listing of the Herbarium.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $herbaria = $this->herbariumRepository->all();

        return view('backend.herbaria.index')
            ->with('herbaria', $herbaria);
    }

    /**
     * Show the form for creating a new Herbarium.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.herbaria.create');
    }

    /**
     * Store a newly created Herbarium in storage.
     *
     * @param CreateHerbariumRequest $request
     *
     * @return Response
     */
    public function store(CreateHerbariumRequest $request)
    {
        $input = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('herbarium', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $input['img_path'] = $path;
        }

        $herbarium = $this->herbariumRepository->create($input);

        Flash::success('Herbarium saved successfully.');

        return redirect(route('dashboard.herbaria.index'));
    }

    /**
     * Display the specified Herbarium.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $herbarium = $this->herbariumRepository->find($id);

        if (empty($herbarium)) {
            Flash::error('Herbarium not found');

            return redirect(route('dashboard.herbaria.index'));
        }

        return view('backend.herbaria.show')->with('herbarium', $herbarium);
    }

    /**
     * Show the form for editing the specified Herbarium.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $herbarium = $this->herbariumRepository->find($id);

        if (empty($herbarium)) {
            Flash::error('Herbarium not found');

            return redirect(route('dashboard.herbaria.index'));
        }

        return view('backend.herbaria.edit')->with('herbarium', $herbarium);
    }

    /**
     * Update the specified Herbarium in storage.
     *
     * @param int $id
     * @param UpdateHerbariumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHerbariumRequest $request)
    {
        $herbarium = $this->herbariumRepository->find($id);

        if (empty($herbarium)) {
            Flash::error('Herbarium not found');

            return redirect(route('dashboard.herbaria.index'));
        }

        $update = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $rand = substr(str_shuffle("0123456789abcdef"), 0, 8);

            $fn = date("Y-m-d") . '-' . $rand . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('herbarium', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $update['img_path'] = $path;
        }

        $herbarium = $this->herbariumRepository->update($update, $id);

        Flash::success('Herbarium updated successfully.');

        return redirect(route('dashboard.herbaria.index'));
    }

    /**
     * Remove the specified Herbarium from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $herbarium = $this->herbariumRepository->find($id);

        if (empty($herbarium)) {
            Flash::error('Herbarium not found');

            return redirect(route('dashboard.herbaria.index'));
        }

        $this->herbariumRepository->delete($id);

        Flash::success('Herbarium deleted successfully.');

        return redirect(route('dashboard.herbaria.index'));
    }

    public function publicIndex()
    {
        $herbaria = $this->herbariumRepository->all();
        $post = \App\Models\Post::where('id', 5)->firstOrFail();
        views($post)->record();

        return view('public.herbarium.herbarium', compact('herbaria', 'post'));
    }

    public function publicSearch($search)
    {
        $herbaria = $this->herbariumRepository->all($search);

        return view('public.herbarium.herbarium')
            ->with('herbaria', $herbaria);
    }

    public function publicDetail($slug)
    {
        $herbarium = $this->herbariumRepository->findBySlug($slug);
        $post = \App\Models\Post::where('id', 5)->firstOrFail();

        if (empty($herbarium)) {
            Flash::error('Herbarium not found');

            return redirect(route('public.herbarium'));
        }
        return view('public.herbarium.detail', compact('herbarium', 'post'));
    }
}
