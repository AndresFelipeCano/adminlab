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
          <a href="{{route('usuario.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Usuarios</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('monitor.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Monitores</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('equipo.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Equipos</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('prestamo.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Préstamos</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('devolucion.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Devoluciones</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('categoria.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Categoría</li>
      </ol>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('detalleprestamo.index')}}">Ver</a>
        </li>
        <li class="breadcrumb-item active">Detalles</li>
      </ol>
    </div>
  </div>

@endsection
{{--End section: content--}}
