@extends('backend.index')
@section('user') {{Auth::user()->name}} @endsection
<?php
  $path = public_path();
  $path = $path."\backend\img\perfilFotos";
  $img = $path."\\".Auth::user()->meta4.".jpg";
?>
@if(file_exists($img))
  @section('avatar') {{asset("backend/img/perfilFotos/" . Auth::user()->meta4 . ".jpg")}} @endsection
  @section('avatar2') {{asset("backend/img/perfilFotos/" . Auth::user()->meta4 . ".jpg")}} @endsection
@else
  @section('avatar') {{asset('backend/img/placeholders/avatars/avatar.jpg')}} @endsection
  @section('avatar2') {{asset('backend/img/placeholders/avatars/avatar.jpg')}} @endsection
@endif

@section('user2') {{Auth::user()->name}} @endsection


<!-- NavBar Creation -->
@section('arbol')
  @if(isset($modulos))
    @include('backend.menu',array($modulos))
  @endif
@endsection
<!-- Ends NavBar Creation -->

    @section('content')
        <!-- Dashboard Header -->
    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <div class="row">
                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Welcome <strong></strong><br><small>{{Auth::user()->name}}</small></h1>
                </div>
                <!-- END Main Title -->

                <!-- Top Stats -->
                <div class="col-md-8 col-lg-6">
                    <div class="row text-center">
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                $<strong>93.7k</strong><br>
                                <small><i class="fa fa-thumbs-o-up"></i> Great</small>
                            </h2>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                <strong>167k</strong><br>
                                <small><i class="fa fa-heart-o"></i> Likes</small>
                            </h2>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                <strong>101</strong><br>
                                <small><i class="fa fa-calendar-o"></i> Events</small>
                            </h2>
                        </div>
                        <!-- We hide the last stat to fit the other 3 on small devices -->
                        <div class="col-sm-3 hidden-xs">
                            <h2 class="animation-hatch">
                                <strong>27&deg; C</strong><br>
                                <small><i class="fa fa-map-marker"></i> Sydney</small>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- END Top Stats -->
            </div>
        </div>
        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
        <img src="{{asset('backend/img/placeholders/headers/dashboard_header.jpg')}}" alt="header image" class="animation-pulseSlow">
    </div>
    <!-- END Dashboard Header -->

    <!-- Mini Top Stats Row -->
    <div class="row">
        <div class="col-sm-6 col-lg-3" id="moodleDiv">
            <!-- Widget -->
            <a href="http://moodle.mipcapps.mx/" target="_blank" class="widget widget-hover-effect1">
                <div class="widget-simple" id="moodle">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="gi gi-cloud"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                         <strong>Moodle</strong><br>
                        <small>Plataforma de cursos</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3" id="bpmDiv">
            <!-- Widget -->
            <a href="http://bpm.mipcapps.mx/sys/en/neoclassic/login/login" target="_blank" class="widget widget-hover-effect1">
                <div class="widget-simple" id="bpm">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="hi hi-tasks"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>BPM</strong><br>
                        <small>Procesos empresariales</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="http://www.mipc.com.mx/" target="_blank" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>Sitio Oficial</strong><br>
                        <small>Página Web</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget  -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="http://blog.mipc.com.mx/" target="_blank" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                        <i class="fa fa-commenting-o"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Blog <strong>MiPC</strong>
                        <small>Blog Empresarial</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6">
            <!-- Widget -->
            <a class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="gi gi-wallet"></i>
                    </div>
                    <div class="pull-right">
                        <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span id="mini-chart-sales"</span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        BPMs <strong>Pendientes</strong>
                        <!-- <small>Tienes 10 BPMS en espera</small> -->
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6">
            <!-- Widget -->
            <a class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="pull-right">
                        <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Cursos <strong>Pendientes</strong>
                        <!-- <small>Tienes 10 BPMS en espera</small> -->
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
    </div>
    <!-- END Mini Top Stats Row -->

    <!-- Widgets Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Timeline Widget -->
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <div class="widget-options">
                        <div class="btn-group btn-group-xs">
                              <a href="javascript:hiddenDiv()" id="hide"> <i class="fa fa-minus-circle fa-2x"></i> </a>
                              <a href="javascript:showDiv()" id="show"> <i class="fa fa-plus-circle fa-2x" ></i> </a>
                        </div>
                    </div>
                    <h3 class="widget-content-light">
                        Últimas <strong>Noticias</strong>
                        <small><a href="#"><strong>Ver todas</strong></a></small>
                    </h3>
                </div>
                <div class="widget-extra" id="widgetNews">
                    <!-- Timeline Content -->
                    <div class="timeline">
                        <ul class="timeline-list">
                          <?php $x=0 ?>
                          @foreach($news as $new)
                            <?php

                              $today  = date("Y:m:d H:m:s");
                              $diference = strtotime($today) - strtotime($new->updated_at);

                              $horas    = floor ($diference / 3600);
                              $minutos  = (($diference / 60) %60);
                              $segundos  = ($diference % 60);
                              $time = array();
                              $time[0]    = str_pad($horas,2,"0",STR_PAD_LEFT);
                              $time[0]    = $time[0].':'. str_pad($minutos,2,"0",STR_PAD_LEFT);
                              $time[0]    = $time[0].':'. str_pad($segundos,2,"0",STR_PAD_LEFT);

                              switch($time[0])
                              {
                                case $time < '00:06:00':
                                  $posted = "Hace 5 minutos";
                                  break;

                                case $time > '00:06:00' && $time < '00:16:00':
                                  $posted = "Hace 15 minutos";
                                  break;

                                case $time > '00:16:00' && $time < '00:30:00':
                                  $posted = "Hace 30 minutos";
                                  break;

                                case $time < '00:01:00':
                                  $posted = "Hace un momento";
                                  break;

                                default:
                                  $posted = "Mas de 1 hora";
                                  break;
                              }
                                $x++;
                            ?>
                            @if($x % 2 != 0)
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                                <div class="timeline-time"><small>{{$posted}}</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="#"><strong>{{$new->created_by}}</strong></a></p>
                                    <p class="push-bit">{!! str_limit($new->content,300,'[...]') !!}</p>
                                    @if(strlen($new->content) > 300)
                                    <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i>Noticia completa</a></p>
                                    @endif
                                </div>
                            </li>
                            @else
                            <li class="active">
                                <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                                <div class="timeline-time"><small>{{$posted}}</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="#"><strong>{{$new->created_by}}</strong></a></p>
                                    <p class="push-bit">{!! str_limit($new->content,300,'[...]') !!}</p>
                                    @if(strlen($new->content) > 300)
                                    <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i>Noticia completa</a></p>
                                    @endif
                                </div>
                            </li>
                            @endif
                            @endforeach
                            <li class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-default">Todas las noticias</a>
                            </li>

                        </ul>
                    </div>
                    <!-- END Timeline Content -->
                </div>
            </div>
            <!-- END Timeline Widget -->
        </div>
        <div class="col-md-6">
            <!-- Your Plan Widget -->
            <div class="widget" >
                <div class="widget-extra themed-background-dark">
                    <div class="widget-options">
                      <div class="btn-group btn-group-xs">
                        <a href="javascript:hiddenDiv2()" id="hide2"> <i class="fa fa-minus-circle fa-2x"></i> </a>
                        <a href="javascript:showDiv2()" id="show2"> <i class="fa fa-plus-circle fa-2x" ></i> </a>
                      </div>
                    </div>
                    <h3 class="widget-content-light">
                        Activos <strong>Asignados</strong>
                        <!--<small><a href="page_ready_pricing_tables.html"><strong>Upgrade</strong></a></small> -->
                    </h3>
                </div>

                <div class="widget-extra-full" id="widgetActivos">
                    <div class="row text-center">
                      <div class="block">
  <!-- Responsive Full Title -->
  <div class="block-title">
      <h2><strong>Activos</strong> Fijos</h2>
  </div>
  <!-- END Responsive Full Title -->

  <!-- Responsive Full Content -->
  <p>Some text here</p>
  <div class="table-responsive">
      <table class="table table-vcenter table-striped">
          <thead>
              <tr>
                  <th style="width: 150px;" class="text-center">#</th>
                  <th>Etiqueta</th>
                  <th>Articulo</th>
                  <th>Tipo</th>
                  <!-- <th style="width: 150px;" class="text-center">Actions</th> -->
              </tr>
          </thead>
          <tbody>
            <!-- CODE IS HERE -->
          </tbody>
      </table>
  </div>
  <!-- END Responsive Full Content -->
</div>
                    </div>
                </div>
            </div>
            <!-- END Your Plan Widget -->

            <!-- Charts Widget -->
            <!--COMENTED
            <div class="widget">
                <div class="widget-advanced widget-advanced-alt">
                    <!-- Widget Header -->
                    <!--COMENTED
                    <div class="widget-header text-center themed-background">
                        <h3 class="widget-content-light text-left pull-left animation-pullDown">
                            <strong>Sales</strong> &amp; <strong>Earnings</strong><br>
                            <small>Last Year</small>
                        </h3>
                        <!-- Flot Charts (initialized in js/pages/index.js), for more examples you can check out http://www.flotcharts.org/ -->
                      <!--COMENTED  <div id="dash-widget-chart" class="chart"></div>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <!--COMENTED<div class="widget-main">
                        <div class="row text-center">
                            <div class="col-xs-4">
                                <h3 class="animation-hatch"><strong>7.500</strong><br><small>Clients</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3 class="animation-hatch"><strong>10.970</strong><br><small>Sales</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3 class="animation-hatch">$<strong>31.230</strong><br><small>Earnings</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                <!--COMENTED</div>
            </div>
            <!-- END Charts Widget -->

            <!-- Weather Widget -->
            <!--COMENTED<div class="widget">
                <div class="widget-advanced widget-advanced-alt">
                    <!-- Widget Header -->
                  <!--COMENTED  <div class="widget-header text-left">
                        <!-- For best results use an image with at least 150 pixels in height (with the width relative to how big your widget will be!) - Here I'm using a 1200x150 pixels image -->
                      <!--COMENTED  <img src="img/placeholders/headers/widget5_header.jpg" alt="background" class="widget-background animation-pulseSlow">
                        <h3 class="widget-content widget-content-image widget-content-light clearfix">
                            <span class="widget-icon pull-right">
                                <i class="fa fa-sun-o animation-pulse"></i>
                            </span>
                            Weather <strong>Station</strong><br>
                            <small><i class="fa fa-location-arrow"></i> The Mountain</small>
                        </h3>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <!--COMENTED<div class="widget-main">
                        <div class="row text-center">
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>10&deg;</strong> <small>C</small><br>
                                    <small>Sunny</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>80</strong> <small>%</small><br>
                                    <small>Humidity</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>60</strong> <small>km/h</small><br>
                                    <small>Wind</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>5</strong> <small>km</small><br>
                                    <small>Visibility</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
              <!--COMENTED  </div>
            </div>
            <!-- END Weather Widget-->

            <!-- Advanced Gallery Widget -->
          <!--COMENTED  <div class="widget">
                <div class="widget-advanced">
                    <!-- Widget Header -->
                  <!--COMENTED  <div class="widget-header text-center themed-background-dark">
                        <h3 class="widget-content-light clearfix">
                            Awesome <strong>Gallery</strong><br>
                            <small>4 Photos</small>
                        </h3>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                  <!--COMENTED  <div class="widget-main">
                        <a href="page_comp_gallery.html" class="widget-image-container">
                            <span class="widget-icon themed-background"><i class="gi gi-picture"></i></span>
                        </a>
                        <div class="gallery gallery-widget" data-toggle="lightbox-gallery">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo15.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo15.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo5.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo13.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                </div>
            </div>
            <!-- END Advanced Gallery Widget -->
        </div>
    <!-- END Widgets Row -->
@stop
@section('js')
<script src="{{asset('backend/js/vendor/script.js')}}"></script>

<script>
window.onload = function(){

      var id = document.getElementById('show');
      id.style.display = 'none';
      var id = document.getElementById('show2');
      id.style.display = 'none';
    setTimeout(refrescarDiv,2000);
    }
  function hiddenDiv() {
    document.getElementById('widgetNews').style.display = 'none';
    var show = document.getElementById('show');
    var hide = document.getElementById('hide');
    show.style.display = 'block';
    hide.style.display = 'none';
  }
  function showDiv() {
    document.getElementById('widgetNews').style.display = 'block';
    var show = document.getElementById('show');
    var hide = document.getElementById('hide');
    show.style.display = 'none';
    hide.style.display = 'block';
  }
  function hiddenDiv2() {
    document.getElementById('widgetActivos').style.display = 'none';
    var show = document.getElementById('show2');
    var hide = document.getElementById('hide2');
    show.style.display = 'block';
    hide.style.display = 'none';
  }
  function showDiv2() {
    document.getElementById('widgetActivos').style.display = 'block';
    var show = document.getElementById('show2');
    var hide = document.getElementById('hide2');
    show.style.display = 'none';
    hide.style.display = 'block';
  }
</script>

<script>
function ventanaSecundaria (URL,nombre){
   window.open(URL,nombre,"menubar=NO")
}

function refrescarDiv() {
  var email = "<?php echo Auth::user()->email; ?>";
  var request = $.ajax({
    url: "home",
    type: "get",
    data: {email:email},
    dataType: "json"
  });

  request.done(function(data){
    generaChartsMoodle(data.Moodle);
    generaChartsBPM(data.Bpm);
});

  request.fail(function(jqXHR, textStatus){
    alert("Request failed: " + textStatus);
  });
}


var miniChartBarOptions = {

    type: 'bar',
    barWidth: 8,
    barSpacing: 6,
    height: '64px',
    tooltipOffsetX: -25,
    tooltipOffsetY: 20,
    barColor: '#999999',
    tooltipPrefix: '+ ',
    tooltipSuffix: ' Sales',
     tooltipFormat: '\{\{offset:offset}} \{\{value}} \{\{suffix}}',
   };

   /* Arrary Structure of CURSOS DE MOODLE
     $datosCurso['cursoNombre'] = course_fullname;
     $datosCurso['diasRestantes'] = last_day;
     $datosCurso['quizNombre'] = quiz_fullname;
   */

   /* Arrary Structure of BPMs
    $bpmArray['idCaso'][$x] 			= $bpmPendientes[$x]->CASE_NUMBER;
    $bpmArray['caseTittle'][$x] 	= $bpmPendientes[$x]->CASE_TITLE;
    $bpmArray['dias'][$x] 	      = $bpmPendientes[$x]->DEL_DELEGATE_DATE;
   */

function generaChartsBPM(Bpm){
miniChartBarOptions['tooltipSuffix'] = '- días transcurridos';
  miniChartBarOptions['tooltipValueLookups'] = {'offset':
    Bpm['idCaso']
      };

var arrayMoodle = Object.keys(Bpm['dias']).map(function (key) {return Bpm['dias'][key]});
$('#mini-chart-sales').sparkline(arrayMoodle, miniChartBarOptions);
}
function generaChartsMoodle(Moodle,size){
  miniChartBarOptions['tooltipSuffix'] = '- días restantes';
  miniChartBarOptions['tooltipValueLookups'] = {'offset':
        Moodle['cursoNombre']
      };
  var array = Object.keys(Moodle['diasRestantes']).map(function (key) {return Moodle['diasRestantes'][key]});
  $('#mini-chart-brand').sparkline(array, miniChartBarOptions);
}
</script>
@stop
