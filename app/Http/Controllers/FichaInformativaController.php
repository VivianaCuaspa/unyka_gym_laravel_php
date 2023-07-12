<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFichaInformativaRequest;
use App\Http\Requests\UpdateFichaInformativaRequest;
use App\Repositories\FichaInformativaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FichaInformativaController extends AppBaseController
{
    /** @var FichaInformativaRepository $fichaInformativaRepository*/
    private $fichaInformativaRepository;

    public function __construct(FichaInformativaRepository $fichaInformativaRepo)
    {
        $this->fichaInformativaRepository = $fichaInformativaRepo;
    }

    /**
     * Display a listing of the FichaInformativa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fichaInformativas = $this->fichaInformativaRepository->all();

        return view('ficha_informativas.index')
            ->with('fichaInformativas', $fichaInformativas);
    }

    /**
     * Show the form for creating a new FichaInformativa.
     *
     * @return Response
     */
    public function create()
    {
        return view('ficha_informativas.create');
    }

    /**
     * Store a newly created FichaInformativa in storage.
     *
     * @param CreateFichaInformativaRequest $request
     *
     * @return Response
     */
    public function store(CreateFichaInformativaRequest $request)
    {
        $input = $request->all();

        $fichaInformativa = $this->fichaInformativaRepository->create($input);

        Flash::success('Ficha Informativa saved successfully.');

        return redirect(route('fichaInformativas.index'));
    }

    /**
     * Display the specified FichaInformativa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fichaInformativa = $this->fichaInformativaRepository->find($id);

        if (empty($fichaInformativa)) {
            Flash::error('Ficha Informativa not found');

            return redirect(route('fichaInformativas.index'));
        }

        return view('ficha_informativas.show')->with('fichaInformativa', $fichaInformativa);
    }

    /**
     * Show the form for editing the specified FichaInformativa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fichaInformativa = $this->fichaInformativaRepository->find($id);

        if (empty($fichaInformativa)) {
            Flash::error('Ficha Informativa not found');

            return redirect(route('fichaInformativas.index'));
        }

        return view('ficha_informativas.edit')->with('fichaInformativa', $fichaInformativa);
    }

    /**
     * Update the specified FichaInformativa in storage.
     *
     * @param int $id
     * @param UpdateFichaInformativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFichaInformativaRequest $request)
    {
        $fichaInformativa = $this->fichaInformativaRepository->find($id);

        if (empty($fichaInformativa)) {
            Flash::error('Ficha Informativa not found');

            return redirect(route('fichaInformativas.index'));
        }

        $fichaInformativa = $this->fichaInformativaRepository->update($request->all(), $id);

        Flash::success('Ficha Informativa updated successfully.');

        return redirect(route('fichaInformativas.index'));
    }

    /**
     * Remove the specified FichaInformativa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fichaInformativa = $this->fichaInformativaRepository->find($id);

        if (empty($fichaInformativa)) {
            Flash::error('Ficha Informativa not found');

            return redirect(route('fichaInformativas.index'));
        }

        $this->fichaInformativaRepository->delete($id);

        Flash::success('Ficha Informativa deleted successfully.');

        return redirect(route('fichaInformativas.index'));
    }
}
