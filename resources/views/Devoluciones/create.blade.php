@extends('layout.app')

@section('title', "Crear Devolcuión");

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
        <li class="breadcrumb-item active"><a href="{{route('devolucion.index')}}">Devolcuión</a></li>
      </ol>
      <form class="" action="{{route('devolucion.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="id_prestamo">ID Prestamo</label>
            <input type="number" name="id_prestamo" placeholder="ID Prestamo" class="form-control" value="{{old('id_prestamo')}}">
            {!!$errors->first('id_prestamo', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="carga_bateria">Carga Batería</label>
            <input type="number" name="carga_bateria" placeholder="99%" class="form-control" value="{{old('carga_bateria')}}">
            {!!$errors->first('carga_bateria', '<span class=error>:message</span>')!!}
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
