<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;
use App\Repositories\FamilyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FamilyController extends AppBaseController
{
    /** @var  FamilyRepository */
    private $familyRepository;

    public function __construct(FamilyRepository $familyRepo)
    {
        $this->familyRepository = $familyRepo;
    }

    /**
     * Display a listing of the Family.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $families = $this->familyRepository->all();

        return view('backend.families.index')
            ->with('families', $families);
    }

    /**
     * Show the form for creating a new Family.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.families.create');
    }

    /**
     * Store a newly created Family in storage.
     *
     * @param CreateFamilyRequest $request
     *
     * @return Response
     */
    public function store(CreateFamilyRequest $request)
    {
        $input = $request->all();

        $family = $this->familyRepository->create($input);

        Flash::success('Family saved successfully.');

        return redirect(route('dashboard.families.index'));
    }

    /**
     * Display the specified Family.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $family = $this->familyRepository->find($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('dashboard.families.index'));
        }

        return view('backend.families.show')->with('family', $family);
    }

    /**
     * Show the form for editing the specified Family.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $family = $this->familyRepository->find($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('dashboard.families.index'));
        }

        return view('backend.families.edit')->with('family', $family);
    }

    /**
     * Update the specified Family in storage.
     *
     * @param int $id
     * @param UpdateFamilyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFamilyRequest $request)
    {
        $family = $this->familyRepository->find($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('dashboard.families.index'));
        }

        $family = $this->familyRepository->update($request->all(), $id);

        Flash::success('Family updated successfully.');

        return redirect(route('dashboard.families.index'));
    }

    /**
     * Remove the specified Family from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $family = $this->familyRepository->find($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('dashboard.families.index'));
        }

        $this->familyRepository->delete($id);

        Flash::success('Family deleted successfully.');

        return redirect(route('dashboard.families.index'));
    }
}
