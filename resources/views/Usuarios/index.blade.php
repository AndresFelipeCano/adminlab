@extends('layout.app')

@section('title', "Index Usuario");

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
        <li class="breadcrumb-item active">Usuario</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Carrera</th>
              <th>Cargo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $usuario)
              <tr>
                <td><a href="{{route('usuario.show', $usuario)}}">{{$usuario->id_upb}}</a></td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->correo}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->carrera}}</td>
                <td>{{$usuario->cargo}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
