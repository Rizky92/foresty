<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMajoreAreaRequest;
use App\Http\Requests\UpdateMajoreAreaRequest;
use App\Repositories\MajoreAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MajoreAreaController extends AppBaseController
{
    /** @var  MajoreAreaRepository */
    private $majoreAreaRepository;

    public function __construct(MajoreAreaRepository $majoreAreaRepo)
    {
        $this->majoreAreaRepository = $majoreAreaRepo;
    }

    /**
     * Display a listing of the MajoreArea.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $majoreAreas = $this->majoreAreaRepository->all();

        return view('backend.majore_areas.index')
            ->with('majoreAreas', $majoreAreas);
    }

    /**
     * Show the form for creating a new MajoreArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.majore_areas.create');
    }

    /**
     * Store a newly created MajoreArea in storage.
     *
     * @param CreateMajoreAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateMajoreAreaRequest $request)
    {
        $input = $request->all();

        $majoreArea = $this->majoreAreaRepository->create($input);

        Flash::success('Majore Area saved successfully.');

        return redirect(route('dashboard.majoreAreas.index'));
    }

    /**
     * Display the specified MajoreArea.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $majoreArea = $this->majoreAreaRepository->find($id);

        if (empty($majoreArea)) {
            Flash::error('Majore Area not found');

            return redirect(route('dashboard.majoreAreas.index'));
        }

        return view('backend.majore_areas.show')->with('majoreArea', $majoreArea);
    }

    /**
     * Show the form for editing the specified MajoreArea.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $majoreArea = $this->majoreAreaRepository->find($id);

        if (empty($majoreArea)) {
            Flash::error('Majore Area not found');

            return redirect(route('dashboard.majoreAreas.index'));
        }

        return view('backend.majore_areas.edit')->with('majoreArea', $majoreArea);
    }

    /**
     * Update the specified MajoreArea in storage.
     *
     * @param int $id
     * @param UpdateMajoreAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMajoreAreaRequest $request)
    {
        $majoreArea = $this->majoreAreaRepository->find($id);

        if (empty($majoreArea)) {
            Flash::error('Majore Area not found');

            return redirect(route('dashboard.majoreAreas.index'));
        }

        $majoreArea = $this->majoreAreaRepository->update($request->all(), $id);

        Flash::success('Majore Area updated successfully.');

        return redirect(route('dashboard.majoreAreas.index'));
    }

    /**
     * Remove the specified MajoreArea from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $majoreArea = $this->majoreAreaRepository->find($id);

        if (empty($majoreArea)) {
            Flash::error('Majore Area not found');

            return redirect(route('dashboard.majoreAreas.index'));
        }

        $this->majoreAreaRepository->delete($id);

        Flash::success('Majore Area deleted successfully.');

        return redirect(route('dashboard.majoreAreas.index'));
    }
}
