<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaunaRequest;
use App\Http\Requests\UpdateFaunaRequest;
use App\Repositories\FaunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use illuminate\support\Str;
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
        $input = $request->except('img_path', 'slug');
        $slug = Str::slug(date("Y-m-d") . '-' . $input['nama']);

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $fn = $slug . '.' . $file->getClientOriginalExtension();

            $img = $file->storeAs('fauna', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
            $input['img_path'] = $path;
        }

        $input['slug'] = $slug;

        $fauna = $this->faunaRepository->create($input);

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

        $update = $request->except('img_path', 'slug');
        $slug = Str::slug(date("Y-m-d") . '-' . $update['nama']);

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $fn = $slug.'.'. $file->getClientOriginalExtension();

            $img = $file->storeAs('fauna', $fn, 'public');
            $path = asset('assets/frontend/images/'.$img);
        }

        $update['img_path'] = $path;
        $update['slug'] = $slug;

        $fauna = $this->faunaRepository->update($update, $id);

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
}
