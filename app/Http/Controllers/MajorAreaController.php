<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMajorAreaRequest;
use App\Http\Requests\UpdateMajorAreaRequest;
use App\Repositories\MajorAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MajorAreaController extends AppBaseController
{
    /** @var  MajorAreaRepository */
    private $majorAreaRepository;

    public function __construct(MajorAreaRepository $majorAreaRepo)
    {
        $this->majorAreaRepository = $majorAreaRepo;
    }

    /**
     * Display a listing of the MajorArea.
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
     * Show the form for creating a new MajorArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.major_areas.create');
    }

    /**
     * Store a newly created MajorArea in storage.
     *
     * @param CreateMajorAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateMajorAreaRequest $request)
    {
        $input = $request->all();

        $majorArea = $this->majorAreaRepository->create($input);

        Flash::success('Major Area saved successfully.');

        return redirect(route('majorAreas.index'));
    }

    /**
     * Display the specified MajorArea.
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
     * Show the form for editing the specified MajorArea.
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
     * Update the specified MajorArea in storage.
     *
     * @param int $id
     * @param UpdateMajorAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMajorAreaRequest $request)
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
     * Remove the specified MajorArea from storage.
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
