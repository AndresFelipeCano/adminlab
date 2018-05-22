<?php

namespace App\Http\Controllers;

use App\DetallesPrestamo;
use Illuminate\Http\Request;

class DetallesPrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Detalles.index', ['detallesPrestamos' => DetallesPrestamo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Detalles.create');

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
          'id_externo' => 'required',
          'detalles' => 'required'
        ]);
        DetallesPrestamo::create($request->all());
        return redirect()->route('detallesprestamo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallesPrestamo  $detallesPrestamo
     * @return \Illuminate\Http\Response
     */
    public function show(DetallesPrestamo $detallesPrestamo)
    {
        //
        return view('Detalles.show', ['detallesPrestamo' => $detallesPrestamo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallesPrestamo  $detallesPrestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallesPrestamo $detallesPrestamo)
    {
        //
        return view('Detalles.edit', ['detallesPrestamo' => $detallesPrestamo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallesPrestamo  $detallesPrestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesPrestamo $detallesPrestamo)
    {
        //
        $detallesPrestamo->update($request->all());
        return redirect()->route('detallesprestamo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallesPrestamo  $detallesPrestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallesPrestamo $detallesPrestamo)
    {
        //
        $detallesPrestamo->delete();
        return redirect()->route('detallesprestamo.index');
    }
}
