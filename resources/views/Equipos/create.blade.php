@extends('layout.app')

@section('title', "Crear Equipo");

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
          <a href="#">Crear</a>
        </li>
        <li class="breadcrumb-item active">Equipo</li>
      </ol>
      <form class="" action="{{route('equipo.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_categoria">ID Categoria</label>
            <input type="number" name="id_categoria" placeholder="ID Categoria" class="form-control" value="{{old('id_categoria')}}">
            {!!$errors->first('id_categoria', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="estado">Estado</label>
            <input type="text" name="estado" placeholder="Estado" class="form-control" value="{{old('estado')}}">
            {!!$errors->first('estado', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" placeholder="Observaciones" class="form-control" value="{{old('observaciones')}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="numero_equipo">Número Equipo</label>
            <input type="number" class="form-control" name="numero_equipo" placeholder="Número Equipo" value="{{old('numero_equipo')}}">
            {!!$errors->first('numero_equipo', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
