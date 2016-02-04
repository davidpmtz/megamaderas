@extends('app')

@section('tittle') <h1> Productos </h1> @endsection

@section('content')
  <div id="divProductos">
    @foreach ($productos as $producto)
      <div class="products">
        <h3>{{$producto->nombre}}</h3>
        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$producto->nombre}} {{$producto->descripcion}}"
        href="FotosMM/Herrajes/3360 70-77.jpg">
        <span class="overlay-img"></span>
        <span class="overlay-img-thumb font-icon-plus"></span>
        <img src="FotosMM/Herrajes/3360 70-77.jpg" alt="">
      </a>
      </div>
    @endforeach
    <div class="product">

    </div>
  </div>
  <div id="divVerMas" class="divVerMas">
    <a id="aNextPage" href="{{$productos->nextPageUrl()}}"> Ver más productos</a>
  </div>
@endsection
