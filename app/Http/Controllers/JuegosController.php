<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Rule;
use App\Models\Juego;
Use Session;
Use Redirect;


class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //Acceder a la base de datos.
        //Recuperar los datos.
        //Pasar a la vista los datos para que los muestre

        $juegos = Juego::all();


        //Llamo a la vista
        return view('juego.index', ['juegos' => $juegos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juego.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $customMessages = [
            'nombre.required' => 'Cuidado!! el campo del nombre no se admite vacío',
            'nombre.max' => 'Longitud maxima excedida',
            'lanzamiento' => 'error en el campo lanzamiento'
        ];

        $Reglas = [
            'nombre' => 'required|max:50',
            'lanzamiento' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'genero' => 'in:terror,deportes,shooter,infantil,survival,accion',
            'plataformas' => 'in:ps3,ps4,ps5,XboxOne,Xbox360',
            'distribuidor' => 'required|max:50',
            'precio' => 'required|numeric'];


        $validatedData = $request->validate($Reglas, $customMessages);



        $juego = new Juego();
        $juego->nombre = $request->input('nombre');
        $juego->lanzamiento = $request->input('lanzamiento');
        $juego->genero = $request->input('genero');
        $juego->plataformas = $request->input('plataformas');
        $juego->distribuidor = $request->input('distribuidor');
        $juego->precio = $request->input('precio');
        $file = $request->file('foto');
        if($file !== null){
            //obtenemos el nombre del archivo
        $nombre = $juego->lanzamiento.$juego->nombre;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $file->move(public_path("images/"), $nombre);
        $juego->foto=$nombre;
        }
        else {
            $nombre = "notfound.jpg";
            $juego->foto=$nombre;
        }

        $juego->save();

        return redirect('/juego')->with('success', 'Juego creado correctamente');

        // echo '<font color="red">Esto es un texto en rojo.</font>';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Recuperar los datos de ese registro y mostrarlo
        $juego = Juego::find($id);
        if($juego==null) return redirect('/juego');
        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ids
     */
    public function edit($id)
    {
        $juego = Juego::find($id);
        return view('juego.update',compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump("Estoy aqui en update");

        //compruebo los valores
         $validatedData = $request->validate([
            'nombre' => 'required|max:50',
            'lanzamiento' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'genero' => 'in:terror,deportes,shooter,infantil,survival,accion',
            'plataformas' => 'in:ps3,ps4,ps5,XboxOne,Xbox360',
            'distribuidor' => 'required|max:50',
            'precio' => 'required|numeric',
            'foto' => 'required|max:50' ]);

        //recoger los valores
        $juego = Juego::find($id);
        //$game->id = $id;
        $juego->nombre = $request->input('nombre');
        $juego->lanzamiento = $request->input('lanzamiento');
        $juego->genero = $request->input('genero');
        $juego->plataformas = $request->input('plataformas');
        $juego->distribuidor = $request->input('distribuidor');
        $juego->precio = $request->input('precio');
        $juego->foto = $request->input('foto');
        $juego->save();

        //guardarlo
        //redirecciono a la pagina inicial, con el mensaje de que se modificado correctamente
        return redirect('/juego')->with('success', 'Juego modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $juego = Juego::find($id);
        $juego->delete();
        return redirect('/juego')->with('success', 'Juego eliminado correctamente');
    }


}
