@extends('layout.app')

@section('title', "Crear Monitor");

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
        <li class="breadcrumb-item active">Usuario {{$usuario->nombre}}</li>
      </ol>
      <p class="h3">Actualizar información</p>
      <form class="" action="{{route('usuario.update', $usuario)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_upb">ID UPB</label>
            <input type="number" name="id_upb" placeholder="ID" class="form-control" value="{{$usuario->id_upb}}">
            {!!$errors->first('id_upb', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="correo">Email</label>
            <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{$usuario->correo}}">
            {!!$errors->first('correo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" placeholder="Nombres" class="form-control" value="{{$usuario->nombre}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}">
            {!!$errors->first('apellido', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Celular" value="{{$usuario->telefono}}">
            {!!$errors->first('telefono', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="carrera">Carrera</label>
            <input type="text" class="form-control" name="carrera" placeholder="Carrera" value="{{$usuario->carrera}}">
            {!!$errors->first('carrera', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="Cargo" value="{{$usuario->cargo}}">
            {!!$errors->first('cargo', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
