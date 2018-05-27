@extends('layout.app')

@section('title', "Show Usuario");

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
        <li class="breadcrumb-item active">Monitor {{$usuario->nombre}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$usuario->id_upb}}</td>
              <td>{{$usuario->nombre}}</td>
              <td>{{$usuario->apellido}}</td>
              <td>{{$usuario->correo}}</td>
              <td>{{$usuario->telefono}}</td>
              <td>
                <form class="form-inline" action="{{ route('usuario.destroy', $usuario)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <a name="button" href="{{route('usuario.edit', $usuario)}}" class="btn btn-primary"> Editar</a>
                  <button type="submit" class="btn btn-primary">Eliminar</button>

                </form>
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
              @foreach($usuario->prestamos as $prestamo)
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
