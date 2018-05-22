@extends('layout.app')

@section('title', "Edit Equipo");

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
        <li class="breadcrumb-item active">Equipo {{$equipo->numero_equipo}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('equipo.update', $equipo)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_categoria">ID UPB</label>
            <input type="number" name="id_categoria" placeholder="ID Categoria" class="form-control" value="{{$equipo->id_categoria}}">
            {!!$errors->first('id_categoria', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" placeholder="Estado" value="{{$equipo->estado}}">
            {!!$errors->first('estado', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" placeholder="Observaciones" class="form-control" value="{{$equipo->observaciones}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="numero_equipo">Número Equipo</label>
            <input type="number" class="form-control" name="numero_equipo" placeholder="Número Equipo" value="{{$equipo->numero_equipo}}">
            {!!$errors->first('numero_equipo', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
