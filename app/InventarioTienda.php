<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioTienda extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id', 'tienda_id', 'cantidad',
    ];
}
