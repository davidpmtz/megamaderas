@extends('Backend.master')
@section('tittle','Home')  @endsection
@section('activeHome','active') @endsection
@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
  <div class="col-xs-9"><h1> Bienvenido Administrador!!! </h2></div>
  <div class="col-xs-4">
    <p class="home"> En los módulos de administración podrás realizar diferentes actividades relacionadas a tu página, para así tener el control total sobre lo que se muestra al público en general. </p>
    <p class="home">También podrás revisar los comentarios que dejan los usuarios acerca de algún producto, servicio o en general hacia la empresa.</p>
  </div>
  <div class="col-xs-8">.
    <div class="col-xs-4">
      <section id="least">
          <div class="least-preview"></div>
          <ul class="least-gallery">
              <li>
                  <a href="{{url('admin/products')}}" title="Productos" data-subtitle="CRUD - Productos" data-caption="<strong>Bold text</strong> normal caption text">
                  <img src="{{asset('FotosMM/Maderas/IMG_0207.jpg')}}" alt="Alt Image Text" />
                  </a>
              </li>
          </ul>
      </section>
    </div>

    <div class="col-xs-4">
      <section id="least">
          <div class="least-preview"></div>
          <ul class="least-gallery">
              <li>
                  <a href="src/media/big/01.jpg" title="Servicios" data-subtitle="CRUD - Servicios" data-caption="<strong>Bold text</strong> normal caption text">
                  <img src="{{asset('FotosMM/Servicios/IMG_0217.jpg')}}" alt="Alt Image Text" />
                  </a>
              </li>
          </ul>
      </section>
    </div>

    <div class="col-xs-4">
      <section id="least">
          <div class="least-preview"></div>
          <ul class="least-gallery">
              <li>
                  <a href="src/media/big/01.jpg" title="Mensajes" data-subtitle="Bandeja de entrada" data-caption="<strong>Bold text</strong> normal caption text">
                  <img src="{{asset('img/icons/mail.jpg')}}" alt="Alt Image Text" />
                  </a>
              </li>
          </ul>
      </section>
    </div>
  </div>

</div>
@endsection
@section('js')
<!-- jQuery library -->
<script src="{{asset('Plugins/Fotos/src/js/libs/jquery/2.0.2/jquery.min.js')}}"></script>
<!-- least.js library -->
<script src="{{asset('Plugins/Fotos/src/js/libs/least/least.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.least-gallery').least();
    });
</script>

@endsection
