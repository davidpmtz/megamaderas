@extends('Backend.master')
@section('tittle','Servicios')

@section('subtittle','Servicios | ')

@section('subtittle2','Ver - Modificar - Borrar - Crear ')


@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <h1> Catálogo de servicios </h2><br><br>
        <div class="pull-right">
          <a href="{{ url('admin/services/create') }}" class="btn btn-sm btn-info" ><i class="fa fa-plus"></i> Agregar servicio </a>
        </div>
        <div class="clearfix"> </div>
        <div class="table-responsive">
        <table class="table">
          <th>id</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Vista</th>
          <th>Status</th>
          <th>Acciones</th>
          @foreach($servicios as $servicio)
          <tr>
            <td class="active">{{$servicio->id}}</td>
            <td class="success">{{$servicio->nombre}}</td>
            <td class="danger">${{$servicio->precio}}</td>
            @if($servicio->view == '1')
              <td><span class="label label-success">Público</td>
            @else
              <td><span class="label label-danger">Privado</td>
            @endif
            @if($servicio->deleted_at != null)
              <td><span class="label label-danger">Eliminado</td>
            @else
              <td><span class="label label-success">Activo</td>
            @endif
            <td class="warning">
              <div class="btn-group">
                <a href="{{route('admin.services.edit',$servicio->id)}}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                <a href="{{route('Backend.services.destroy',$servicio->id)}}" onclick="return confirm('¿Estas completamente seguro de que deseas eliminar el registro?')" data-toggle="tooltip" title="Borrar" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
              </div>
            </td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
</div>
<!-- Pagination -->
  <div class="text-right">
    {!! $servicios->render() !!}
  </div>
<!-- END Pagination -->
@endsection
