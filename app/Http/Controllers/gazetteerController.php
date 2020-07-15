<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreategazetteerRequest;
use App\Http\Requests\UpdategazetteerRequest;
use App\Repositories\gazetteerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class gazetteerController extends AppBaseController
{
    /** @var  gazetteerRepository */
    private $gazetteerRepository;

    public function __construct(gazetteerRepository $gazetteerRepo)
    {
        $this->gazetteerRepository = $gazetteerRepo;
    }

    /**
     * Display a listing of the gazetteer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gazetteers = $this->gazetteerRepository->all();

        return view('backend.gazetteers.index')
            ->with('gazetteers', $gazetteers);
    }

    /**
     * Show the form for creating a new gazetteer.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.gazetteers.create');
    }

    /**
     * Store a newly created gazetteer in storage.
     *
     * @param CreategazetteerRequest $request
     *
     * @return Response
     */
    public function store(CreategazetteerRequest $request)
    {
        $input = $request->all();

        $gazetteer = $this->gazetteerRepository->create($input);

        Flash::success('Gazetteer saved successfully.');

        return redirect(route('gazetteers.index'));
    }

    /**
     * Display the specified gazetteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gazetteer = $this->gazetteerRepository->find($id);

        if (empty($gazetteer)) {
            Flash::error('Gazetteer not found');

            return redirect(route('gazetteers.index'));
        }

        return view('backend.gazetteers.show')->with('gazetteer', $gazetteer);
    }

    /**
     * Show the form for editing the specified gazetteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gazetteer = $this->gazetteerRepository->find($id);

        if (empty($gazetteer)) {
            Flash::error('Gazetteer not found');

            return redirect(route('gazetteers.index'));
        }

        return view('backend.gazetteers.edit')->with('gazetteer', $gazetteer);
    }

    /**
     * Update the specified gazetteer in storage.
     *
     * @param int $id
     * @param UpdategazetteerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategazetteerRequest $request)
    {
        $gazetteer = $this->gazetteerRepository->find($id);

        if (empty($gazetteer)) {
            Flash::error('Gazetteer not found');

            return redirect(route('gazetteers.index'));
        }

        $gazetteer = $this->gazetteerRepository->update($request->all(), $id);

        Flash::success('Gazetteer updated successfully.');

        return redirect(route('gazetteers.index'));
    }

    /**
     * Remove the specified gazetteer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gazetteer = $this->gazetteerRepository->find($id);

        if (empty($gazetteer)) {
            Flash::error('Gazetteer not found');

            return redirect(route('gazetteers.index'));
        }

        $this->gazetteerRepository->delete($id);

        Flash::success('Gazetteer deleted successfully.');

        return redirect(route('gazetteers.index'));
    }
}
