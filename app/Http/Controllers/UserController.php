<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Este método servirá para poder mostrar la lista de registros al usuario
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Este método sirve para poder guardar datos en la tabla
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Esté método sirve para hacer búsquedas
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Este método sirve para previsualizar los datos que se van a actualizar
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Sirve para actualizar un registro
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Para poder eliminar
    }
}
