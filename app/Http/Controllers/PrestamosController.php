<?php

namespace App\Http\Controllers;

use App\Prestamo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dates = Prestamo::all()->pluck('today')->unique()->toArray();
        $values[0] = 0;
        $i = 0;
        foreach($dates as $date){
          $values[$i] =  count(Prestamo::all()->where('today', $date));
          $i++;
        }

        return view('Prestamos.index',[
          'prestamos' => Prestamo::all(),
          'dates' => $dates,
          'values' => $values
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $today = Carbon::now()->toDateString();
        return view('Prestamos.create', compact('today'));
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
        
        Prestamo::Create($request->all());
        return redirect()->route('prestamo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
        return view('Prestamos.show', ['prestamo' => $prestamo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
        return view('Prestamos.edit', ['prestamo' => $prestamo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
        $prestamo->update($request->all());
        return redirect()->route('prestamo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
        $prestamo->delete();
        return redirect()->route('prestamo.index');
    }
}
