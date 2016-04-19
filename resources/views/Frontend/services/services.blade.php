@extends('app')

@section('tittle') <h1> Servicios </h1> @endsection

@section('content')
  <div id="divServicios">
    @if($servicios->count() > 0)
    @foreach ($servicios as $servicio)
    <div class="col-sm-4 servicio-item">
      <a href="#producto{{$servicio->id}}" class="portfolio-link servicio-img" data-toggle="modal">
          <img src="{{asset('images/servicios')}}/{{$servicio->id}}.jpg" class="img-responsive" alt="{{$servicio->nombre}}">
      </a>
      <div class="info-service">
        <div class="title-service">
          <h1>{{$servicio->nombre}}</h1>
        </div>
        <div class="desc-service">
            {{$servicio->descripcion}}
        </div>
      </div>
      <div class="not-show" aria-hidden="true">
        {{$servicio->nombre}}
        {{$servicio->descripcion}}
        {{$servicio->precio}}
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="servicio{{$servicio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>{{$servicio->nombre}}</h2>
                            <hr class="star-primary">
                            <img src="{{asset('images/servicios')}}/{{$servicio->id}}.jpg" class="img-responsive img-centered" alt="{{$servicio->nombre}}">
                            <ul class="list-inline item-details">
                                <li><strong><p>Descripción</p></strong>
                                  <p>{{$servicio->descripcion}}</p>
                                </li>
                            </ul>
                            <ul class="list-inline item-details">
                              <li><strong><p>Precio</p></strong>
                                <p>${{$servicio->precio}}</p>
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
      @for ($i = 1; $i <= $servicios->lastPage(); $i++)
        <li><a href="{{$servicios->url($i)}}">{{$i}}</a></li>
      @endfor
    </ul>
    </div>
    @else
      <div class="alert alert-info alert-dismissable" style="margin-left:8%;margin-top:10%;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        No hay servicios registrados aún.
      </div>
    @endif
  </div>

@endsection
