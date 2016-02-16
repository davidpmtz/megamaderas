@extends('Backend.master')
@section('tittle','Mensajes')

@section('subtittle','Mensajes de la web | ')

@section('subtittle2','revisá todo lo que tus clientes han posteado en tu pagina.')


@section('content')

@foreach($mensajes as $mensaje)
<div class="jumbotron">
    <h3>{{$mensaje->name}} | {{$mensaje->email}}</h3> <small> Número de teléfono: {{$mensaje->telephone}} </small>
    <p></p>
{!! str_limit($mensaje->message,214,' [...]') !!}
  @if(strlen($mensaje->message) > 214)
    <p> <a href="{{url('/admin/messages3',$mensaje->id)}}" class="btn btn-primary btn-lg" role="button">Leer más... &raquo;</a>  </p>
  @endif
  <br />
  <div class="pull-right">
    <p> <a href="{{url('/admin/messages2',$mensaje->id)}}" class="btn btn-success btn-lg" role="button">Responder</a>  </p>
  </div>
</div>
@endforeach
<div class="pull-right">
  {{$mensajes->render()}}
</div>
@endsection
