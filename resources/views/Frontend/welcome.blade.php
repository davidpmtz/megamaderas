@extends('app')

@section('tittle') <h1> Bienvenido </h1> @endsection

@section('content')

    <div id="carrusel" class="container">
        <div class="row">
            <div class="content-img-carrousel">
                <ul>
                    <li>
                        <img src="{{asset('FotosMM/Servicios/Servicio.jpg')}}"/>
                    </li>
                    <li>
                        <img src="{{asset('FotosMM/Servicios/IMG_0217.jpg')}}"/>
                    </li>
                    <li>
                        <img src="{{asset('FotosMM/Servicios/IMG_0200.jpg')}}"/>
                    </li>
                    <li>
                        <img src="{{asset('FotosMM/Servicios/IMG_0203.jpg')}}"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Productos nuevos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            @if ($productos->count()>0)
                @foreach ($productos as $producto)
                    <div class="col-sm-4 portfolio-item portfolio-producto" id="divproducto{{$producto->id}}">
                      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
                          <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}">
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
                                            <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}" title="{{$producto->nombre}}">
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
            @endif
        </div>
    </div>


@endsection
