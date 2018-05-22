@extends('layout.app')

@section('title', "Edit Prestamo");

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
        <li class="breadcrumb-item active">Prestamo  {{$prestamo->id}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('prestamo.update', $prestamo)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="id_monitor">ID Monitor</label>
              <input type="number" name="id_monitor" placeholder="ID Monitor" class="form-control" value="{{$prestamo->id_monitor}}">
              {!!$errors->first('id_monitor', '<span class=error>:message</span>')!!}
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="id_usuario">ID Usuario</label>
              <input type="number" name="id_usuario" placeholder="ID Usuario" class="form-control" value="{{$prestamo->id_usuario}}">
              {!!$errors->first('id_usuario', '<span class=error>:message</span>')!!}
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="id_equipo">ID Equipo</label>
              <input type="number" name="id_equipo" placeholder="ID Equipo" class="form-control" value="{{$prestamo->id_equipo}}">
              {!!$errors->first('id_equipo', '<span class=error>:message</span>')!!}
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
              <label for="id_detalles">ID Detalles</label>
              <input type="number" name="id_detalles" placeholder="ID Detalles" class="form-control" value="{{$prestamo->id_detalles}}">
              {!!$errors->first('id_detalles', '<span class=error>:message</span>')!!}
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
