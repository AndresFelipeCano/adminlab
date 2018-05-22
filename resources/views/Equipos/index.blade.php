@extends('layout.app')

@section('title', "Index Equipos");

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
        <li class="breadcrumb-item active">Equipos</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Categoria</th>
              <th>Estado</th>
              <th>Observaciones</th>
              <th>Número Equipo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($equipos as $equipo)
              <tr>
                <td><a href="{{route('equipo.show', $equipo)}}">{{$equipo->numero_equipo}}</a></td>
                <td>{{$equipo->id_categoria}}</td>
                <td>{{$equipo->estado}}</td>
                <td>{{$equipo->observaciones}}</td>
                <td>{{$equipo->numero_equipo}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
