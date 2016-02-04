<!DOCTYPE html>
<html lang="en">
<head>
  <title>Megamaderas S.A de C.V</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('Plugins/css/bootstrap.css')}}">
  <!-- Related styles of various icon packs and plugins -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{asset('Plugins/js/bootstrap.js')}}"></script>
  @yield('css')
  @yield('js')

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Administrador |</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="@yield('activeHome')"><a href="{{asset(url('/admin'))}}">Home </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" class="@yield('activeProducts')"data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('admin/products')}}">Catalogo productos</a></li>
              <li><a href="{{url('admin/types')}}">Tipos de producto</a></li>
            </ul>
          </li>
          <li class="@yield('activeServices')"><a href="{{asset(url('/admin/services'))}}">Servicios</a></li>
          <li class="@yield('activeMessage')"><a href="{{asset(url('/admin/messages'))}}">Mensajes</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@yield('user') Waskalle <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Perfil</a></li>
              <li><a href="#">Mensaje</a></li>
              <li><a href="#">Reuniones</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">@yield('tittle')</h3>
    </div>
    @include('flash::message')
    <div class="panel-body">
      @yield('content')

    </div>
  </div>
  <footer class="foo">
    <div class="panel-footer">
        <div class="row">
           <div class="col-sm-4">
             <h5 class="footer">Some stuff can go here</h5>
             <p class="footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
           </div>
           <div class="col-sm-4">
             <h5 class="footer">Social media</h5>
             <a href='#'><img src="{{asset('images/social/dribbble.png')}}"></a>
             <a href='#'><img src="{{asset('images/social/facebook.png')}}"></a>
             <a href='#'><img src="{{asset('images/social/twitter.png')}}"></a>
             <a href='#'><img src="{{asset('images/social/forrst.png')}}"></a>
           </div>
           <div class="col-sm-4">
             <h5 class="footer">Get in touch</h5>
             <p class="footer">You can call us at:<br>
               t: 161 - 123 - CALL - NOW</p>
             <p class="footer">Or drop us a line on:
               e: <a href='mailto:contact@free.com'>contact@free.com</a></p>
           </div>
        </div>
    </div>
  </footer>
</body>
</html>
