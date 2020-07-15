<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createminor_areaRequest;
use App\Http\Requests\Updateminor_areaRequest;
use App\Repositories\minor_areaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class minor_areaController extends AppBaseController
{
    /** @var  minor_areaRepository */
    private $minorAreaRepository;

    public function __construct(minor_areaRepository $minorAreaRepo)
    {
        $this->minorAreaRepository = $minorAreaRepo;
    }

    /**
     * Display a listing of the minor_area.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $minorAreas = $this->minorAreaRepository->all();

        return view('backend.minor_areas.index')
            ->with('minorAreas', $minorAreas);
    }

    /**
     * Show the form for creating a new minor_area.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.minor_areas.create');
    }

    /**
     * Store a newly created minor_area in storage.
     *
     * @param Createminor_areaRequest $request
     *
     * @return Response
     */
    public function store(Createminor_areaRequest $request)
    {
        $input = $request->all();

        $minorArea = $this->minorAreaRepository->create($input);

        Flash::success('Minor Area saved successfully.');

        return redirect(route('minorAreas.index'));
    }

    /**
     * Display the specified minor_area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $minorArea = $this->minorAreaRepository->find($id);

        if (empty($minorArea)) {
            Flash::error('Minor Area not found');

            return redirect(route('minorAreas.index'));
        }

        return view('backend.minor_areas.show')->with('minorArea', $minorArea);
    }

    /**
     * Show the form for editing the specified minor_area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $minorArea = $this->minorAreaRepository->find($id);

        if (empty($minorArea)) {
            Flash::error('Minor Area not found');

            return redirect(route('minorAreas.index'));
        }

        return view('backend.minor_areas.edit')->with('minorArea', $minorArea);
    }

    /**
     * Update the specified minor_area in storage.
     *
     * @param int $id
     * @param Updateminor_areaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateminor_areaRequest $request)
    {
        $minorArea = $this->minorAreaRepository->find($id);

        if (empty($minorArea)) {
            Flash::error('Minor Area not found');

            return redirect(route('minorAreas.index'));
        }

        $minorArea = $this->minorAreaRepository->update($request->all(), $id);

        Flash::success('Minor Area updated successfully.');

        return redirect(route('minorAreas.index'));
    }

    /**
     * Remove the specified minor_area from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $minorArea = $this->minorAreaRepository->find($id);

        if (empty($minorArea)) {
            Flash::error('Minor Area not found');

            return redirect(route('minorAreas.index'));
        }

        $this->minorAreaRepository->delete($id);

        Flash::success('Minor Area deleted successfully.');

        return redirect(route('minorAreas.index'));
    }
}
