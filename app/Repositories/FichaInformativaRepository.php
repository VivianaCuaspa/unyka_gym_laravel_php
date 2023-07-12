<?php

namespace App\Repositories;

use App\Models\FichaInformativa;
use App\Repositories\BaseRepository;

/**
 * Class FichaInformativaRepository
 * @package App\Repositories
 * @version July 12, 2023, 2:34 am UTC
*/

class FichaInformativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nivel_actividad',
        'frecuencia_alimentacion',
        'intolerancias',
        'alergias',
        'preparacion_comidas',
        'patologia',
        'patología_familiar',
        'medicacion',
        'socio_id'
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
        return FichaInformativa::class;
    }
}
