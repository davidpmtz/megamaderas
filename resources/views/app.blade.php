<!-- =============================================== -->
<!-- =                                             = -->
<!-- =                JMED 						             = -->
<!-- =             Enterprise                      = -->
<!-- =          										               = -->
<!-- =============================================== -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Megamaderas S.A de C.V</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/freelancer.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300italic' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/principal.css')}}" rel="stylesheet">
		@yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#page-top"><img src="{{asset('img/logo.png')}}" class="img-responsive" alt="" width="auto" height="auto"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('/')}}">Inicio</a>
                    </li>
                    <li id="liProductos" class="page-scroll">
                        <a href="{{url('Productos')}}">Productos</a>
                        <ul id="ulProductos" class="listOptions">
                        </ul>
                    </li>
                    <li id="liServicios" class="page-scroll">
                        <a href="{{url('Servicios')}}">Servicios</a>
                        <ul id="ulServicios" class="listOptions">
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('contacto')}}">Contacto</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{url('acerca')}}">Acerca de</a>
                        <!--<a href="#acerca">Acerca de</a>-->
                    </li>
                    <li class="page-scroll">
                      <div class="form-group">
                        <input id="inBuscarProducto" type="text" data-toggle="tooltip" data-placement="bottom" title="Presiona Enter para más resultados" class="form-control" placeholder="Buscar">
                      </div>
                    </li>
                    <li class="page-scroll">
                      <input id="ihRedirProductos" type="hidden" name="name" value="{{url('Productos')}}">
                      <input id="ihService" type="hidden" name="name" value="{{url('showService')}}">
                      <input id="ihbtnBuscarProducto" type="hidden" name="name" value="{{url('showProduct')}}">
                      <input id='listOptions' type="hidden" name="name" value="{{url('listOptions')}}">
                      <button id="btnBuscarProducto" type="submit" class="btn btn-default">Buscar</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">@yield('tittle')</span>
                        <hr class="star-light">
                        <span class="skills">@yield('msg')</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@yield('content')
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
                        <p>Av. Rio Nilo #1680 Col. Atlas C.P: 44870<br>Guadalajara, Jalisco</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Media</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class='clear'></div>
                    <div class="footer-col col-md-4">
                        <h3>Megamaderas S.A de C.V</h3>
                        <p>Gracias por visitar nuestro sitio oficial. Esperamos cumplir con todas tus espectativas hacia nosotros.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Megamaderas | J-MED Developers
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/cbpAnimatedHeader.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/freelancer.js')}}"></script>
		@yield('js')
</body>

</html>
