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
            <th>ID Categoria</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Número Equipo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$equipo->id_categoria}}</td>
              <td>{{$equipo->estado}}</td>
              <td>{{$equipo->obsercaiones}}</td>
              <td>{{$equipo->numero_equipo}}</td>
              <td>
                <form class="form-inline" action="{{ route('equipo.destroy', $equipo)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <a name="button" href="{{route('equipo.edit', $equipo)}}" class="btn btn-primary"> Editar</a>
                  <button type="submit" class="btn btn-primary">Eliminar</button>

                </form>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
