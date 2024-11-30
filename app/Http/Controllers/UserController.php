<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Este método se ejecuta antes de cualquier método en esta clase
    //permite que que el usuario sí o si inicie sesión para interactuar con los métodos
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Este método servirá para poder mostrar la lista de registros al usuario
        /*SELECT * FROM USERS U INNER JOIN MODEL_HAS_ROLES M ON U.ID=M.MODEL_ID INNER JOIN ROLES R ON
            M.ROLE_ID=R.ID*/

            $user = User::all();
        return view('user.user', compact('user'));
       //return "hola";
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
    public function destroy(Request $request)
    {
        //Para poder eliminar
        return $request->id;

    }
}
