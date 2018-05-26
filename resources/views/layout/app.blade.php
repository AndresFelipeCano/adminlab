<!DOCTYPE html>

<html lang="{{app()->getLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Vista principal de AdminLab">
    <meta name="author" content="Andrés Cano">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    @yield('styles')
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title') |Admin Lab</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="/home">Admin's Lab</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{route('prestamo.index')}}">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('tablas')}}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Tablas</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('prestamo.create')}}">
              <i class="fa fa-fw fa-repeat"></i>
              <span class="nav-link-text">Realizar préstamo</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('devolucion.create')}}">
              <i class="fa fa-fw fa-refresh"></i>
              <span class="nav-link-text">Realizar Devolución</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('equipo.create')}}">
              <i class="fa fa-fw fa-dropbox"></i>
              <span class="nav-link-text">Registrar equipo</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('usuario.create')}}">
              <i class="fa fa-fw fa-users"></i>
              <span class="nav-link-text">Registrar Usuario</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('categoria.create')}}">
              <i class="fa fa-fw fa-inbox"></i>
              <span class="nav-link-text">Registrar Categoría</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('detalleprestamo.create')}}">
              <i class="fa fa-fw fa-list"></i>
              <span class="nav-link-text">Registrar Detalles</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Salir</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © AdminLab 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">¿Seguro de que quieres cerrar la sesión?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

            <a class="btn btn-primary" href="route{{'logout'}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('Salir')}}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</html>
