@extends('app')

@section('tittle') <h1 class="tittle"> Nosotros </h1> @endsection

@section('content')
  <div class="col-sm-4 acerca-item">
    <img class="acerca-img-center" src="FotosMM/Servicios/IMG_0203.jpg" alt="" />
    <h2 class="tittle">¿Quienes somos?</h2>
    <div class="nosotros-right">
      Somos una empresa importadora en productos de madera y derivados así como
      de líneas de complementos útiles para nuestro ramo dirigido a la industria
      de mueblerías y carpintería.
    </div>
  </div>
  <div class="col-sm-4 acerca-item">
    <img class="acerca-img-center" src="{{asset('Frontend/nosotros/vision.png')}}" alt="" />
    <h2 class="tittle">Nuestra visión</h2>
    <div class="nosotros-left">
      Ser el mayor distribuidor a nivel nacional en la comercialización de madera y derivados.
Así como la Cia elegida por nuestra innovación, soluciones, productos y servicios.
Reconocidos por la calidad humana y profesionalismo de nuestra gente y contribución a nuestro país.
    </div>
  </div>
  <div class="col-sm-4 acerca-item">
    <img class="acerca-img-center" src="{{asset('Frontend/nosotros/lider.png')}}" alt="" />
    <h2 class="tittle">Nuestra misión</h2>
    <div class="nosotros-right">
      Ser la empresa líder en productos de madera y derivados que requiera su
      empresa, satisfaciendo las necesidades de nuestros clientes brindándoles
      productos de alta calidad y excelencia en servicios.
    </div>
  </div>
  <div class="col-sm-4 acerca-item">
    <img class="acerca-img-center" src="{{asset('Frontend/nosotros/valores.png')}}" alt="" />
    <h2 class="tittle">Nuestros valores</h2>
    <div class="nosotros-left">
      <ul>
        <li>Honestidad</li>
        <li>Integridad</li>
        <li>Lealtad</li>
        <li>Puntualidad</li>
        <li>Seriedad</li>
        <li>Importancia del negocio</li>
      </ul>
    </div>
  </div>
@endsection
