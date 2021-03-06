@extends('layout.app')

@section('title', "Show Equipo");

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
        <li class="breadcrumb-item active">Equipo {{$equipo->numero_equipo}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Número equipo</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$equipo->numero_equipo}}</td>
              <td>{{$equipo->categoria->nombre}}</td>
              <td>{{$equipo->estado}}</td>
              <td>{{$equipo->observaciones}}</td>
              <td>
                <a name="button" href="{{route('equipo.edit', $equipo)}}" class="btn btn-primary">{{__('Editar')}}</a>
                @if(Auth::user()->cargo === "administrador")
                  @if($equipo->active === 0)
                    <a class="btn btn-primary" href="{{route('equipo.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}</a>
                  @else
                    <a class="btn btn-primary" href="{{route('equipo.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Reestablecer')}}</a>
                  @endif
                <form id="edit-form" action="{{ route('equipo.destroy', $equipo) }}" method="POST" style="display: none;">
                    @csrf
                    {{method_field('DELETE')}}
                </form>
                @endif
              </td>
            </tr>
        </tbody>
      </table>
    </div>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Historial de préstamos</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Número del prestamo</th>
                <th>Solicitado por</th>
                <th>Prestado por</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Fecha/Hora de prestamo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($equipo->prestamos as $prestamo)
                <tr>
                  <td><a href="{{route('prestamo.show', $prestamo)}}">{{$prestamo->id}} </a> </td>
                  <td><a href="{{route('usuario.show', $prestamo->usuario)}}">{{$prestamo->usuario->nombre}} {{$prestamo->usuario->apellido}} {{$prestamo->usuario->id_upb}}</a> </td>
                  <td><a href="{{route('monitor.show', $prestamo->user)}}">{{$prestamo->user->name}} {{$prestamo->user->apellido}} {{$prestamo->user->id_upb}}</a></td>
                  <td>{{$prestamo->estado}} </td>
                  <td>{{$prestamo->detalles_prestamo->detalles}}</td>
                  <td>{{$prestamo->created_at}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
{{--End section: content--}}
