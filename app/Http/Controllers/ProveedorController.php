<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        return Proveedor::all();
    }

    public function show(Proveedor $proveedor)
    {
        return $proveedor;
    }

    public function store(Request $request)
    {
        $proveedor = Proveedor::create($request->all());

        return response()->json($proveedor, 201);
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());

        return response()->json($proveedor, 200);
    }

    public function delete(Proveedor $proveedor)
    {
        $proveedor->delete();

        return response()->json(null, 204);
    }
}
