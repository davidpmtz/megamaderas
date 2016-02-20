@extends('Backend.master')
@section('tittle','Mensajes')

@section('subtittle','Mensajes de la web | ')

@section('subtittle2','revisá todo lo que tus clientes han posteado en tu pagina.')

@section('content')
<div class="col-lg-12">
  <div class="panel panel-info">
    <h1> Respuesta de mensaje |  {{$mensaje->name}}</h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['url' => 'admin/messages4', 'role' => 'form','method' => 'POST', 'files' => true]) !!}
  <div class="form-group">
  {!! Form::label('remitente', 'Remitente: ') !!}
  {!! Form::text('remitente','Megamaderas S.A de C.V',['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('asunto', '* Asunto') !!}
    {!! Form::text('asunto',null,['class' => 'form-control', 'placeholder' => 'ej: Gracias por tu preferencia.!!', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('destinatario', '* Para:') !!}
    {!! Form::text('destinatario',$mensaje->email,['class' => 'form-control', 'readonly' => 'readonly', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('mensajeCliente', '* Mensaje del cliente: ') !!}
    {!! $mensaje->message !!}
  </div>
  <div class="form-group">
    {!! Form::label('mensaje', '* Respuesta') !!}
    {!! Form::textarea('mensaje',null,['class' => 'form-control', 'resize' => 'none','placeholder' => 'Mensaje para el cliente', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('archivo','Archivo') !!}
    {!! Form::file('archivo') !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-success']) !!}
    <a href="{{url('admin/messages')}}" class="btn btn-info">Regresar</a>
  </div>
{!! Form::close() !!}
      </div>
      </div>
</div>
</div>

@endsection
