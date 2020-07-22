<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTreetaxaRequest;
use App\Http\Requests\UpdateTreetaxaRequest;
use App\Repositories\TreetaxaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TreetaxaController extends AppBaseController
{
    /** @var  TreetaxaRepository */
    private $treetaxaRepository;

    public function __construct(TreetaxaRepository $treetaxaRepo)
    {
        $this->treetaxaRepository = $treetaxaRepo;
    }

    /**
     * Display a listing of the Treetaxa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $treetaxas = $this->treetaxaRepository->all();

        return view('backend.treetaxas.index')
            ->with('treetaxas', $treetaxas);
    }

    /**
     * Show the form for creating a new Treetaxa.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.treetaxas.create');
    }

    /**
     * Store a newly created Treetaxa in storage.
     *
     * @param CreateTreetaxaRequest $request
     *
     * @return Response
     */
    public function store(CreateTreetaxaRequest $request)
    {
        $input = $request->all();

        $treetaxa = $this->treetaxaRepository->create($input);

        Flash::success('Treetaxa saved successfully.');

        return redirect(route('dashboard.treetaxas.index'));
    }

    /**
     * Display the specified Treetaxa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $treetaxa = $this->treetaxaRepository->find($id);

        if (empty($treetaxa)) {
            Flash::error('Treetaxa not found');

            return redirect(route('dashboard.treetaxas.index'));
        }

        return view('backend.treetaxas.show')->with('treetaxa', $treetaxa);
    }

    /**
     * Show the form for editing the specified Treetaxa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $treetaxa = $this->treetaxaRepository->find($id);

        if (empty($treetaxa)) {
            Flash::error('Treetaxa not found');

            return redirect(route('dashboard.treetaxas.index'));
        }

        return view('backend.treetaxas.edit')->with('treetaxa', $treetaxa);
    }

    /**
     * Update the specified Treetaxa in storage.
     *
     * @param int $id
     * @param UpdateTreetaxaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTreetaxaRequest $request)
    {
        $treetaxa = $this->treetaxaRepository->find($id);

        if (empty($treetaxa)) {
            Flash::error('Treetaxa not found');

            return redirect(route('dashboard.treetaxas.index'));
        }

        $treetaxa = $this->treetaxaRepository->update($request->all(), $id);

        Flash::success('Treetaxa updated successfully.');

        return redirect(route('dashboard.treetaxas.index'));
    }

    /**
     * Remove the specified Treetaxa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $treetaxa = $this->treetaxaRepository->find($id);

        if (empty($treetaxa)) {
            Flash::error('Treetaxa not found');

            return redirect(route('dashboard.treetaxas.index'));
        }

        $this->treetaxaRepository->delete($id);

        Flash::success('Treetaxa deleted successfully.');

        return redirect(route('dashboard.treetaxas.index'));
    }
}
