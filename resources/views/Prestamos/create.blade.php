@extends('layout.app')

@section('title', "Crear Prestamo");

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
        <li class="breadcrumb-item active"><a href="{{route('prestamo.index')}}">Préstamo</a></li>
      </ol>

      <form class="" action="{{route('prestamo.store')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="user_id">Monitor/Administrador</label>
            <select class="form-control" id="user_id" name="user_id" type="number">
              <option disabled selected>Seleccionar Monitor</option>
              @foreach($monitores as $monitor)
                <option name="user_id" value="{{$monitor->id_upb}}">{{$monitor->name}} - {{$monitor->id_upb}}</option>
              @endforeach
              @foreach($administradores as $monitor)
                <option name="user_id" value="{{$monitor->id_upb}}">{{$monitor->name}} - {{$monitor->id_upb}}</option>
              @endforeach
            </select>
            {!!$errors->first('user_id', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="usuario_id">Usuario</label>
            <select class="form-control" id="usuario_id" name="usuario_id" type="number">
              <option disabled selected>Seleccionar Usuario</option>
              @foreach($usuarios as $usuario)
                <option name="usuario_id" value="{{$usuario->id_upb}}">{{$usuario->nombre}} - {{$usuario->id_upb}}</option>
              @endforeach
              @foreach($monitores as $monitor)
                <option name="usuario_id" value="{{$monitor->id_upb}}">{{$monitor->name}} - {{$monitor->id_upb}}</option>
              @endforeach
              @foreach($administradores as $monitor)
                <option name="usuario_id" value="{{$monitor->id_upb}}">{{$monitor->name}} - {{$monitor->id_upb}}</option>
              @endforeach
            </select>
            {!!$errors->first('usuario_id', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="equipo_id">Equipo</label>
            <select class="form-control" id="equipo_id" name="equipo_id" type="number">
              <option disabled selected>Seleccionar Equipo</option>
              @foreach($equipos as $equipo)
                <option name="equipo_id" value="{{$equipo->numero_equipo}}">{{$equipo->categoria->nombre}} - {{$equipo->numero_equipo}}</option>
              @endforeach
            </select>

            {!!$errors->first('equipo_id', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="detalles">Detalles</label>
            <input type="Text" name="detalles" placeholder="Detalles" class="form-control" value="{{old('detalles')}}">
            {!!$errors->first('detalles', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="today">Fecha de hoy</label>
            <input type="text" name="today" placeholder="" class="form-control" value="{{$today}}">
            {!!$errors->first('today', '<span class=error>:message</span>')!!}
          </div>
          <input type="text" name="estado" placeholder="" class="form-control" value="{{__('activo')}}" style="display:none;">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
