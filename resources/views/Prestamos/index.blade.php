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
@section('scripts')
<script type="text/javascript">
// -- Area Chart Example
var ctx = document.getElementById("myAreaChart");
var dates =  {!! json_encode($dates) !!};
var values =  {!! json_encode($values) !!}
console.log(dates, values);
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: values,
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: values,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
@endsection

@endsection
{{--End Section: content--}}
