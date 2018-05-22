@extends('layout.app')

@section('title', "Crear Prestamo");

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
        <li class="breadcrumb-item active"><a href="{{route('prestamo.index')}}"></a>Prestamo</li>
      </ol>
      <form class="" action="{{route('usuario.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_monitor">ID Monitor</label>
            <input type="number" name="id_monitor" placeholder="ID Monitor" class="form-control" value="{{old('id_monitor')}}">
            {!!$errors->first('id_monitor', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_usuario">ID Usuario</label>
            <input type="number" name="id_usuario" placeholder="ID Usuario" class="form-control" value="{{old('id_usuario')}}">
            {!!$errors->first('id_usuario', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_equipo">ID Equipo</label>
            <input type="number" name="id_equipo" placeholder="ID Equipo" class="form-control" value="{{old('id_equipo')}}">
            {!!$errors->first('id_equipo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_detalles">ID Detalles</label>
            <input type="number" name="id_detalles" placeholder="ID Detalles" class="form-control" value="{{old('id_detalles')}}">
            {!!$errors->first('id_detalles', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
