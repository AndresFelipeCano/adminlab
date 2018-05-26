@extends('layout.app')

@section('tittle', "Show Categoria");
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
        <li class="breadcrumb-item active">Categoria {{$categorium->nombre}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$categorium->nombre}}</td>
              <td>{{$categorium->detalles}}</td>
              <td>
                <form class="form-inline" action="{{ route('categoria.destroy', $categorium)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <a name="button" href="{{route('categoria.edit', $categorium)}}" class="btn btn-primary"> Editar</a>
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
