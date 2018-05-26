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
              <th>Número equipo</th>
              <th>Categoria</th>
              <th>Estado</th>
              <th>Observaciones</th>
              <th>Creado por</th>
              <th>Fecha creación</th>
            </tr>
          </thead>
          <tbody>
            @foreach($equipos as $equipo)
              <tr>

                <td><a href="{{route('equipo.show', $equipo)}}">{{$equipo->numero_equipo}}</a></td>
                <td><a href="{{route('categoria.show', $equipo->categoria)}}">{{$equipo->categoria->nombre}}</a> </td>
                <td>
                  @if($equipo->estado === 'disponible')
                    Disponible
                  @else
                    No Disponible
                  @endif
                </td>
                <td>{{$equipo->observaciones}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
