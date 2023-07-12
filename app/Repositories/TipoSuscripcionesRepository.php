<?php

namespace App\Repositories;

use App\Models\TipoSuscripciones;
use App\Repositories\BaseRepository;

/**
 * Class TipoSuscripcionesRepository
 * @package App\Repositories
 * @version July 11, 2023, 3:35 pm UTC
*/

class TipoSuscripcionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'n_meses',
        'precio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoSuscripciones::class;
    }
}
