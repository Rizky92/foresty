<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMinorAreaRequest;
use App\Http\Requests\UpdateMinorAreaRequest;
use App\Repositories\MinorAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MinorAreaController extends AppBaseController
{
    /** @var  MinorAreaRepository */
    private $minorAreaRepository;

    public function __construct(MinorAreaRepository $minorAreaRepo)
    {
        $this->minorAreaRepository = $minorAreaRepo;
    }

    /**
     * Display a listing of the MinorArea.
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
     * Show the form for creating a new MinorArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.minor_areas.create');
    }

    /**
     * Store a newly created MinorArea in storage.
     *
     * @param CreateMinorAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateMinorAreaRequest $request)
    {
        $input = $request->all();

        $minorArea = $this->minorAreaRepository->create($input);

        Flash::success('Minor Area saved successfully.');

        return redirect(route('minorAreas.index'));
    }

    /**
     * Display the specified MinorArea.
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
     * Show the form for editing the specified MinorArea.
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
     * Update the specified MinorArea in storage.
     *
     * @param int $id
     * @param UpdateMinorAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMinorAreaRequest $request)
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
     * Remove the specified MinorArea from storage.
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
