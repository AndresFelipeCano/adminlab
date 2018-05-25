@extends('layout.app')

@section('title', "Crear Monitor");

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
        <li class="breadcrumb-item active">Monitor {{$monitor->nombre}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$monitor->id_upb}}</td>
              <td>{{$monitor->name}}</td>
              <td>{{$monitor->apellido}}</td>
              <td>{{$monitor->email}}</td>
              <td>{{$monitor->telefono}}</td>
              <td>
                <a name="button" href="{{route('monitor.edit', $monitor)}}" class="btn btn-primary"> Editar</a>
                <a class="btn btn-primary" href="{{route('monitor.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}
                </a>
                <form id="edit-form" action="{{ route('monitor.destroy', $monitor) }}" method="POST" style="display: none;">
                    @csrf
                    {{method_field('DELETE')}}
                </form>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
