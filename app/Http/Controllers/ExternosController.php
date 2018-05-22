<?php

namespace App\Http\Controllers;

use App\Externo;
use Illuminate\Http\Request;

class ExternosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Externos.index', ['externos' => Externo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Externos.create');
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
          'nombre' => 'required',
          'apellido' => 'required',
          'cargo' => 'required',
          'observaciones' => 'required',
          'correo' => 'emial|required'
        ]);
        Externo::create($request->all());
        return redirect()->route('externo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function show(Externo $externo)
    {
        //
        return view('Externos.show', ['externo' => $externo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function edit(Externo $externo)
    {
        //
        return view('Externos.edit', ['externo' => $externo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Externo $externo)
    {
        //
        $externo->update($request->all());
        return redirect()->route('externo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Externo $externo)
    {
        //
        $externo->delete();
        return redirect()->route('externo.index');
    }
}
