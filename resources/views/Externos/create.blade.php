@extends('layout.app')

@section('title', "Crear Externo");

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
        <li class="breadcrumb-item active">Externo</li>
      </ol>
      <form class="" action="{{route('externos.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" placeholder="Nombres" class="form-control" value="{{old('nombre')}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{old('apellido')}}">
            {!!$errors->first('apellido', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="correo">Email</label>
            <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{old('correo')}}">
            {!!$errors->first('correo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="Cargo" value="{{old('cargo')}}">
            {!!$errors->first('cargo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="observaciones">Observaciones</label>
            <input type="text" class="form-control" name="observaciones" placeholder="Observaciones" value="{{old('observaciones')}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
