@extends('layout.app')

@section('title', "Crear Usuario");

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
        <li class="breadcrumb-item">Crear
        </li>
        <li class="breadcrumb-item active"><a href="{{route('usuario.index')}}">Usuario</a></li>
      </ol>
      <form class="" action="{{route('usuario.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_upb">ID UPB</label>
            <input type="number" name="id_upb" placeholder="ID" class="form-control" value="{{old('id_upb')}}">
            {!!$errors->first('id_upb', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="correo">Email</label>
            <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{old('correo')}}">
            {!!$errors->first('correo', '<span class=error>:message</span>')!!}
          </div>
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
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Celular" value="{{old('telefono')}}">
            {!!$errors->first('telefono', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="carrera">Carrera</label>
            <input type="text" class="form-control" name="carrera" placeholder="Carrera" value="{{old('carrera')}}">
            {!!$errors->first('carrera', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="Cargo" value="{{old('cargo')}}">
            {!!$errors->first('cargo', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
