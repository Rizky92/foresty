<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetreetexaRequest;
use App\Http\Requests\UpdatetreetexaRequest;
use App\Repositories\treetexaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class treetexaController extends AppBaseController
{
    /** @var  treetexaRepository */
    private $treetexaRepository;

    public function __construct(treetexaRepository $treetexaRepo)
    {
        $this->treetexaRepository = $treetexaRepo;
    }

    /**
     * Display a listing of the treetexa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $treetexas = $this->treetexaRepository->all();

        return view('backend.treetexas.index')
            ->with('treetexas', $treetexas);
    }

    /**
     * Show the form for creating a new treetexa.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.treetexas.create');
    }

    /**
     * Store a newly created treetexa in storage.
     *
     * @param CreatetreetexaRequest $request
     *
     * @return Response
     */
    public function store(CreatetreetexaRequest $request)
    {
        $input = $request->all();

        $treetexa = $this->treetexaRepository->create($input);

        Flash::success('Treetexa saved successfully.');

        return redirect(route('treetexas.index'));
    }

    /**
     * Display the specified treetexa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $treetexa = $this->treetexaRepository->find($id);

        if (empty($treetexa)) {
            Flash::error('Treetexa not found');

            return redirect(route('treetexas.index'));
        }

        return view('backend.treetexas.show')->with('treetexa', $treetexa);
    }

    /**
     * Show the form for editing the specified treetexa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $treetexa = $this->treetexaRepository->find($id);

        if (empty($treetexa)) {
            Flash::error('Treetexa not found');

            return redirect(route('treetexas.index'));
        }

        return view('backend.treetexas.edit')->with('treetexa', $treetexa);
    }

    /**
     * Update the specified treetexa in storage.
     *
     * @param int $id
     * @param UpdatetreetexaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetreetexaRequest $request)
    {
        $treetexa = $this->treetexaRepository->find($id);

        if (empty($treetexa)) {
            Flash::error('Treetexa not found');

            return redirect(route('treetexas.index'));
        }

        $treetexa = $this->treetexaRepository->update($request->all(), $id);

        Flash::success('Treetexa updated successfully.');

        return redirect(route('treetexas.index'));
    }

    /**
     * Remove the specified treetexa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $treetexa = $this->treetexaRepository->find($id);

        if (empty($treetexa)) {
            Flash::error('Treetexa not found');

            return redirect(route('treetexas.index'));
        }

        $this->treetexaRepository->delete($id);

        Flash::success('Treetexa deleted successfully.');

        return redirect(route('treetexas.index'));
    }
}
