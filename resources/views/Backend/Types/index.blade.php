@extends('Backend.master')
@section('tittle','Tipos')
@section('subtittle','Tipos | ')
@section('subtittle2','Ver - Modificar - Borrar - Crear ')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="panel panel-info">
      <h1> Catálogo de tipos de productos </h2><br><br>
        <div class="pull-right">
          <a href="{{ url('admin/types/create') }}" class="btn btn-sm btn-info" ><i class="fa fa-plus"></i> Crear un nuevo Tipo </a>
        </div>
        <div class="clearfix"> </div>
        <div class="table-responsive">
          <table class="table">
            <th>id</th>
            <th>Tipo</th>
            <th>Creado por</th>
            <th>Acciones</th>
            @foreach($tipos as $tipo)
            <tr>
              <td class="active">{{$tipo->id}}</td>
              <td class="success">{{$tipo->tipo}}</td>
              <td class="warning">{{$tipo->lastModify_by}}</td>
              @if($tipo->deleted_at != null)
                <td><span class="label label-danger">Eliminado</td>
              @else
                <td><span class="label label-success">Activo</td>
              @endif
              <td class="warning">
                <div class="btn-group">
                  <a href="{{route('admin.types.edit',$tipo->id)}}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="{{route('Backend.types.destroy',$tipo->id)}}" onclick="return confirm('¿Estas completamente seguro de que deseas eliminar el registro?')" data-toggle="tooltip" title="Borrar" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
        </table>
    </div>
  </div>
  </div>
</div>
@endsection
@section('js')
