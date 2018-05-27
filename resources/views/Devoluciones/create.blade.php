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
    <style type="text/css">
    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 25px;
      background: #d3d3d3;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      background: #007bff;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
      width: 25px;
      height: 25px;
      background: ##007bff;
      cursor: pointer;
    }
    </style>
  @endsection
  {{--Section: styles--}}
  <div class="content-wrapper">
    <div class="container">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Crear
        </li>
        <li class="breadcrumb-item active"><a href="{{route('devolucion.index')}}">Devolución</a></li>
      </ol>
      <form class="" action="{{route('devolucion.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="prestamo_id">ID Prestamo</label>
            <select class="form-control" id="prestamo_id" name="prestamo_id" type="number">
              <option disabled selected>Seleccionar Prestamo</option>
              @foreach($prestamos as $prestamo)
                <option name="prestamo_id" value="{{$prestamo->id}}">{{$prestamo->usuario->nombre}} - {{$prestamo->equipo->categoria->nombre}}</option>
              @endforeach
            </select>
            {!!$errors->first('prestamo_id', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="estado">Estado del equipo</label>
            <select class="form-control" id="estado" name="estado" type="number">
              <option name="estado" value="bueno" selected>Bueno</option>
              <option name="estado" value="regular" >Regular</option>
              <option name="estado" value="malo" >Malo</option>
            </select>
            {!!$errors->first('estado', '<span class=error>:message</span>')!!}
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control" name="observaciones" placeholder="Observaciones" value="{{old('observaciones')}}">
            {!!$errors->first('observaciones', '<span class=error>:message</span>')!!}
            </textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="carga_bateria">Carga de la Batería <mark id="slider-value"></mark> </label>
            <input id="bat-range" type="range" min="1" max="99" value="99" name="carga_bateria" placeholder="99%" class="form-control slider" value="{{old('carga_bateria')}}">
            {!!$errors->first('carga_bateria', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <input type="number" name="user_id" placeholder="" class="form-control" value="{{Auth::user()->id_upb}}" style="display:none;">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
@endsection
{{--End section: content--}}

{{--End section: content--}}
@section('scripts')
<script type="text/javascript">
var slider = document.getElementById("bat-range");
var output = document.getElementById("slider-value");
output.innerHTML = slider.value;

slider.oninput = function() {
output.innerHTML = this.value;
}
</script>

@endsection
{{--End section: content--}}
