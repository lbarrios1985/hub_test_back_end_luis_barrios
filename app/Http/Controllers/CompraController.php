<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\InventarioTienda;

class CompraController extends Controller
{
 
    public function register(Request $request)
    {
        $compra = Compra::create($request->all());

        $inventario = InventarioTienda::firstOrCreate(['producto_id'=>$request->producto_id],
        	['tienda_id'=>$request->tienda_id]);

        $inventario->cantidad += $request->cantidad;
        $inventario->save();

        return response()->json($compra, 201);
    }   
}
