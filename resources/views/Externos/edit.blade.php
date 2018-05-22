@extends('layout.app')

@section('title', "Edit Externo");

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
        <li class="breadcrumb-item active">Externo {{$externo->nombre}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('externo.update', $externo)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="correo">Email</label>
            <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{$externo->correo}}">
            {!!$errors->first('correo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" placeholder="Nombres" class="form-control" value="{{$externo->nombre}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{$externo->apellido}}">
            {!!$errors->first('apellido', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="Cargo" value="{{$externo->cargo}}">
            {!!$errors->first('cargo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="obervaciones">Observaciones</label>
            <input type="text" class="form-control" name="observaciones" placeholder="Observaciones" value="{{$externo->observaciones}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
