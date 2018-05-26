@extends('layout.app')

@section('title', "Index Devoluciones");

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
        <li class="breadcrumb-item active">Devoluciones</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Prestamo</th>
              <th>Carga Batería</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($devoluciones as $devolucion)
              <tr>
                <td><a href="{{route('devolucion.show', $devolucion)}}">{{$devolucion->id_prestamo}}</a></td>
                <td>{{$devolucion->carga_bateria}}</td>
                <td>{{$devolucion->Observaciones}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
