<?php

namespace App\Http\Controllers;

use App\Devolucion;
use App\Prestamo;
use App\User;
use App\Equipo;
use Illuminate\Http\Request;

class DevolucionsController extends Controller
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
        return view('Devoluciones.index', ['devoluciones' => Devolucion::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prestamos = Prestamo::where('estado', '=', 'activo')->get();
        return view('Devoluciones.create')->with(compact('prestamos'));
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
          'carga_bateria' => 'required',
          'observaciones' => 'required|string',
          'prestamo_id' => 'required',
          'estado' => 'required|string',
          'user_id' => 'required'
        ]);
        $devolucion = new Devolucion;
        $prestamo = Prestamo::where('id', '=', $request->prestamo_id)->firstOrFail();
        $user = User::where('id_upb', '=', $request->user_id)->firstOrFail();
        $equipo = Equipo::where('id', '=', $prestamo->equipo->id)->firstOrFail();
        $devolucion->prestamo_id = $request->prestamo_id;
        $devolucion->carga_bateria = $request->carga_bateria;
        $devolucion->observaciones = $request->observaciones;
        $devolucion->estado = $request->estado;
        $devolucion->user_id = $request->user_id;
        $devolucion->prestamo()->associate($prestamo);
        $devolucion->user()->associate($user);
        $devolucion->push();
        $prestamo->estado = "inactivo";
        $prestamo->push();
        $equipo->estado = "disponible";;
        $equipo->push();

        return redirect()->route('devolucion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Devolucion $devolucion)
    {
        //
        return view('Devoluciones.show', ['devolucion' => $devolucion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Devolucion $devolucion)
    {
        //
        return view('Devoluciones.edit', ['devolucion' => $devolucion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devolucion $devolucion)
    {
        //
        $devolucion->update($request->all());
        return redirect()->route('devolucion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devolucion $devolucion)
    {
        //
        $devolucion->delete();
        return redirect()->route('devolucion.index');
    }
}
