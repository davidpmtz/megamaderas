@if($productos->count() > 0)
@foreach ($productos as $producto)
<div class="col-sm-4 portfolio-item portfolio-producto" id="divproducto{{$producto->id}}">
  <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
      <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}">
  </a>
  <div class="not-show" aria-hidden="true">
    {{$producto->nombre}}
    {{$producto->descripcion}}
    {{$producto->tipo}}
    {{$producto->precio}}
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
                        <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}">
                        <ul class="list-inline item-details">
                            <li><strong><p>Descripción</p></strong>
                              <p>{{$producto->descripcion}}</p>
                            </li>
                        </ul>
                        <ul class="list-inline item-details">
                          <li><strong><p>Tipo</p></strong>
                            <p>{{$producto->tipo}}</p>
                          </li>
                          <li><strong><p>Precio</p></strong>
                            <p>${{$producto->precio}}</p>
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
    No se encontraron resultados para su busqueda.
  </div>
@endif
