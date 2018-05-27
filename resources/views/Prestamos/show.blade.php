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
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Monitor</th>
            <th>ID usuario</th>
            <th>ID Equipo</th>
            <th>ID Detalles</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$prestamo->id_monitor}}</td>
              <td>{{$prestamo->id_usuario}}</td>
              <td>{{$prestamo->id_equipo}}</td>
              <td>{{$prestamo->id_detalles}}</td>
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

@endsection
{{--End section: content--}}
