@extends('layout.app')

@section('title', "Edit Categoria");

{{--Section: content --}}
@section('content')

{{--Section; meta--}}
  @section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <a href="#">Actualizar</a>
        </li>
        <li class="breadcrumb-item active">Categoría {{$categoria->nombre}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('categoria.update', $categoria)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$categoria->nombre}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="detalles">Detalles</label>
            <input type="text" class="form-control" name="detalles" placeholder="Detalles" value="{{$categoria->detales}}">
            {!!$errors->first('apellido', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
