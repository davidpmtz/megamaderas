@extends('app')

@section('tittle')
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <div id="carrusel">
        <div class="content-img-carrousel">
            <ul>
                <li>
                    <img src="{{asset('FotosMM/Servicios/Servicio.jpg')}}"/>
                    <div class="carrousel-txt">
                        Prueba de texto 1
                    </div>
                </li>
                <li>
                    <img src="{{asset('FotosMM/Servicios/IMG_0217.jpg')}}"/>
                    <div class="carrousel-txt">
                        Prueba de texto 2
                    </div>
                </li>
                <li>
                    <img src="{{asset('FotosMM/Servicios/IMG_0200.jpg')}}"/>
                    <div class="carrousel-txt">
                        Prueba de texto 3
                    </div>
                </li>
                <li>
                    <img src="{{asset('FotosMM/Servicios/IMG_0203.jpg')}}"/>
                    <div class="carrousel-txt">
                        Prueba de texto 4
                    </div>
                </li>
            </ul>
        </div>

    </div>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Productos nuevos</h2>
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
                                            <h2 class='tittle'>{{$producto->nombre}}</h2>
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Productos destacados</h2>
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
                                            <h2 class='tittle'>{{$producto->nombre}}</h2>
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Nuestras marcas</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="footer-col col-md-4 foter-socios">
                <img src="{{asset('images/Marcas/cerrajes.png')}}" class="img-responsive img-centered" alt="Cerrajes" title="Cerrajes">
                <ul class="list-inline">

                </ul>
            </div>
            <div class="footer-col col-md-4 foter-socios">
                <img src="{{asset('images/Marcas/dekken.png')}}" class="img-responsive img-centered" alt="Dekken" title="Dekken">
                <ul class="list-inline">

                </ul>
            </div>
            <div class="footer-col col-md-4 foter-socios">
                <img src="{{asset('images/Marcas/sayer.png')}}" class="img-responsive img-centered" alt="Sayer" title="Sayer">
                <ul class="list-inline">

                </ul>
            </div>
            <div class="footer-col col-md-4 foter-socios">
                <img src="{{asset('images/Marcas/masisa.jpg')}}" class="img-responsive img-centered" alt="Masisa" title="Masisa">
                <ul class="list-inline">

                </ul>
            </div>
            <div class="footer-col col-md-4 foter-socios">
                <img src="{{asset('images/Marcas/logo.png')}}" class="img-responsive img-centered" alt="Megamaderas" title="Megamaderas">
                <ul class="list-inline">

                </ul>
            </div>
        </div>
    </div>


@endsection
