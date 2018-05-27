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
                  <div class="row">
                    <div class="col">
                      <a name="button" href="{{route('usuario.edit', $usuario)}}" class="btn btn-primary"> Editar</a>
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
