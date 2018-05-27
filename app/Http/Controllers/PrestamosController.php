<?php

namespace App\Http\Controllers;

use App\Prestamo;
use App\User; //Usuario registrador en la app
use App\Usuario; //Usuarios que prestan equipos
use App\Equipo;//Equipos que pueden ser prestados
use App\DetallesPrestamo;//detalles adicionales del prestamo, en otra tabla por normalización
use Carbon\Carbon;
use Illuminate\Http\Request;

class PrestamosController extends Controller
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
        $monitores = User::where('cargo', '=', 'monitor')->get();
        $administradores = User::where('cargo', '=', 'administrador')->get();
        $equipos = Equipo::where('estado', '=', 'disponible')->get();
        $usuarios = Usuario::all();
        return view('Prestamos.create')->with(compact('today'))
        ->with(compact('monitores'))
        ->with(compact('administradores'))
        ->with(compact('equipos'))
        ->with(compact('usuarios'));
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
          'user_id' => 'required',
          'usuario_id' => 'required',
          'equipo_id' => 'required',
          'today' => 'required|string',
          'estado' => 'required|string',
          'detalles' => 'required|string'
        ]);
        $prestamo = new Prestamo;
        $user = User::where('id_upb', '=', $request->user_id)->firstOrFail();
        $usuario = Usuario::where('id_upb', '=', $request->usuario_id)->firstOrFail();
        $equipo = Equipo::where('id', '=', $request->equipo_id)->firstOrFail();
        $prestamo->user_id = $request->user_id;
        $prestamo->usuario_id = $request->usuario_id;
        $prestamo->equipo_id = $request->equipo_id;
        $prestamo->today = $request->today;
        $prestamo->estado = $request->estado;
        $prestamo->save();
        $prestamo->detalles_prestamo()->create(['prestamo_id' => $prestamo->id, 'detalles' => $request->detalles]);
        $prestamo->user()->associate($user);
        $prestamo->usuario()->associate($usuario);
        $prestamo->equipo()->associate($equipo);
        $prestamo->push();
        $equipo->estado = "no_disponible";
        $equipo->push();
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
