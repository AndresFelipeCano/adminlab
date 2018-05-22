@extends('layout.app')

@section('title', "Edit Externos");

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
        <li class="breadcrumb-item active">Detalles Prestamo - {{$detallesPrestamo->id_prestamo}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('detallesprestamo.update', $detallesPrestamo)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_prestamo">ID Prestamo</label>
            <input type="number" name="id_prestamo" placeholder="ID" class="form-control" value="{{$detallesPrestamo->id_prestamo}}">
            {!!$errors->first('id_prestamo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_externo">ID Externo</label>
            <input type="number" name="id_externo" placeholder="ID" class="form-control" value="{{$detallesPrestamo->id_externo}}">
            {!!$errors->first('id_externo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="detalles">Detalles</label>
            <input type="email" class="form-control" name="detalles" placeholder="Correo" value="{{detalles->correo}}">
            {!!$errors->first('detalles', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
