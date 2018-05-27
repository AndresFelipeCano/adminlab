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
                <form class="form-inline" action="{{ route('equipo.destroy', $equipo)}}" method="post">
                  @csrf
                  {{ method_field('DELETE')}}
                  <div class="row">
                    <div class="col">
                      <a name="button" href="{{route('equipo.edit', $equipo)}}" class="btn btn-primary"> Editar</a>
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
