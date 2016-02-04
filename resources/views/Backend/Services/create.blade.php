@extends('Backend.master')
@section('tittle','Servicios')  @endsection
@section('activeServices','active') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
  <div class="col-xs-4">
    <p class="home"> El catálogo de servicios es una vista donde podemos realizar todas las acciones CRUD de la sección de servicios.</p>
    <div class="col-xs-12">
      <li> Create </li>
      <li> Read </li>
      <li> Update </li>
      <li> Delete </li>
    </div>
    <br>
    <p> </p>
    <p class="home">En esta vista tenemos el formulario para dar de alta un nuevo servicio.</p>
  </div>

<div class="col-xs-7">
  <div class="panel panel-info">
    <h1> Alta de servicio </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => 'admin.services.store', 'method' => 'POST']) !!}
  <div class="form-group">
  {!! Form::label('lastModify_by', 'Creado por') !!}
  {!! Form::text('lastModify_by','Waskalle',['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', '* Nombre del servicio') !!}
    {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'ej: Cubre Cantaro', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('precio', '* Precio') !!}
    {!! Form::text('precio',null,['class' => 'form-control', 'placeholder' => 'Precio de venta del servicio', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('view', '* Modo de vista') !!}
    {!! Form::select('view',['' => '[ Seleccionar ]','1' => 'Público',
                              '0' => 'Privado'],null,['class' => 'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion', '* Descripción del producto') !!}
    {!! Form::textarea('descripcion',null,['class' => 'form-control', 'resize' => 'none','placeholder' => 'Descripción detallada del servicio', 'required']) !!}
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
@section('js')


@endsection
