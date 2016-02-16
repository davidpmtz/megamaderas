@extends('Backend.master')
@section('tittle','Mensajes')

@section('subtittle','Contenido del mensaje de | ')

@section('subtittle2')
  {{$mensaje->name}}
@endsection


@section('content')

<div class="jumbotron">
    <h3>{{$mensaje->name}} | {{$mensaje->email}}</h3> <small> Número de teléfono: {{$mensaje->telephone}} </small>
    <small class="pull-right"> Fecha de creación: {{$mensaje->updated_at}} </small>
    <br />
    <br />
    <br />
{!! $mensaje->message !!}
  <br />
</div>
<a href="{{url('admin/messages')}}" class="btn btn-info">Regresar</a>
@endsection
