@extends('app')

@section('tittle') <h1> Productos </h1> @endsection

@section('content')
<nav id="navProduct" class="navbar navbar-default navbar-fixed-top">
    <div id="divProductosContainer" class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1p">
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
                  <a href="{{url('Productos')}}">Todos</a>
                </li>
                @foreach ($tipos as $tipo)
                <li class="page-scroll types-productos">
                  <a href="{{url('Productos')}}/{{$tipo->id}}">{{$tipo->tipo}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

  <div id="divProductos">
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
        <li><a href="{{$productos->url($i)}}">{{$i}}</a></li>
      @endfor
    </ul>
    </div>
    @else
      <div class="alert alert-info alert-dismissable" style="margin-left:8%;margin-top:10%;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        No hay productos registrados aún.
      </div>
    @endif
  </div>
@endsection
