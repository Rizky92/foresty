<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createkoleksi_herbariumRequest;
use App\Http\Requests\Updatekoleksi_herbariumRequest;
use App\Repositories\koleksi_herbariumRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class koleksi_herbariumController extends AppBaseController
{
    /** @var  koleksi_herbariumRepository */
    private $koleksiHerbariumRepository;

    public function __construct(koleksi_herbariumRepository $koleksiHerbariumRepo)
    {
        $this->koleksiHerbariumRepository = $koleksiHerbariumRepo;
    }

    /**
     * Display a listing of the koleksi_herbarium.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $koleksiHerbaria = $this->koleksiHerbariumRepository->all();

        return view('backend.koleksi_herbaria.index')
            ->with('koleksiHerbaria', $koleksiHerbaria);
    }

    /**
     * Show the form for creating a new koleksi_herbarium.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.koleksi_herbaria.create');
    }

    /**
     * Store a newly created koleksi_herbarium in storage.
     *
     * @param Createkoleksi_herbariumRequest $request
     *
     * @return Response
     */
    public function store(Createkoleksi_herbariumRequest $request)
    {
        $input = $request->all();

        $koleksiHerbarium = $this->koleksiHerbariumRepository->create($input);

        Flash::success('Koleksi Herbarium saved successfully.');

        return redirect(route('koleksiHerbaria.index'));
    }

    /**
     * Display the specified koleksi_herbarium.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $koleksiHerbarium = $this->koleksiHerbariumRepository->find($id);

        if (empty($koleksiHerbarium)) {
            Flash::error('Koleksi Herbarium not found');

            return redirect(route('koleksiHerbaria.index'));
        }

        return view('backend.koleksi_herbaria.show')->with('koleksiHerbarium', $koleksiHerbarium);
    }

    /**
     * Show the form for editing the specified koleksi_herbarium.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $koleksiHerbarium = $this->koleksiHerbariumRepository->find($id);

        if (empty($koleksiHerbarium)) {
            Flash::error('Koleksi Herbarium not found');

            return redirect(route('koleksiHerbaria.index'));
        }

        return view('backend.koleksi_herbaria.edit')->with('koleksiHerbarium', $koleksiHerbarium);
    }

    /**
     * Update the specified koleksi_herbarium in storage.
     *
     * @param int $id
     * @param Updatekoleksi_herbariumRequest $request
     *
     * @return Response
     */
    public function update($id, Updatekoleksi_herbariumRequest $request)
    {
        $koleksiHerbarium = $this->koleksiHerbariumRepository->find($id);

        if (empty($koleksiHerbarium)) {
            Flash::error('Koleksi Herbarium not found');

            return redirect(route('koleksiHerbaria.index'));
        }

        $koleksiHerbarium = $this->koleksiHerbariumRepository->update($request->all(), $id);

        Flash::success('Koleksi Herbarium updated successfully.');

        return redirect(route('koleksiHerbaria.index'));
    }

    /**
     * Remove the specified koleksi_herbarium from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $koleksiHerbarium = $this->koleksiHerbariumRepository->find($id);

        if (empty($koleksiHerbarium)) {
            Flash::error('Koleksi Herbarium not found');

            return redirect(route('koleksiHerbaria.index'));
        }

        $this->koleksiHerbariumRepository->delete($id);

        Flash::success('Koleksi Herbarium deleted successfully.');

        return redirect(route('koleksiHerbaria.index'));
    }
}
