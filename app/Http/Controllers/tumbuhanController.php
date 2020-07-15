<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetumbuhanRequest;
use App\Http\Requests\UpdatetumbuhanRequest;
use App\Repositories\tumbuhanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tumbuhanController extends AppBaseController
{
    /** @var  tumbuhanRepository */
    private $tumbuhanRepository;

    public function __construct(tumbuhanRepository $tumbuhanRepo)
    {
        $this->tumbuhanRepository = $tumbuhanRepo;
    }

    /**
     * Display a listing of the tumbuhan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tumbuhans = $this->tumbuhanRepository->all();

        return view('backend.tumbuhans.index')
            ->with('tumbuhans', $tumbuhans);
    }

    /**
     * Show the form for creating a new tumbuhan.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tumbuhans.create');
    }

    /**
     * Store a newly created tumbuhan in storage.
     *
     * @param CreatetumbuhanRequest $request
     *
     * @return Response
     */
    public function store(CreatetumbuhanRequest $request)
    {
        $input = $request->all();

        $tumbuhan = $this->tumbuhanRepository->create($input);

        Flash::success('Tumbuhan saved successfully.');

        return redirect(route('tumbuhans.index'));
    }

    /**
     * Display the specified tumbuhan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tumbuhan = $this->tumbuhanRepository->find($id);

        if (empty($tumbuhan)) {
            Flash::error('Tumbuhan not found');

            return redirect(route('tumbuhans.index'));
        }

        return view('backend.tumbuhans.show')->with('tumbuhan', $tumbuhan);
    }

    /**
     * Show the form for editing the specified tumbuhan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tumbuhan = $this->tumbuhanRepository->find($id);

        if (empty($tumbuhan)) {
            Flash::error('Tumbuhan not found');

            return redirect(route('tumbuhans.index'));
        }

        return view('backend.tumbuhans.edit')->with('tumbuhan', $tumbuhan);
    }

    /**
     * Update the specified tumbuhan in storage.
     *
     * @param int $id
     * @param UpdatetumbuhanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetumbuhanRequest $request)
    {
        $tumbuhan = $this->tumbuhanRepository->find($id);

        if (empty($tumbuhan)) {
            Flash::error('Tumbuhan not found');

            return redirect(route('tumbuhans.index'));
        }

        $tumbuhan = $this->tumbuhanRepository->update($request->all(), $id);

        Flash::success('Tumbuhan updated successfully.');

        return redirect(route('tumbuhans.index'));
    }

    /**
     * Remove the specified tumbuhan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tumbuhan = $this->tumbuhanRepository->find($id);

        if (empty($tumbuhan)) {
            Flash::error('Tumbuhan not found');

            return redirect(route('tumbuhans.index'));
        }

        $this->tumbuhanRepository->delete($id);

        Flash::success('Tumbuhan deleted successfully.');

        return redirect(route('tumbuhans.index'));
    }
}
