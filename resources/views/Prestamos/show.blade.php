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
                <form class="form-inline" action="{{ route('prestamo.destroy', $prestamo)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <a name="button" href="{{route('prestamo.edit', $prestamo)}}" class="btn btn-primary"> Editar</a>
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
