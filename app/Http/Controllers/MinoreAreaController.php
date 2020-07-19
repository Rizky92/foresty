<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMinoreAreaRequest;
use App\Http\Requests\UpdateMinoreAreaRequest;
use App\Repositories\MinoreAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MinoreAreaController extends AppBaseController
{
    /** @var  MinoreAreaRepository */
    private $minoreAreaRepository;

    public function __construct(MinoreAreaRepository $minoreAreaRepo)
    {
        $this->minoreAreaRepository = $minoreAreaRepo;
    }

    /**
     * Display a listing of the MinoreArea.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $minoreAreas = $this->minoreAreaRepository->all();

        return view('backend.minore_areas.index')
            ->with('minoreAreas', $minoreAreas);
    }

    /**
     * Show the form for creating a new MinoreArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.minore_areas.create');
    }

    /**
     * Store a newly created MinoreArea in storage.
     *
     * @param CreateMinoreAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateMinoreAreaRequest $request)
    {
        $input = $request->all();

        $minoreArea = $this->minoreAreaRepository->create($input);

        Flash::success('Minore Area saved successfully.');

        return redirect(route('minoreAreas.index'));
    }

    /**
     * Display the specified MinoreArea.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $minoreArea = $this->minoreAreaRepository->find($id);

        if (empty($minoreArea)) {
            Flash::error('Minore Area not found');

            return redirect(route('minoreAreas.index'));
        }

        return view('backend.minore_areas.show')->with('minoreArea', $minoreArea);
    }

    /**
     * Show the form for editing the specified MinoreArea.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $minoreArea = $this->minoreAreaRepository->find($id);

        if (empty($minoreArea)) {
            Flash::error('Minore Area not found');

            return redirect(route('minoreAreas.index'));
        }

        return view('backend.minore_areas.edit')->with('minoreArea', $minoreArea);
    }

    /**
     * Update the specified MinoreArea in storage.
     *
     * @param int $id
     * @param UpdateMinoreAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMinoreAreaRequest $request)
    {
        $minoreArea = $this->minoreAreaRepository->find($id);

        if (empty($minoreArea)) {
            Flash::error('Minore Area not found');

            return redirect(route('minoreAreas.index'));
        }

        $minoreArea = $this->minoreAreaRepository->update($request->all(), $id);

        Flash::success('Minore Area updated successfully.');

        return redirect(route('minoreAreas.index'));
    }

    /**
     * Remove the specified MinoreArea from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $minoreArea = $this->minoreAreaRepository->find($id);

        if (empty($minoreArea)) {
            Flash::error('Minore Area not found');

            return redirect(route('minoreAreas.index'));
        }

        $this->minoreAreaRepository->delete($id);

        Flash::success('Minore Area deleted successfully.');

        return redirect(route('minoreAreas.index'));
    }
}
