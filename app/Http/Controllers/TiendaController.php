<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class TiendaController extends Controller
{
    public function index()
    {
        return Tienda::all();
    }

    public function show(Tienda $tienda)
    {
        return $tienda;
    }

    public function store(Request $request)
    {
        $tienda = Tienda::create($request->all());

        return response()->json($tienda, 201);
    }

    public function update(Request $request, Tienda $tienda)
    {
        $tienda->update($request->all());

        return response()->json($tienda, 200);
    }

    public function delete(Tienda $tienda)
    {
        $tienda->delete();

        return response()->json(null, 204);
    }
}