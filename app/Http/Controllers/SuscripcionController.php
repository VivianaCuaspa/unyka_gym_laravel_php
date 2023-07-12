<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSuscripcionRequest;
use App\Http\Requests\UpdateSuscripcionRequest;
use App\Models\Socios;
use App\Repositories\SuscripcionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SuscripcionController extends AppBaseController
{
    /** @var SuscripcionRepository $suscripcionRepository*/
    private $suscripcionRepository;

    public function __construct(SuscripcionRepository $suscripcionRepo)
    {
        $this->suscripcionRepository = $suscripcionRepo;
    }

    /**
     * Display a listing of the Suscripcion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suscripcions = $this->suscripcionRepository->all();

        return view('suscripcions.index')
            ->with('suscripcions', $suscripcions);
    }

    /**
     * Show the form for creating a new Suscripcion.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $socioNombre = $request->input('socio_nombre');

        $socios = Socios::where('nombre', 'LIKE', '%' . $socioNombre . '%')->pluck('nombre', 'id');
    
        return view('suscripcions.create', compact('socios', 'socioNombre'));
    }
    

    /**
     * Store a newly created Suscripcion in storage.
     *
     * @param CreateSuscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateSuscripcionRequest $request)
    {
        $input = $request->all();

        $suscripcion = $this->suscripcionRepository->create($input);

        Flash::success('Suscripcion saved successfully.');

        return redirect(route('suscripcions.index'));
    }

    /**
     * Display the specified Suscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $suscripcion = $this->suscripcionRepository->find($id);

        if (empty($suscripcion)) {
            Flash::error('Suscripcion not found');

            return redirect(route('suscripcions.index'));
        }

        return view('suscripcions.show')->with('suscripcion', $suscripcion);
    }

    /**
     * Show the form for editing the specified Suscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suscripcion = $this->suscripcionRepository->find($id);

        if (empty($suscripcion)) {
            Flash::error('Suscripcion not found');

            return redirect(route('suscripcions.index'));
        }

        return view('suscripcions.edit')->with('suscripcion', $suscripcion);
    }

    /**
     * Update the specified Suscripcion in storage.
     *
     * @param int $id
     * @param UpdateSuscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSuscripcionRequest $request)
    {
        $suscripcion = $this->suscripcionRepository->find($id);

        if (empty($suscripcion)) {
            Flash::error('Suscripcion not found');

            return redirect(route('suscripcions.index'));
        }

        $suscripcion = $this->suscripcionRepository->update($request->all(), $id);

        Flash::success('Suscripcion updated successfully.');

        return redirect(route('suscripcions.index'));
    }

    /**
     * Remove the specified Suscripcion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $suscripcion = $this->suscripcionRepository->find($id);

        if (empty($suscripcion)) {
            Flash::error('Suscripcion not found');

            return redirect(route('suscripcions.index'));
        }

        $this->suscripcionRepository->delete($id);

        Flash::success('Suscripcion deleted successfully.');

        return redirect(route('suscripcions.index'));
    }
}
