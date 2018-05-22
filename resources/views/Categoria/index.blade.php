@extends('layout.app')

@section('title', "Index Caategoria");

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
        <li class="breadcrumb-item active">Categoría</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Detalles</th>
            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $usuario)
              <tr>
                <td><a href="{{route('categoria.show', $usuario)}}">{{$categoria->nombre}}</a></td>
                <td>{{$categoria->detalles}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
