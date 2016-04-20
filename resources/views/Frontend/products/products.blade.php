@extends('app')

@section('tittle') <h1> Productos </h1> @endsection

@section('content')
  <div id="divProductos">
    @foreach ($productos as $producto)
    <div class="col-sm-4 portfolio-item">
      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
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
                            <img src="FotosMM/Herrajes/3360 70-77.jpg" class="img-responsive img-centered img-width" alt="">
                            <p>{{$producto->descripcion}}</p>
                            <ul class="list-inline item-details">
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="">
    <ul class="pagination">
      @for ($i = 1; $i <= $productos->lastPage(); $i++)
        <li><a href="{{$productos->url($i)}}">{{$i}}</a></li>
      @endfor
    </ul>
    </div>
    {{$productos->url(1)}}
    {{$productos->lastPage()}}
    <div class="product">
    </div>
  </div>
@endsection
