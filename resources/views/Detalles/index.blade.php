@extends('layout.app')

@section('title', "Index Detalles");

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
        <li class="breadcrumb-item active">Detalles</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Prestamo</th>
              <th>ID Externo</th>
              <th>Apellido</th>
              <th>Detalles</th>
            </tr>
          </thead>
          <tbody>
            @foreach($detallesPrestamos as $detallesPrestamo)
              <tr>
                <td><a href="{{route('detallesprestamo.show', $detallesPrestamo)}}">{{$detallesPrestamos->id}}</a></td>
                <td>{{$detallesPrestamos->id_externo}}</td>
                <td>{{$detallesPrestamos->detalles}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
