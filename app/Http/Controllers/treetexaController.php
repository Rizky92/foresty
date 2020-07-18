<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTreetexaRequest;
use App\Http\Requests\UpdateTreetexaRequest;
use App\Repositories\TreetexaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TreetexaController extends AppBaseController
{
    /** @var  TreetexaRepository */
    private $treetexaRepository;

    public function __construct(TreetexaRepository $treetexaRepo)
    {
        $this->treetexaRepository = $treetexaRepo;
    }

    /**
     * Display a listing of the Treetexa.
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
     * Show the form for creating a new Treetexa.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.treetexas.create');
    }

    /**
     * Store a newly created Treetexa in storage.
     *
     * @param CreateTreetexaRequest $request
     *
     * @return Response
     */
    public function store(CreateTreetexaRequest $request)
    {
        $input = $request->all();

        $treetexa = $this->treetexaRepository->create($input);

        Flash::success('Treetexa saved successfully.');

        return redirect(route('treetexas.index'));
    }

    /**
     * Display the specified Treetexa.
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
     * Show the form for editing the specified Treetexa.
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
     * Update the specified Treetexa in storage.
     *
     * @param int $id
     * @param UpdateTreetexaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTreetexaRequest $request)
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
     * Remove the specified Treetexa from storage.
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
