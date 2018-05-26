<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Categoria;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
  public function __construct()
  {

    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos = Equipo::all();
        return view('Equipos.index')->with(compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias =  Categoria::all();
        $numero_equipo = Equipo::all()->count() + 1;
        return view('Equipos.create')->with(compact('categorias'))->with(compact('numero_equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
          'categoria_id' => 'required',
          'estado' => 'required|string',
          'observaciones' => 'required',
          'numero_equipo' => 'required|unique:equipos',
          'user_id' => 'required'
        ]);
        Equipo::create($request->all());
        return redirect()->route('equipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
        return view('Equipos.show', ['equipo' => $equipo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
        $categorias =  Categoria::all();
        return view('Equipos.edit')->with(compact('equipo'))->with(compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
        $equipo->update($request->all());
        return redirect()->route('equipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
        $usuario->delete();
        return redirect()->route('equipo.index');
    }
}
