@extends('Backend.master')
@section('tittle','Tipos')
@section('subtittle','Tipos | ')
@section('subtittle2','Editar un nuevo tipo de producto')
@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="panel panel-info">
      <h1> Modificación del tipo {{$tipos->tipo}}   </h2><br><br>
        <div class='Form'>
        <div class="form-group">
          {!! Form::open(['route' => ['admin.types.update',$tipos], 'method' => 'PUT']) !!}
            <div class="form-group">
              {!! Form::label('tipo', 'Tipo') !!}
              {!! Form::text('tipo',$tipos->tipo,['class' => 'form-control', 'placeholder' => 'Nombre del tipo de producto', 'required','hide']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('lastModify_by', 'Creado por') !!}
              {!! Form::text('lastModify_by',$tipos->lastModify_by,['class' => 'form-control', 'required','hide']) !!}
            </div>

    <div class="form-group">
      {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
      <a href="{{route('admin.types.index')}}" class="btn btn-info">Regresar</a>
    </div>
  {!! Form::close() !!}
        </div>
        </div>
  </div>
  </div>
</div>
@endsection
@section('js')
