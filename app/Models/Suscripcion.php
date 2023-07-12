<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Suscripcion
 * @package App\Models
 * @version July 11, 2023, 4:33 pm UTC
 *
 * @property \App\Models\Socio $socio
 * @property \App\Models\TipoSuscripcione $tipoSuscripcion
 * @property integer $socio_id
 * @property integer $tipo_suscripcion_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $estado
 */
class Suscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'suscripciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'socio_id',
        'tipo_suscripcion_id',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'socio_id' => 'integer',
        'tipo_suscripcion_id' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'socio_id' => 'required',
        'tipo_suscripcion_id' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'estado' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function socio()
    {
        return $this->belongsTo(\App\Models\Socio::class, 'socio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoSuscripcion()
    {
        return $this->belongsTo(\App\Models\TipoSuscripcione::class, 'tipo_suscripcion_id');
    }
}
