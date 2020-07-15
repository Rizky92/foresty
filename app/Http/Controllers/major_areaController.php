<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmajor_areaRequest;
use App\Http\Requests\Updatemajor_areaRequest;
use App\Repositories\major_areaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class major_areaController extends AppBaseController
{
    /** @var  major_areaRepository */
    private $majorAreaRepository;

    public function __construct(major_areaRepository $majorAreaRepo)
    {
        $this->majorAreaRepository = $majorAreaRepo;
    }

    /**
     * Display a listing of the major_area.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $majorAreas = $this->majorAreaRepository->all();

        return view('backend.major_areas.index')
            ->with('majorAreas', $majorAreas);
    }

    /**
     * Show the form for creating a new major_area.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.major_areas.create');
    }

    /**
     * Store a newly created major_area in storage.
     *
     * @param Createmajor_areaRequest $request
     *
     * @return Response
     */
    public function store(Createmajor_areaRequest $request)
    {
        $input = $request->all();

        $majorArea = $this->majorAreaRepository->create($input);

        Flash::success('Major Area saved successfully.');

        return redirect(route('majorAreas.index'));
    }

    /**
     * Display the specified major_area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $majorArea = $this->majorAreaRepository->find($id);

        if (empty($majorArea)) {
            Flash::error('Major Area not found');

            return redirect(route('majorAreas.index'));
        }

        return view('backend.major_areas.show')->with('majorArea', $majorArea);
    }

    /**
     * Show the form for editing the specified major_area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $majorArea = $this->majorAreaRepository->find($id);

        if (empty($majorArea)) {
            Flash::error('Major Area not found');

            return redirect(route('majorAreas.index'));
        }

        return view('backend.major_areas.edit')->with('majorArea', $majorArea);
    }

    /**
     * Update the specified major_area in storage.
     *
     * @param int $id
     * @param Updatemajor_areaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemajor_areaRequest $request)
    {
        $majorArea = $this->majorAreaRepository->find($id);

        if (empty($majorArea)) {
            Flash::error('Major Area not found');

            return redirect(route('majorAreas.index'));
        }

        $majorArea = $this->majorAreaRepository->update($request->all(), $id);

        Flash::success('Major Area updated successfully.');

        return redirect(route('majorAreas.index'));
    }

    /**
     * Remove the specified major_area from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $majorArea = $this->majorAreaRepository->find($id);

        if (empty($majorArea)) {
            Flash::error('Major Area not found');

            return redirect(route('majorAreas.index'));
        }

        $this->majorAreaRepository->delete($id);

        Flash::success('Major Area deleted successfully.');

        return redirect(route('majorAreas.index'));
    }
}
