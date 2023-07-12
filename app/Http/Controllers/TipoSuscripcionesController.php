<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoSuscripcionesRequest;
use App\Http\Requests\UpdateTipoSuscripcionesRequest;
use App\Models\TipoSuscripciones;
use App\Repositories\TipoSuscripcionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TipoSuscripcionesController extends AppBaseController
{
    /** @var TipoSuscripcionesRepository $tipoSuscripcionesRepository*/
    private $tipoSuscripcionesRepository;

    public function __construct(TipoSuscripcionesRepository $tipoSuscripcionesRepo)
    {
        $this->tipoSuscripcionesRepository = $tipoSuscripcionesRepo;
    }

    /**
     * Display a listing of the TipoSuscripciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoSuscripciones = $this->tipoSuscripcionesRepository->all();

        return view('tipo_suscripciones.index')
            ->with('tipoSuscripciones', $tipoSuscripciones);
    }

    /**
     * Show the form for creating a new TipoSuscripciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_suscripciones.create');
    }

    /**
     * Store a newly created TipoSuscripciones in storage.
     *
     * @param CreateTipoSuscripcionesRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoSuscripcionesRequest $request)
    {
        $input = $request->all();

        $tipoSuscripciones = $this->tipoSuscripcionesRepository->create($input);

        Flash::success('Tipo Suscripciones saved successfully.');

        return redirect(route('tipoSuscripciones.index'));
    }

    /**
     * Display the specified TipoSuscripciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoSuscripciones = $this->tipoSuscripcionesRepository->find($id);

        if (empty($tipoSuscripciones)) {
            Flash::error('Tipo Suscripciones not found');

            return redirect(route('tipoSuscripciones.index'));
        }

        return view('tipo_suscripciones.show')->with('tipoSuscripciones', $tipoSuscripciones);
    }

    /**
     * Show the form for editing the specified TipoSuscripciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoSuscripciones = $this->tipoSuscripcionesRepository->find($id);

        if (empty($tipoSuscripciones)) {
            Flash::error('Tipo Suscripciones not found');

            return redirect(route('tipoSuscripciones.index'));
        }

        return view('tipo_suscripciones.edit')->with('tipoSuscripciones', $tipoSuscripciones);
    }

    /**
     * Update the specified TipoSuscripciones in storage.
     *
     * @param int $id
     * @param UpdateTipoSuscripcionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoSuscripcionesRequest $request)
    {
        $tipoSuscripciones = $this->tipoSuscripcionesRepository->find($id);

        if (empty($tipoSuscripciones)) {
            Flash::error('Tipo Suscripciones not found');

            return redirect(route('tipoSuscripciones.index'));
        }

        $tipoSuscripciones = $this->tipoSuscripcionesRepository->update($request->all(), $id);

        Flash::success('Tipo Suscripciones updated successfully.');

        return redirect(route('tipoSuscripciones.index'));
    }

    /**
     * Remove the specified TipoSuscripciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoSuscripciones = $this->tipoSuscripcionesRepository->find($id);

        if (empty($tipoSuscripciones)) {
            Flash::error('Tipo Suscripciones not found');

            return redirect(route('tipoSuscripciones.index'));
        }

        $this->tipoSuscripcionesRepository->delete($id);

        Flash::success('Tipo Suscripciones deleted successfully.');

        return redirect(route('tipoSuscripciones.index'));
    }

    public function searchTipoSuscripciones(Request $request)
    {
        $search = $request->get('term');
        $tipoSuscripciones = TipoSuscripciones::where('nombre', 'LIKE', '%' . $search . '%')->get();

        $data = [];

        foreach ($tipoSuscripciones as $tipoSuscripcion) {
            $data[] = [
                'id' => $tipoSuscripcion->id,
                'nombre' => $tipoSuscripcion->nombre
            ];
        }
        return $data;
    }
}
