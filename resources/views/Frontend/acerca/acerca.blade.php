@extends('app')

<<<<<<< HEAD
@section('tittle') <br><div class="col-lg-12"><h1 class="tittle shatxt" style="font-size:8vw; margin-top:40px;"> Nosotros </h1></div> @endsection

@section('content')
  <div class="col-sm-4 acerca-item text-center">
    <center><i class='fa fa-users' style='font-size:200px;'></i></center>
    <h2 class="tittle">¿Quienes somos?</h2>
    <p class="nosotros-right">
      Somos una empresa importadora en productos de madera y derivados así como
      de líneas de complementos útiles para nuestro ramo dirigido a la industria
      de mueblerías y carpintería.
    </p>
  </div>
  <div class="col-sm-4 acerca-item text-center">
    <center><i class='fa fa-eye' style='font-size:200px;'></i></center>
    <h2 class="tittle">Nuestra visión</h2>
    <p class="nosotros-left">
      Ser el mayor distribuidor a nivel nacional en la comercialización de madera y derivados.
Así como la Cia elegida por nuestra innovación, soluciones, productos y servicios.
Reconocidos por la calidad humana y profesionalismo de nuestra gente y contribución a nuestro país.
    </p>
  </div>
  <div class="col-sm-4 acerca-item text-center">
    <center><i class='fa fa-rocket' style='font-size:200px;'></i></center>
    <h2 class="tittle">Nuestra misión</h2>
    <p class="nosotros-right">
      Ser la empresa líder en productos de madera y derivados que requiera su
      empresa, satisfaciendo las necesidades de nuestros clientes brindándoles
      productos de alta calidad y excelencia en servicios.
    </p>
  </div>
  <div class="col-sm-4 acerca-item text-center">
    <center><i class='fa fa-trophy' style='font-size:200px;'></i></center>
    <h2 class="tittle">Nuestros valores</h2>
    <p>Somos reconocidos ante nuestros clientes por nuestra:</p>
    <div align='left'>
      <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Honestidad</p>
        <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Integridad</p>
        <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Lealtad</p>
        <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Puntualidad</p>
        <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Seriedad</p>
        <div class="col-sm-5"></div>
        <p><i class="fa fa-star"></i>&nbsp;Importancia del negocio</p>
=======
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
>>>>>>> 4c86ee512087cb3dda4f5083a04b5095b7fef966
      </ul>
    </div>
  </div>
@endsection
