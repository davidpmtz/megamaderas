@extends('app')

<<<<<<< HEAD
@section('tittle') <br><div class="col-lg-12"><h1 class="tittle shatxt" style="font-size:8vw; margin-top:40px;">Productos</h1></div> @endsection
=======
@section('tittle') <h1 class="tittle"> Productos </h1> @endsection
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966

@section('content')
<nav id="navProduct" class="navbar navbar-default navbar-fixed-top">
    <div id="divProductosContainer" class="container">
<<<<<<< HEAD
        <div class="navbar-header page-scroll" style="background-color:#fff;">
            <button type="button" class="navbar-toggle" style="background-color:#F9BF3B;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1p">
=======
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1p">
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1p">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll types-productos">
<<<<<<< HEAD
                  <a href="{{url('Productos')}}" class="secTit" style="color:#fff; font-size:25px;"><i class="fa fa-leaf"></i>&nbsp;Todos</a>
                </li>
                @foreach ($tipos as $tipo)
                <li class="page-scroll types-productos">
                  <hr>
                  <a href="{{url('Productos')}}/{{$tipo->id}}" class="secTit" style="color:#fff;">&nbsp;&nbsp;&nbsp;<i class="fa fa-leaf"></i>&nbsp;{{$tipo->tipo}}</a>
=======
                  <a href="{{url('Productos')}}">Todos</a>
                </li>
                @foreach ($tipos as $tipo)
                <li class="page-scroll types-productos">
                  <a href="{{url('Productos')}}/{{$tipo->id}}">{{$tipo->tipo}}</a>
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<<<<<<< HEAD
  <div id="divProductos" class="shabx">
=======
  <div id="divProductos">
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
    @if($productos->count() > 0)
    @foreach ($productos as $producto)
    <div class="col-sm-4 portfolio-item portfolio-producto" id="divproducto{{$producto->id}}">
      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
<<<<<<< HEAD
          <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}">
=======
          <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}" title="{{$producto->nombre}}">
>>>>>>> 9b31b4393c46ad95938ee13d6512821765d5ee93
      </a>
      <div class="not-show" aria-hidden="true">
        {{$producto->nombre}}
        {{$producto->tipo}}
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="producto{{$producto->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>{{$producto->nombre}}</h2>
                            <hr class="star-primary">
<<<<<<< HEAD
                            <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}">
                            <ul class="list-inline item-details">
                                <li><strong><p>Descripción</p></strong>
                                  <p>{{$producto->descripcion}}</p>
                                </li>
                            </ul>
=======
                            <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}" title="{{$producto->nombre}}">
>>>>>>> 9b31b4393c46ad95938ee13d6512821765d5ee93
                            <ul class="list-inline item-details">
                              <li><strong><p>Tipo</p></strong>
                                <p>{{$producto->tipo}}</p>
                              </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="divContentPagination">
    <ul class="pagination">
      @for ($i = 1; $i <= $productos->lastPage(); $i++)
<<<<<<< HEAD
        <li><button href="{{$productos->url($i)}}" class="btn  btn-lg btn-warning">{{$i}}</button></li>
=======
        <li><a href="{{$productos->url($i)}}">{{$i}}</a></li>
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
      @endfor
    </ul>
    </div>
    @else
      <div class="alert alert-info alert-dismissable" style="margin-left:8%;margin-top:10%;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
<<<<<<< HEAD
         No hay productos registrados aún.
=======
        No hay productos registrados aún.
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
      </div>
    @endif
  </div>
@endsection
