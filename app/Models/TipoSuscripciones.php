<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoSuscripciones
 * @package App\Models
 * @version July 11, 2023, 3:35 pm UTC
 *
 * @property string $nombre
 * @property integer $n_meses
 * @property number $precio
 */
class TipoSuscripciones extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tipo_suscripciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'n_meses',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'n_meses' => 'integer',
        'precio' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:255',
        'n_meses' => 'required|integer',
        'precio' => 'required|numeric',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
