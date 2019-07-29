@extends('site.partials.header')

@section('content')

<section>
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="{{ asset('img/site/ilustracao/certidoes.png') }}" class="d-block w-100" alt="Certdiões Online">
				<div class="col-md-6 col-xs-12 top-30 ml-8 text-slide">
					<h1 data-aos="fade-right" data-aos-duration="1500">Certidão Online</h1>
					<p class="lh-2 mt-4" data-aos="fade-up" data-aos-duration="1500">Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="{{ asset('img/site/ilustracao/certidoes.png') }}" class="d-block w-100" alt="...">
				<div class="col-md-6 col-xs-12 top-30 ml-8 text-slide">
					<h1>Protocolo Eletrônico</h1>
					<p class="lh-2 mt-4">Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="{{ asset('img/site/ilustracao/certidoes.png') }}" class="d-block w-100" alt="...">
				<div class="col-md-6 col-xs-12 top-30 ml-8 text-slide">
					<h1>Intimações de Protesto</h1>
					<p class="lh-2 mt-4">Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional</p>
				</div>
			</div>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

<section>
	
	<div class="row background-white pt-10">
		
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="ml-8 mt-3 p-3">
				<h1 data-aos="fade-down" data-aos-duration="1500">Certidões Online</h1>
				<div data-aos="fade-right" data-aos-duration="1500" class="mt-4 pr-5">
					<span class="text-muted lh-2">
						Position an element at the top of the viewport, from edge to edge. 
						Be sure you understand the ramifications of fixed position in your project.
						You may need to add additional.
					</span>
				</div>
				<div class="mt-3 img1"  data-aos="fade-up" data-aos-duration="1500">
					<button class="btn btn-primary">Saber mais...</button>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div data-aos="fade-left" data-aos-duration="2000" class="ml-4">
				<img class="img-fluid" src="{{ asset('img/site/ilustracao/documento2.png') }}" alt="Certidão Online" width="550">
			</div>
		</div>

	</div>

	<div class="row background-white pt-8">

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div data-aos="fade-right" data-aos-duration="1500" class="ml-6 pl-5 p-2">
				<img class="img-fluid" src="{{ asset('img/site/ilustracao/imoveis1.png') }}" alt="Certidão Online" width="380">
			</div>
		</div>
		
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="ml-5 pt-5">
				<h1 data-aos="fade-down" data-aos-duration="1500">Busca de Imóveis</h1>
				<div class="mt-4 pr-9" data-aos="fade-left" data-aos-duration="1500">
					<span class="text-muted lh-2">
						Position an element at the top of the viewport, from edge to edge. 
						Be sure you understand the ramifications of fixed position in your project.
						You may need to add additional.
					</span>
				</div>
				<div class="mt-3" data-aos="fade-up" data-aos-duration="1500">
					<button class="btn btn-primary">Saber mais...</button>
				</div>
			</div>
		</div>

	</div>

	<div class="row background-white pt-8 pb-5">
		
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="ml-5 p-5">
				<h1 data-aos="fade-down" data-aos-duration="1500">Intimações de Protesto</h1>
				<div class="mt-4 pr-5" data-aos="fade-right" data-aos-duration="1500">
					<span class="text-muted lh-2">
						Position an element at the top of the viewport, from edge to edge. 
						Be sure you understand the ramifications of fixed position in your project.
						You may need to add additional.
					</span>
				</div>
				<div class="mt-3" data-aos="fade-up" data-aos-duration="1500">
					<button class="btn btn-primary">Saber mais...</button>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="ml-5 p-2" data-aos="fade-up" data-aos-duration="1500">
				<img class="img-fluid" src="{{ asset('img/site/ilustracao/protesto.png') }}" alt="Certidão Online" width="400">
			</div>
		</div>

	</div>


</section>


<section class="noticias pt-5 pb-5">
	
	<div class="row">
		<div class="container" data-aos="fade-right" data-aos-duration="3000" >

			<div class="pt-3 text-center">
				<h1>Últimas Notícias</h1>
				<hr class="w-25">
			</div>
			<div class="owl-carousel">
				<div class="card">
					<div class="card-body">
						<img class="img-fluid" src="{{ asset('img/site/noticias/not1.jpg') }}" alt="" width="100" height="220">
						<div class="mt-2">
							<h4 class="text-primary">Noticia 1</h4>
							<span class="text-muted">
								Position an element at the top of the viewport, from edge to edge. 
								Be sure you understand the ramifications of fixed position in your project.
								You may need to add additionals
							</span>
						</div>
						<div class="mt-2 mr-1 text-right">
							<button class="btn btn-dark btn-sm">Saber mais...</button>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<img class="img-fluid" src="{{ asset('img/site/noticias/not2.jpeg') }}" alt="" width="100" height="220">
						<div class="mt-2">
							<h4 class="text-primary">Noticia 2</h4>
							<span class="text-muted">
								Position an element at the top of the viewport, from edge to edge. 
								Be sure you understand the ramifications of fixed position in your project.
								You may need to add additionals
							</span>
							<div class="mt-2 mr-1 text-right">
								<button class="btn btn-dark btn-sm">Saber mais...</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<img class="img-fluid" src="{{ asset('img/site/noticias/not3.jpg') }}" alt="" width="100" height="220">
						<div class="mt-2">
							<h4 class="text-primary">Noticia 3</h4>
							<span class="text-muted">
								Position an element at the top of the viewport, from edge to edge. 
								Be sure you understand the ramifications of fixed position in your project.
								You may need to add additionals
							</span>
							<div class="mt-2 mr-1 text-right">
								<button class="btn btn-dark btn-sm">Saber mais...</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@section('script')
<script>

	$(document).ready(function () {

		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:3,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2,
					nav:false
				},
				1000:{
					items:3,
					nav:true,
					loop:false
				}
			}
		});
		$('.play').on('click',function(){
			owl.trigger('play.owl.autoplay',[3000])
		})
		$('.stop').on('click',function(){
			owl.trigger('stop.owl.autoplay')
		})

	});
</script>
@endsection

@stop