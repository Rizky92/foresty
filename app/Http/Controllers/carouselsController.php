<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecarouselsRequest;
use App\Http\Requests\UpdatecarouselsRequest;
use App\Repositories\carouselsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class carouselsController extends AppBaseController
{
    /** @var  carouselsRepository */
    private $carouselsRepository;

    public function __construct(carouselsRepository $carouselsRepo)
    {
        $this->carouselsRepository = $carouselsRepo;
    }

    /**
     * Display a listing of the carousels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carousels = $this->carouselsRepository->all();

        return view('backend.carousels.index')
            ->with('carousels', $carousels);
    }

    /**
     * Show the form for creating a new carousels.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.carousels.create');
    }

    /**
     * Store a newly created carousels in storage.
     *
     * @param CreatecarouselsRequest $request
     *
     * @return Response
     */
    public function store(CreatecarouselsRequest $request)
    {
        $input = $request->all();

        $carousels = $this->carouselsRepository->create($input);

        Flash::success('Carousels saved successfully.');

        return redirect(route('carousels.index'));
    }

    /**
     * Display the specified carousels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carousels = $this->carouselsRepository->find($id);

        if (empty($carousels)) {
            Flash::error('Carousels not found');

            return redirect(route('carousels.index'));
        }

        return view('backend.carousels.show')->with('carousels', $carousels);
    }

    /**
     * Show the form for editing the specified carousels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carousels = $this->carouselsRepository->find($id);

        if (empty($carousels)) {
            Flash::error('Carousels not found');

            return redirect(route('carousels.index'));
        }

        return view('backend.carousels.edit')->with('carousels', $carousels);
    }

    /**
     * Update the specified carousels in storage.
     *
     * @param int $id
     * @param UpdatecarouselsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecarouselsRequest $request)
    {
        $carousels = $this->carouselsRepository->find($id);

        if (empty($carousels)) {
            Flash::error('Carousels not found');

            return redirect(route('carousels.index'));
        }

        $carousels = $this->carouselsRepository->update($request->all(), $id);

        Flash::success('Carousels updated successfully.');

        return redirect(route('carousels.index'));
    }

    /**
     * Remove the specified carousels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carousels = $this->carouselsRepository->find($id);

        if (empty($carousels)) {
            Flash::error('Carousels not found');

            return redirect(route('carousels.index'));
        }

        $this->carouselsRepository->delete($id);

        Flash::success('Carousels deleted successfully.');

        return redirect(route('carousels.index'));
    }
}
