@extends('layout.app')

@section('title', "Crear Monitor");

{{--Section: content --}}
@section('content')

{{--Section; meta--}}
  @section('meta')

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
        <li class="breadcrumb-item active">Monitor {{$monitor->nombre}}</li>
      </ol>
    </div>
    <p class="h3">Actualizar información</p>
    <form class="" action="{{route('monitor.update', $monitor)}}" method="post">
      {{ method_field('PUT')}}
      {{ csrf_field() }}
      <div class="form-row">
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
          <label for="id_upb">ID UPB</label>
          <input type="number" name="id_upb" placeholder="ID" class="form-control" value="{{$monitor->id_upb}}">
          {!!$errors->first('id_upb', '<span class=error>:message</span>')!!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
          <label for="correo">Email</label>
          <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{$monitor->correo}}">
          {!!$errors->first('correo', '<span class=error>:message</span>')!!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
          <label for="nombre">Nombres</label>
          <input type="text" name="nombre" placeholder="Nombres" class="form-control" value="{{$monitor->nombre}}">
          {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{$monitor->apellido}}">
          {!!$errors->first('apellido', '<span class=error>:message</span>')!!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
          <label for="numero_celular">Celular</label>
          <input type="number" class="form-control" name="numero_celular" placeholder="Celular" value="{{$monitor->numero_celular}}">
          {!!$errors->first('numero_celular', '<span class=error>:message</span>')!!}
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

@endsection
{{--End section: content--}}
