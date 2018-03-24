<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\InventarioTienda;

class VentaController extends Controller
{
    public function register(Request $request)
    {
    	$inventario = InventarioTienda::find(['producto_id'=>$request->producto_id],
        	['tienda_id'=>$request->tienda_id])->first();
    	if($inventario){
    		if($inventario->cantidad>=$request->cantidad){	

		        $inventario->cantidad -= $request->cantidad;
		        $inventario->save();

		        return response()->json($compra, 201);
    		}
        }
        return response()->json("No existen cantidades del producto en el inventario", 201);
    }

    public function list()
    {
    	return Venta::all();
    }    
}
