<?php

namespace App\Http\Controllers;

use App\Devolucion;
use Illuminate\Http\Request;

class DevolucionsController extends Controller
{
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
        return view('Devoluciones.create');
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
          'id_prestamo' => 'required',
          'carga_bateria' => 'required'
          'observaciones' => 'required'
        ]);
        Devolucion::create($request->all());

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
        return view('Devoluciones.show', ['devoluciones' => $devolucion]);
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
        return view('Devoluciones.edit', ['devoluciones' => $devolucion]);
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
