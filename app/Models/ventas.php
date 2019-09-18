<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ventas
 * @package App\Models
 * @version September 18, 2019, 2:48 am UTC
 *
 * @property \App\Models\Cliente clienteid
 * @property \App\Models\Producto productoid
 * @property \App\Models\Vendedore vendedorid
 * @property integer clienteId
 * @property integer vendedorId
 * @property integer productoId
 * @property integer cantidad
 * @property integer total
 */
class ventas extends Model
{
    use SoftDeletes;

    public $table = 'ventas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'clienteId',
        'vendedorId',
        'productoId',
        'cantidad',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clienteId' => 'integer',
        'vendedorId' => 'integer',
        'productoId' => 'integer',
        'cantidad' => 'integer',
        'total' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'clienteId' => 'required',
        'vendedorId' => 'required',
        'productoId' => 'required',
        'cantidad' => 'required',
        'total' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clienteid()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'clienteId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productoid()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'productoId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vendedorid()
    {
        return $this->belongsTo(\App\Models\Vendedore::class, 'vendedorId');
    }
}
