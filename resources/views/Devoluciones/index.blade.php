@extends('layout.app')

@section('title', "Index Devoluciones");

{{--Section: content --}}
@section('content')

{{--Section; meta--}}
  @section('meta')

  @endsection
  {{--End section; meta--}}

  {{--Section: styles--}}
  @section('styles')

  @endsection
  {{--Section: styles--}}
  <div class="content-wrapper">
    <div class="container">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Ver</a>
        </li>
        <li class="breadcrumb-item active">Devoluciones</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Número de prestamo</th>
              <th>Número de equipo</th>
              <th>Solicitado por</th>
              <th>Recibido por</th>
              <th>Estado</th>
              <th>Equipo</th>
              <th>Observaciones</th>
              <th>Fecha/Hora de entrega</th>
            </tr>
          </thead>
          <tbody>
            @foreach($devoluciones as $devolucion)
              <tr>
                <td><a href="{{route('prestamo.show', $devolucion->prestamo)}}">{{$devolucion->prestamo->id}}</a></td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('equipo.show', $devolucion->prestamo->equipo)}}">{{$devolucion->prestamo->equipo->numero_equipo}}</a>
                  @elseif($devolucion->prestamo->equipo->active === 0)
                    <a href="{{route('equipo.show', $devolucion->prestamo->equipo)}}">{{$devolucion->prestamo->equipo->numero_equipo}}</a>
                  @else
                    {{$devolucion->prestamo->equipo->numero_equipo}}
                  @endif
                </td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('usuario.show', $devolucion->prestamo->usuario)}}">{{$devolucion->prestamo->usuario->nombre}} {{$devolucion->prestamo->usuario->apellido}} {{$devolucion->prestamo->usuario->id_upb}}</a>
                  @elseif($devolucion->prestamo->usuario->active === 0)
                    <a href="{{route('usuario.show', $devolucion->prestamo->usuario)}}">{{$devolucion->prestamo->usuario->nombre}} {{$devolucion->prestamo->usuario->apellido}} {{$devolucion->prestamo->usuario->id_upb}}</a>
                  @else
                    {{$devolucion->prestamo->usuario->nombre}} {{$devolucion->prestamo->usuario->apellido}} {{$devolucion->prestamo->usuario->id_upb}}
                  @endif
                </td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('monitor.show', $devolucion->user)}}">{{$devolucion->user->name}} {{$devolucion->user->id_upb}}</a>
                  @elseif($devolucion->prestamo->user->active === 0)
                    <a href="{{route('monitor.show', $devolucion->user)}}">{{$devolucion->user->name}} {{$devolucion->user->id_upb}}</a>
                  @else
                    {{$devolucion->user->name}} {{$devolucion->user->id_upb}}
                  @endif
                </td>
                <td>
                  <div class="row">
                      {{$devolucion->estado}}
                  </div>
                  <div class="row">
                    Batería: {{$devolucion->carga_bateria}}%
                  </div>
                </td>
                <td>{{$devolucion->prestamo->equipo->categoria->detalles}}</td>
                <td>{{$devolucion->observaciones}}</td>
                <td>{{$devolucion->created_at}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
