@extends('app')

@section('tittle') <h1> Productos </h1> @endsection

@section('content')
  <div id="divProductos">
    @foreach ($productos as $producto)
      <!--<div class="products caption">
        <h3>{{$producto->nombre}}</h3>
        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$producto->nombre}} {{$producto->descripcion}}"
        href="FotosMM/Herrajes/3360 70-77.jpg">
        <span class="overlay-img"></span>
        <span class="overlay-img-thumb font-icon-plus"></span>
        <img class="imgProducto" src="FotosMM/Herrajes/3360 70-77.jpg" alt="">
      </a>
    </div>-->

    <div class="col-sm-4 portfolio-item">
      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
          <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
          </div>
          <img src="FotosMM/Herrajes/3360 70-77.jpg" class="img-responsive" alt="">
      </a>
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
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>{{$producto->descripcion}}</p>
                            <ul class="list-inline item-details">
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    <div class="product">

    </div>
  </div>
@endsection
