@extends('app')

@section('tittle') <h1> Contáctanos </h1> @endsection

@section('content')
<hr>
<div class="footer-col col-md-4">
  <center> <img src="{{asset('img/portfolio/about_us.png')}}"> </center>
  <h3>Acerca de </h3>
  <p>Somos una empresa que se preocupa por sus clientes para mantener la satisfacción de estos
  lo más alta posible y así cumplir con sus expectativas
</p>
</div>


<div class="footer-col col-md-4">
  <center> <img src="{{asset('img/portfolio/team.png')}}"> </center>
  <h3>¿En que puedo ayudarte?</h3>
  <p>Todo el equipo de MegaMaderas esta aqui para ayudarte a resolver cualquiera de tus dudas que tengas en
    relación a nosotros, nuestros productos, nuestros servicios. </p>
</div>



<div class="footer-col col-md-4">
  <center> <img src={{asset('img/portfolio/goals.png')}}> </center>
  <h3>Objetivo</h3>
  <p>MegaMaderas tiene como objetivo ser la mejor empresa proveedora de maderas para todos los clientes del país.</p>
</div>

<div class='col-lg-12'>
</div>

  <div class='col-lg-12'>
    <h3>Déjanos un mensaje con tus datos y nosotros te contactaremos a la brevedad.</h3>
    <p>Los tiempos de respuesta varían en relación a la demanda.</p>
  </div>

<hr>
<hr>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Porfavor ingresa tu nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Porfavor ingresa una cuenta de correo valida.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Porfavor ingresa tu número de telefono..">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Porfavor ingresa un mensaje."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="google" id="google">

</div>

@endsection

@section('js')
<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
    <script src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/helpers/gmaps.min.js"></script>
<script>
    window.onload = function(){
        var options = {
            zoom: 16
            , center: new google.maps.LatLng(20.651439, -103.3272500)
            , mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('google'), options);

        var marcador = new google.maps.Marker({
            position: map.getCenter()
            , map: map
            , title: 'Megamaderas S.A de C.V'
            , cursor: 'default'
            , animation: google.maps.Animation.DROP

        });

        var infowindow = new google.maps.InfoWindow({ content: '<h4> << Megamaderas S.A. DE C.V. >> </h4> <p> Ven y visitamos, estamos para aclarar tus dudas.</p>' });
        infowindow.open(map, marcador);
    };
</script>
@endsection
