<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FichaInformativa
 * @package App\Models
 * @version July 12, 2023, 3:05 pm UTC
 *
 * @property \App\Models\Socio $socio
 * @property integer $nivel_actividad
 * @property integer $frecuencia_alimentacion
 * @property string $intolerancias
 * @property string $alergias
 * @property string $preparacion_comidas
 * @property string $patologia
 * @property string $patología_familiar
 * @property string $medicacion
 * @property integer $socio_id
 */
class FichaInformativa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'fichas_informativas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel_actividad' => 'integer',
        'frecuencia_alimentacion' => 'integer',
        'intolerancias' => 'string',
        'alergias' => 'string',
        'preparacion_comidas' => 'string',
        'patologia' => 'string',
        'patología_familiar' => 'string',
        'medicacion' => 'string',
        'socio_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nivel_actividad' => 'required|integer',
        'frecuencia_alimentacion' => 'required|integer',
        'intolerancias' => 'required|string|max:255',
        'alergias' => 'required|string|max:255',
        'preparacion_comidas' => 'required|string|max:255',
        'patologia' => 'required|string|max:255',
        'patología_familiar' => 'required|string|max:255',
        'medicacion' => 'required|string|max:255',
        'socio_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function socio()
    {
        return $this->belongsTo(\App\Models\Socios::class, 'socio_id');
    }
}
