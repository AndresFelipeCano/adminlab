@extends('layout.app')

@section('title', "Show Devolucion");

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
        <li class="breadcrumb-item active">Devolucion {{$devolucion->id_prestamo}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Prestamo</th>
            <th>Carga Batería</th>
            <th>Observaciones</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          {{dd($devolucion->prestamo->user)}}
            <tr>
              <td>{{$devolucion->id_upb}}</td>
              <td>{{$devolucion->carga_bateria}}</td>
              <td>{{$devolucion->observaciones}}</td>
              <td>
                <a name="button" href="{{route('devolucion.edit', $devolucion)}}" class="btn btn-primary"> Editar</a>
                @if(Auth::user()->cargo === "administrador")
                  @if($devolucion->active === 0)
                    <a class="btn btn-primary" href="{{route('devolucion.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}</a>
                  @else
                    <a class="btn btn-primary" href="{{route('devolucion.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Reestablecer')}}</a>
                  @endif

                <form id="edit-form" action="{{ route('devolucion.destroy', $devolucion) }}" method="POST" style="display: none;">
                    @csrf
                    {{method_field('DELETE')}}
                </form>
                @endif
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
