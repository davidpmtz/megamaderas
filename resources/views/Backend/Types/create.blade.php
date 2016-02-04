@extends('Backend.master')
@section('tittle','Productos')  @endsection
@section('activeProducts','active') @endsection
@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
  <div class="col-xs-4">
    <p class="home"> El menu de tipos de product es una vista donde podemos realizar todas las acciones CRUD de la sección de productos.</p>
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
    <h1> Creación de nuevo producto </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => 'admin.types.store', 'method' => 'POST']) !!}
  <div class="form-group">
    {!! Form::label('tipo', 'Tipo') !!}
    {!! Form::text('tipo','',['class' => 'form-control', 'placeholder' => 'Nombre del tipo de producto', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('lastModify_by', 'Creado por') !!}
    {!! Form::text('lastModify_by','Waskalle',['class' => 'form-control', 'required','hide']) !!}
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
