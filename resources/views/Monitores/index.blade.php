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
        <li class="breadcrumb-item active">Monitor</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Horas</th>
            </tr>
          </thead>
          <tbody>
            @foreach($monitores as $monitor)
              <tr>
                <td><a href="{{route('monitor.show', $monitor)}}">{{$monitor->id_upb}}</a></td>
                <td>{{$monitor->name}}</td>
                <td>{{$monitor->apellido}}</td>
                <td>{{$monitor->email}}</td>
                <td>{{$monitor->telefono}}</td>
                <td>{{$monitor->numero_horas}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
