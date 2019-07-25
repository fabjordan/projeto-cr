@extends('site.partials.header')

@section('content')

<section class="">
	<div class="container intitucional-area pb-5 mt-8">

		<div class="row mt-5 mb-5">
			<!--img src="{{asset('img/logo.png')}}" style="width: 40%; margin: 0 auto;"-->
		</div>

		<div class="col-md-12 col-xs-12">
			<div class="row sec-institucional">
				<div class="col-md-5 col-xs-12 py-5">
					<img class="img-institucional" data-aos-duration="2000" data-aos="fade-right" src="{{asset('img/vetores/logo.png')}}">
				</div>
				<div class="col-md-7 col-xs-12 text-justify py-5 texto-institucional" data-aos-duration="1000" data-aos="zoom-in">
					<p>
						CARTÓRIOS MARANHÃO é a marca da CENTRAL ÚNICA DE SERVIÇOS ELETRÔNICOS COMPARTILHADOS, criada pelo Provimento nº 13/2016 da Corregedoria Geral da Justiça do Maranhão, e mantido pela Associação dos Titulares de Cartórios do Maranhão.<br><br>

						Tem a função de centralizar as informações das Serventias Extrajudiciais do Maranhão, conforme determina o Conselho Nacional de Justiça nos Provimentos nº 46, 47 e 48.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xs-12 text-justify" data-aos-duration="1000" data-aos="zoom-in" style="margin: auto; font-size: 1.15rem;">
					<p>
						Constitui ferramenta destinada a facilitar e modernizar o acesso dos usuários às serventias extrajudiciais maranhenses, mediante a possibilidade de busca de informações, solicitação de certidões, envio e apresentação de documentos (escrituras, instrumentos particulares, e outros documentos gerados eletronicamente).
					</p>
				</div>
				<div  class="col-md-5  d-none d-sm-block py-5" style="">
					<img class="img-institucional" data-aos-duration="2000" data-aos="fade-left" src="{{asset('img/vetores/vetor1.png')}}">
				</div>
			</div>
			<div class="row justify-content-center">
				<div  class="col-md-5 d-none d-sm-block py-5" data-aos-duration="2000" data-aos="fade-right">
					<img class="img-institucional" src="{{asset('img/vetores/computer2.png')}}">
				</div>
				<div class="col-md-7 col-xs-12 text-justify align-middle" data-aos-duration="1000" data-aos="zoom-in" style="font-size: 1.15rem;">
					<p class="">
						A Cartórios Maranhão é responsável por operacionalizar o Sistema de Registro Eletrônico de Imóveis no Estado do Maranhão, previsto pela Lei nº 11.977/2009, que impõe a integração das Serventias de Registro de Imóveis ao universo tecnológico do registro eletrônico. Assim, os usuários poderão apresentar títulos e documentos para registro mediante utilização da Cartórios Maranhão, com a comodidade das ferramentas digitais disponíveis, sem ter que se deslocar fisicamente ao cartório.<br>
						Acreditamos que a Cartórios Maranhão permitirá aos usuários vivenciarem uma experiência totalmente nova, eficiente e segura. Um dos objetivos da unificação das informações registrais e notariais é de revitalizar a imagem dos Cartórios perante a sociedade, buscando acompanhar o que há de mais avançado em tecnologia web, aliando segurança jurídica, segurança digital e comodidade.
					</p>
				</div>
			</div>
			<div class="row text-justify">
				<p data-aos="zoom-in"data-aos-duration="3000" style="font-size: 1.15rem;">

					
				</p>
			</div>
		</div>
	</div>
	<div class="row justify-content-center fotos-institucional">
		<div>
			<img src="{{asset('img/icones/user.png')}}">
			<h4 class="text-center">Exemplo</h4>
		</div>
		<div>
			<img src="{{asset('img/icones/user.png')}}">
			<h4 class="text-center">Exemplo</h4>
		</div>
		<div>
			<img src="{{asset('img/icones/user.png')}}">
			<h4 class="text-center">Exemplo</h4>
		</div>
	</div>
</div>
</section>

@stop