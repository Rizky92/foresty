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
        $input = $request->all();

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

        $herbarium = $this->herbariumRepository->update($request->all(), $id);

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
}
