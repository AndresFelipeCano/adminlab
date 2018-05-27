@extends('layout.app')

@section('title', "Show Categoria");
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
          <a href="#">Ver</a>
        </li>
        <li class="breadcrumb-item active">Categoria {{$categorium->nombre}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$categorium->nombre}}</td>
              <td>{{$categorium->detalles}}</td>
              <td>
                <a name="button" href="{{route('categoria.edit', $categorium)}}" class="btn btn-primary"> Editar</a>
                @if(Auth::user()->cargo === "administrador")
                  @if($categorium->active === 0)
                    <a class="btn btn-primary" href="{{route('categoria.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}</a>
                  @else
                    <a class="btn btn-primary" href="{{route('categoria.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Reestablecer')}}</a>
                  @endif
                <form id="edit-form" action="{{ route('categoria.destroy', $categorium) }}" method="POST" style="display: none;">
                    @csrf
                    {{method_field('DELETE')}}
                </form>
                @endif
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
