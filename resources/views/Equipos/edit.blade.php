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
            <label for="categoria_id">Categoría</label>
            <select class="form-control" id="categoria_id" name="categoria_id" type="number">
              <option disabled selected>Seleccionar categoría</option>
              @foreach($categorias as $categoria)
                <option name="categoria_id" value="{{$categoria->id}}" @if($categoria->id === $equipo->categoria_id) selected @endif>{{$categoria->nombre}}</option>
              @endforeach
            </select>
            {!!$errors->first('categoria_id', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" type="text">
              <option disabled>Seleccionar estado</option>
              <option name="estado" value="disponible" @if($equipo->estado === 'disponible') selected @endif>Disponible</option>
              <option name="estado" value="no_disponible" @if($equipo->estado === 'no_dispoible') selected @endif>No Disponible</option>
            </select>
            {!!$errors->first('estado', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="observaciones">Observaciones</label>
            <textarea type="text" name="observaciones" placeholder="Observaciones" class="form-control" value="{{$equipo->observaciones}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
            </textarea>
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
