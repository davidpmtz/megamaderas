@extends('Backend.master')
@section('tittle','Productos')

@section('subtittle','Productos | ')

@section('subtittle2','Ver - Modificar - Borrar - Crear ')

@section('activeProducts','active')

@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />

@section('content')

<div class="col-lg-12">
  <div class="panel panel-info">
    <h1> Catálogo de productos </h2>
  <br>
<div class="clo-lg-12">

</div>
      <div class="clearfix"> </div>
      <div class="table-responsive">
        <table class="table">
          <div class="text-right">
            <th colspan="7">
              <a href="{{ url('admin/products/create') }}" class="btn btn-sm btn-info" ><i class="fa fa-plus"></i> Agregar producto </a>
            </th>
          </div>
        </table>
        <table class="table">
          <th>id</th>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Vista</th>
          <th>Status</th>
          <th>Acciones</th>
          @foreach($productos as $producto)
          <tr>
            <td class="active">{{$producto->id}}</td>
            <td class="success">{{$producto->nombre}}</td>
            <td class="warning">{{$producto->cantidad}}</td>
            <td class="danger">${{$producto->precio}}</td>
            @if($producto->view == '1')
              <td><span class="label label-success">Público</td>
            @else
              <td><span class="label label-danger">Privado</td>
            @endif
            @if($producto->deleted_at != null)
              <td><span class="label label-danger">Eliminado</td>
            @else
              <td><span class="label label-success">Activo</td>
            @endif
            <td class="warning">
              <div class="btn-group">
                <a href="{{route('admin.products.edit',$producto->id)}}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                <a href="{{route('Backend.products.destroy',$producto->id)}}" onclick="return confirm('¿Estas completamente seguro de que deseas eliminar el registro?')" data-toggle="tooltip" title="Borrar" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
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
    {!! $productos->render() !!}
  </div>
<!-- END Pagination -->
@endsection
@section('js')
