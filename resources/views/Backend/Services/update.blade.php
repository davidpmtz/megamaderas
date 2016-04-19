@extends('Backend.master')
@section('tittle','Servicios')

@section('subtittle','Editar Servicio | ')

@section('subtittle2')
{{$service->nombre}}
@endsection


@section('content')
<div class="col-lg-12">
  <div class="panel panel-info">
    <h1> Modificar un servicio </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => ['admin.services.update',$service], 'method' => 'PUT', 'files' => true]) !!}
  <div class="form-group">
  {!! Form::label('lastModify_by', 'Creado por') !!}
  {!! Form::text('lastModify_by',$service->lastModify_by,['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', '* Nombre del service') !!}
    {!! Form::text('nombre',$service->nombre,['class' => 'form-control', 'placeholder' => 'ej: Madera de Cedro', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('precio', '* Precio') !!}
    {!! Form::text('precio',$service->precio,['class' => 'form-control', 'placeholder' => 'Precio de venta del service', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('view', '* Modo de vista') !!}
    {!! Form::select('view',['' => '[ Seleccionar ]','1' => 'Público',
                              '0' => 'Privado'],$service->view,['class' => 'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion', '* Descripción del service') !!}
    {!! Form::textarea('descripcion',$service->descripcion,['class' => 'form-control', 'resize' => 'none','placeholder' => 'Descripción detallada del service', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('image','Imagen') !!}
    {!! Form::file('image') !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
    <a href="{{route('admin.services.index')}}" class="btn btn-info">Regresar</a>
  </div>
{!! Form::close() !!}
      </div>
      </div>
</div>
</div>
@endsection
