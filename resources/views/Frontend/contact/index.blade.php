@extends('app')

@section('tittle') <br><div class="col-lg-12"><h1 class="tittle shatxt" style="font-size:8vw; margin-top:40px;"> Contáctanos </h1></div> @endsection

@section('content')
<br><br><br>
<div class="row text-center">
  <div class="col-lg-12">
<div class="col-md-4">
  <center><i class="fa fa-users" style="font-size:150px;"></i></center>
  <h1 class="tittle">Acerca de </h1>
  <p>Somos una empresa que se preocupa por sus clientes para mantener la satisfacción de estos
  lo más alta posible y así cumplir con sus expectativas.
</p>
</div>


<div class="footer-col col-md-4">
  <center><i class="fa fa-magic" style="font-size:150px;"></i></center>
  <h1 class="tittle">¿En que puedo ayudarte?</h1>
  <p>Todo el equipo de MegaMaderas esta aqui para ayudarte a resolver cualquiera de tus dudas que tengas en
    relación a nosotros, nuestros productos, nuestros servicios. </p>
</div>



<div class="footer-col col-md-4">
  <center><i class="fa fa-briefcase" style="font-size:150px;"></i></center>
  <h1 class='tittle'>Objetivo</h1>
  <p>MegaMaderas tiene como objetivo ser la mejor empresa proveedora de maderas para todos los clientes del país.</p>
</div>

<div class='col-lg-12'>
</div>

  <div class='col-lg-12'>
    <center><i class="fa fa-envelope" style="font-size:150px;"></i></center>
    <h3 class='tittle'>Déjanos un mensaje con tus datos y nosotros te contactaremos a la brevedad.</h3>
    <p>Los tiempos de respuesta varían en relación a la demanda.</p>
  </div>

</div>
</div>

<!-- Contact Section -->
<section id="contact" class="sendMail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Contáctanos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                {!! Form::open(['route' => 'contacto.store', 'method' => 'POST']) !!}
                    <div class="row control-group">
                        <div class="col-xs-12  controls">
                              {!! Form::label('name', 'Nombre completo',['class' => 'secTit','style' => 'font-size:25px;']) !!}
                              {!! Form::text('name',null,['class' => 'form-control' ,'style' => 'font-size:20px;', 'placeholder' => 'Nombre..', 'required']) !!}
                              <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class=" col-xs-12 controls">
                            {!! Form::label('email', 'Correo electrónico', ['class' => 'secTit','style' => 'font-size:25px;']) !!}
                            {!! Form::email('email',null,['class' => 'form-control','style' => 'font-size:20px;','placeholder' => 'Correo Electrónico..', 'required', 'id' => 'email', 'required data-validation-required-message' => 'Porfavor ingresa una cuenta de correo valida.']) !!}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-xs-12 controls">
                          {!! Form::label('telephone', 'Número de teléfono',['class' => 'secTit','style' => 'font-size:25px;']) !!}
                          {!! Form::text('telephone',null,['class' => 'form-control','style' => 'font-size:20px;', 'placeholder' => 'Teléfono..', 'required']) !!}
                          <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-xs-12 controls">
                            {!! Form::label('message', 'Mensaje',['class' => 'secTit','style' => 'font-size:25px;']) !!}
                            {!! Form::textarea('message',null,['class' => 'form-control', 'style' => 'font-size:20px;','placeholder' => 'Escribe tu mensaje...','required']) !!}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-warning btn-lg btn-block" style="font-size:30px;"><i class="fa fa-location-arrow"></i>&nbsp;Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="col-lg-12 text-center">
    <h1 class='tittle'>Ubicanos</h1>
    <hr class="star-primary">
</div>
<div id="googleMap" style="width:100%;height:300px;"></div>

@endsection

@section('js')
<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
var myCenter=new google.maps.LatLng(20.6515353,-103.3272253);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--
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
-->
@endsection
