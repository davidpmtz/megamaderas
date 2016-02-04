@foreach ($productos as $producto)
  <div class="products">
    <h3>{{$producto->nombre}}</h3>
    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$producto->descripcion}}"
    href="FotosMM/Herrajes/3360 70-77.jpg">
    <span class="overlay-img"></span>
    <span class="overlay-img-thumb font-icon-plus"></span>
    <img src="FotosMM/Herrajes/3360 70-77.jpg" alt="">
  </a>
  </div>
@endforeach
<!---->{{$productos->nextPageUrl()}}
