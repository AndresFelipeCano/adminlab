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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Detalles.index', ['categorias' => DestallesPrestamo::all()]);
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
        return view('Detalles.show', ['detalles' => $detallesPrestamo]);
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
        return view('Detalles.edit', ['detalles' => $detallesPrestamo]);
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
    }
}
