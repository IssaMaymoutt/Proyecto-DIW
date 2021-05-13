<?php

namespace App\Http\Controllers;
use App\Models\Juego;

use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function vista()
    {
        //Acceder a la base de datos.
        //Recuperar los datos.
        //Pasar a la vista los datos para que los muestre

        $juegos = Juego::all();


        //Llamo a la vista
        return view('publico.vista', ['juegos' => $juegos]);
    }

}
