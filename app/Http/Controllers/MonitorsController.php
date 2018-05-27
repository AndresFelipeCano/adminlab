<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MonitorsController extends Controller
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
        $monitores = User::where('active', '=', 0)->get();
        return view('Monitores.index')->compact('monitors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/register');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function show(User $monitor)
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
    public function edit(User $monitor)
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
    public function update(Request $request, User $monitor)
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
    public function destroy(User $monitor)
    {
        //
        $monitor->active = 1;
        $monitor->push();
        return redirect()->route('monitor.index');
    }
}
