<?php

namespace App\Http\Controllers;

use App\Monitor;
use Illuminate\Http\Request;

class MonitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Monitores.index', ['monitor' => Monitor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Monitores.create');
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
          'id_upb' => 'required',
          'correo' => 'email | required',
          'nombre' => 'required',
          'apellido' => 'required',
          'numero_celular' => 'required'
        ]);
        Monitor::create($request->all());

        return redirect()->route('monitor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function show(Monitor $monitor)
    {
        //
        return view('Monitores.show',['monitor' => $monitor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Monitor $monitor)
    {
        //
        return view('Monitores.edit', ['monitor' => $monitor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitor $monitor)
    {
        //
        $monitor->update($request->all());
        return redirect()->route('monitor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitor $monitor)
    {
        //
        $monitor->delete();
        return redirect()->route('monitor.index');
    }
}
