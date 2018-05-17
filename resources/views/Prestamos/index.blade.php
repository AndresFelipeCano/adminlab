@extends('layout.app')
@section('title', 'Prestamos')
{{--Section: content--}}
@section('content')

{{--Section: meta--}}
@section('meta')

@endsection
{{--End Section: meta--}}

{{--Section: styles--}}
@section('styles')

@endsection
{{--Section: styles--}}

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Prestamos</li>
    </ol>
    <!-- Area Chart Example-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-area-chart"></i> Gráfica semanal</div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <!-- Tabla donde visualizaremos los prestamos-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Tabla prestamos</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id usuario</th>
                <th>Id del monitor</th>
                <th>Id equipo</th>
                <th>Hora del préstamo</th>
                <th>Hora de entrega</th>
                <th>Id detalles</th>
              </tr>
            </thead>
            <tbody>
              @foreach($prestamos as $prestamo)
                <tr>
                  <td>{{$prestamo->id_usuario}}</td>
                  <td>{{$prestamo->id_monitor}}</td>
                  <td>{{$prestamo->id_equipo}}</td>
                  <td>{{$prestamo->created_at}}</td>
                  <td>2 horas</td>
                  <td>{{$prestamo->id_detalles}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
</div>


@endsection
{{--End Section: content--}}
