<?php

namespace App\Repositories;

use App\Models\ventas;
use App\Repositories\BaseRepository;

/**
 * Class ventasRepository
 * @package App\Repositories
 * @version September 18, 2019, 2:48 am UTC
*/

class ventasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clienteId',
        'vendedorId',
        'productoId',
        'cantidad',
        'total'
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
        return ventas::class;
    }
}
