@extends('layout.app')

@section('title', "Index Externos");

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
        <li class="breadcrumb-item active">Externo</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Cargo</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($externos as $externo)
              <tr>
                <td><a href="{{route('externo.show', $externo)}}">{{$externo->id}}</a></td>
                <td>{{$externo->nombre}}</td>
                <td>{{$externo->apellido}}</td>
                <td>{{$externo->correo}}</td>
                <td>{{$usuario->cargo}}</td>
                <td>{{$externo->observaciones}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
