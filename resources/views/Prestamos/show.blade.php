@extends('layout.app')

@section('title', "Show Prestamo");

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
        <li class="breadcrumb-item active">Prestamo {{$prestamo->id}}</li>
      </ol>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Tabla de préstamos</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Número del prestamo</th>
                <th>Equipo</th>
                <th>Solicitado por</th>
                <th>Prestado por</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Fecha/Hora de prestamo</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="{{route('prestamo.show', $prestamo)}}">{{$prestamo->id}} </a> </td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('equipo.show', $prestamo->equipo)}}">{{$prestamo->equipo->observaciones}}</a>
                  @elseif($prestamo->equipo->active === 0)
                    <a href="{{route('equipo.show', $prestamo->equipo)}}">{{$prestamo->equipo->observaciones}}</a>
                  @else
                    {{$prestamo->equipo->observaciones}}
                  @endif
                </td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('usuario.show', $prestamo->usuario)}}">{{$prestamo->usuario->nombre}} {{$prestamo->usuario->apellido}} {{$prestamo->usuario->id_upb}}</a>
                  @elseif($prestamo->usuario->active === 0)
                    <a href="{{route('usuario.show', $prestamo->usuario)}}">{{$prestamo->usuario->nombre}} {{$prestamo->usuario->apellido}} {{$prestamo->usuario->id_upb}}</a>
                  @else
                    {{$prestamo->usuario->nombre}} {{$prestamo->usuario->apellido}} {{$prestamo->usuario->id_upb}}
                  @endif
                </td>
                <td>
                  @if(Auth::user()->cargo === "administrador")
                    <a href="{{route('monitor.show', $prestamo->user)}}">{{$prestamo->user->name}} {{$prestamo->user->apellido}} {{$prestamo->user->id_upb}}</a>
                  @elseif($prestamo->user->active === 0)
                    <a href="{{route('monitor.show', $prestamo->user)}}">{{$prestamo->user->name}} {{$prestamo->user->apellido}} {{$prestamo->user->id_upb}}</a>
                  @else
                    {{$prestamo->user->name}} {{$prestamo->user->apellido}} {{$prestamo->user->id_upb}}
                  @endif
                </td>
                <td>{{$prestamo->estado}} </td>
                <td>{{$prestamo->detalles_prestamo->detalles}}</td>
                <td>{{$prestamo->created_at}}</td>
                <td>
                  <a name="button" href="{{route('prestamo.edit', $prestamo)}}" class="btn btn-primary"> Editar</a>
                  @if(Auth::user()->cargo === "administrador")
                    @if($prestamo->active === 0)
                      <a class="btn btn-primary" href="{{route('prestamo.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}</a>
                    @else
                      <a class="btn btn-primary" href="{{route('prestamo.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Reestablecer')}}</a>
                    @endif

                  <form id="edit-form" action="{{ route('prestamo.destroy', $prestamo) }}" method="POST" style="display: none;">
                      @csrf
                      {{method_field('DELETE')}}
                  </form>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Último prestamo {{$prestamo->created_at}}</div>
    </div>
  </div>


@endsection
{{--End section: content--}}
