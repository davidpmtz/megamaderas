@extends('Backend.master')
@section('tittle','Productos')

@section('subtittle','Editar Producto | ')

@section('subtittle2')
{{$producto->nombre}}
@endsection

@section('content')
<div class="col-lg-12">
  <div class="panel panel-info">
    <h1> Modificar un producto </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => ['admin.products.update',$producto], 'method' => 'PUT', 'files' => true]) !!}
  <div class="form-group">
  {!! Form::label('lastModify_by', 'Creado por') !!}
  {!! Form::text('lastModify_by',$producto->lastModify_by,['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', '* Nombre del producto') !!}
    {!! Form::text('nombre',$producto->nombre,['class' => 'form-control', 'placeholder' => 'ej: Madera de Cedro', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('precio', '* Precio') !!}
    {!! Form::text('precio',$producto->precio,['class' => 'form-control', 'placeholder' => 'Precio de venta del producto', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('cantidad', '* Cantidad') !!}
    {!! Form::number('cantidad',$producto->cantidad,['class' => 'form-control', 'placeholder' => 'Cantidad de piezas (Entrada de almacén)', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('tipo_id', 'Tipo') !!}
    {!! Form::select('tipo_id',$tipos,$producto->tipo_id,['class' => 'form-control', 'placeholder' => 'Selecciona una opción','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('view', '* Modo de vista') !!}
    {!! Form::select('view',['' => '[ Seleccionar ]','1' => 'Público',
                              '0' => 'Privado'],$producto->view,['class' => 'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('image','Imagen') !!}
    {!! Form::file('image') !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
    <a href="{{route('admin.products.index')}}" class="btn btn-info">Regresar</a>
  </div>
{!! Form::close() !!}
      </div>
      </div>
</div>
</div>

@endsection
