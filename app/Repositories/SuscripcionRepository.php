<?php

namespace App\Repositories;

use App\Models\Suscripcion;
use App\Repositories\BaseRepository;

/**
 * Class SuscripcionRepository
 * @package App\Repositories
 * @version July 11, 2023, 4:33 pm UTC
*/

class SuscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'socio_id',
        'tipo_suscripcion_id',
        'fecha_inicio',
        'fecha_fin',
        'estado'
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
        return Suscripcion::class;
    }
}
