@extends('layout.app')

@section('title', "Show Usuario");

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
        <li class="breadcrumb-item active">Externo {{$externo->nombre}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Cargo</th>
            <th>Observaciones</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$externo->id}}</td>
              <td>{{$externo->nombre}}</td>
              <td>{{$externo->apellido}}</td>
              <td>{{$externo->correo}}</td>
              <td>{{$externo->cargo}}</td>
              <td>{{$externo->observaciones}}</td>
              <td>
                <form class="form-inline" action="{{ route('externo.destroy', $externo)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <a name="button" href="{{route('externo.edit', $externo)}}" class="btn btn-primary"> Editar</a>
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
