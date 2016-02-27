@extends('Backend.master')
@section('tittle','Home')

@section('subtittle','Panel Administrativo')

@section('subtittle2','para el control del contenido de tu web')

@section('content')
<div class="">
  <div class="col-lg-4 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tree fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{$productos}}</div>
                    <div>Productos</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-truck fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{$servicios}}</div>
                    <div>Servicios</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-envelope-o fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{$mensajes}}</div>
                    <div>Mensajes</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

</div>
@endsection
