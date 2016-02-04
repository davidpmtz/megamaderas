@extends('Backend.master')
@section('tittle','Productos')  @endsection
@section('activeProducts','active') @endsection
@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
  <div class="col-xs-4">
    <p class="home"> El catálogo de productos es una vista donde podemos realizar todas las acciones CRUD de la sección de productos.</p>
    <div class="col-xs-12">
      <li> Create </li>
      <li> Read </li>
      <li> Update </li>
      <li> Delete </li>
    </div>
    <br>
    <p> </p>
    <p class="home">En esta vista tenemos el formulario para dar de alta un nuevo producto.</p>
  </div>

<div class="col-xs-7">
  <div class="panel panel-info">
    <h1> Alta de producto </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => 'admin.products.store', 'method' => 'POST']) !!}
  <div class="form-group">
  {!! Form::label('lastModify_by', 'Creado por') !!}
  {!! Form::text('lastModify_by','Waskalle',['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', '* Nombre del producto') !!}
    {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'ej: Madera de Cedro', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('precio', '* Precio') !!}
    {!! Form::text('precio',null,['class' => 'form-control', 'placeholder' => 'Precio de venta del producto', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('cantidad', '* Cantidad') !!}
    {!! Form::number('cantidad',null,['class' => 'form-control', 'placeholder' => 'Cantidad de piezas (Entrada de almacén)', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('tipo_id', 'Tipo') !!}
    {!! Form::select('tipo_id',$tipos,0,['class' => 'form-control', 'placeholder' => 'Selecciona una opción','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('view', '* Modo de vista') !!}
    {!! Form::select('view',['' => '[ Seleccionar ]','1' => 'Público',
                              '0' => 'Privado'],null,['class' => 'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion', '* Descripción del producto') !!}
    {!! Form::textarea('descripcion',null,['class' => 'form-control', 'resize' => 'none','placeholder' => 'Descripción detallada del producto', 'required']) !!}
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
@section('js')


@endsection
