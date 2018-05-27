<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Categoria;
use App\User;
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
        $equipos = Equipo::where('active', '=', 0)->get();
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
        $user = User::where('id_upb', '=', $request->user_id)->firstOrFail();
        $categoria = Categoria::where('id', '=', $request->categoria_id)->firstOrFail();
        $equipo = new Equipo;
        $equipo->categoria_id = $request->categoria_id;
        $equipo->estado = $request->estado;
        $equipo->observaciones = $request->observaciones;
        $equipo->numero_equipo = $request->numero_equipo;
        $equipo->user_id = $request->user_id;
        $equipo->save();
        $equipo->user()->associate($user);
        $equipo->categoria()->associate($categoria);
        $equipo->push();
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
        $categorias =  Categoria::where('active', '=', 0)->get();
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
        if($equipo->active === 0){
          $equipo->active = 1;
        }
        else {
          // code...
          $equipo->active = 0;
        }
        $equipo->push();
        return redirect()->route('equipo.index');
    }
}
