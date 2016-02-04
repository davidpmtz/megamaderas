@extends('app')

@section('css')
<link rel="stylesheet" href="{{asset('css/base.css')}}">
@endsection
@section('img','original.png')
@section('tittle','Bienvenido!!')

<div class='clear'></div>
<div class='clear'></div>

@section('content')

<!-- Portfolio Grid Section -->
<section id="portfolio">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2>Productos</h2>
								<hr class="star-primary">
						</div>
				</div>
				<div class="row">
						<div class="col-sm-4 portfolio-item">
								<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x">Herrajes</i>
												</div>
										</div>
										<img src="{{asset('FotosMM/Herrajes/Herrajes.jpg')}}" class="img-responsive" alt="">
								</a>
						</div>
						<div class="col-sm-4 portfolio-item">
								<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x"> Maderas</i>
												</div>
										</div>
										<img src="{{asset ('FotosMM/Maderas/Maderas.jpg')}}" class="img-responsive" alt="">
								</a>
						</div>
						<div class="col-sm-4 portfolio-item">
								<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
										<div class="caption">
												<div class="caption-content">
														<i class="fa fa-search-plus fa-3x">Servicios</i>
												</div>
										</div>
										<img src="{{asset('FotosMM/Servicios/Servicio.jpg')}}" class="img-responsive" alt="">
								</a>
						</div>
				</div>
		</div>
</section>

@endsection
@endsection
