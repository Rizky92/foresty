<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFloraRequest;
use App\Http\Requests\UpdateFloraRequest;
use App\Repositories\FloraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FloraController extends AppBaseController
{
    /** @var  FloraRepository */
    private $floraRepository;

    public function __construct(FloraRepository $floraRepo)
    {
        $this->floraRepository = $floraRepo;
    }

    /**
     * Display a listing of the Flora.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $floras = $this->floraRepository->all();

        return view('backend.floras.index')
            ->with('floras', $floras);
    }

    /**
     * Show the form for creating a new Flora.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.floras.create');
    }

    /**
     * Store a newly created Flora in storage.
     *
     * @param CreateFloraRequest $request
     *
     * @return Response
     */
    public function store(CreateFloraRequest $request)
    {
        $input = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'required|file|mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $fn = date("dmy_hm").'_flora_'.$input['nama'].'.'. $file->getClientOriginalExtension();

            $img = $file->storeAs('flora', $fn, 'public');
            $path = asset('storage/'.$img);
        }

        $input['img_path'] = $path;

        $flora = $this->floraRepository->create($input);

        Flash::success('Flora saved successfully.');

        return redirect(route('floras.index'));
    }

    /**
     * Display the specified Flora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('floras.index'));
        }

        return view('backend.floras.show')->with('flora', $flora);
    }

    /**
     * Show the form for editing the specified Flora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('floras.index'));
        }

        return view('backend.floras.edit')->with('flora', $flora);
    }

    /**
     * Update the specified Flora in storage.
     *
     * @param int $id
     * @param UpdateFloraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFloraRequest $request)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('floras.index'));
        }

        $update = $request->except('img_path');

        if ($request->hasFile('img_path')) {

            $validate = $request->validate([
                'img_path' => 'required|file|mimes:jpg,jpeg,png|max:5012'
            ]);

            $file = $validate['img_path'];

            $fn = date("dmy_hm").'_flora_'.$update['nama'].'.'. $file->getClientOriginalExtension();

            $img = $file->storeAs('flora', $fn, 'public');
            $path = asset('storage/'.$img);
        }

        $update['img_path'] = $path;

        $flora = $this->floraRepository->update($update, $id);

        Flash::success('Flora updated successfully.');

        return redirect(route('floras.index'));
    }

    /**
     * Remove the specified Flora from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $flora = $this->floraRepository->find($id);

        if (empty($flora)) {
            Flash::error('Flora not found');

            return redirect(route('floras.index'));
        }

        $this->floraRepository->delete($id);

        Flash::success('Flora deleted successfully.');

        return redirect(route('floras.index'));
    }
}
