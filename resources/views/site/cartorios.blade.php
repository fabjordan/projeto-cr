@extends('site.partials.header')

@section('content')

<section class="cartorios">
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-6 col-xs-12 img1">
				<img class="img-fluid" src="{{asset('img/vetores/mapa.png')}}">
			</div>			
			<div class="col-md-6 col-xs-12 pt-5 cartorio__descricao">
				<h1>Busca de Cartórios</h1>
				<h5 class="text-dark">Encontre o cartório mais próximo de você realizando uma pesquisa por nome da serventia ou cidade.</h5>
				<form class="form">
					<div class="form-group">
						<input class="form-control col" type="text" name="busca-cartorio" placeholder="Pesquise por nome da serventia ou cidade...">						
					</div>
					<div class="form-group">
						<button class="btn btn-success form-control col" type="submit" class="btn" id="search-btn">Buscar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			
		</div>
		<div class="row mb-5 mt-1">
			<div class="col-md-6 col-xs-12">
				<div class="card text-left">
					<div class="card-body">
						<h3 class="text-primary">1º Oficio de Boa Vista - Cartório Loureiro</h3>
						<h6  class="text-body">Endereço</h6>
						<p class="text-muted">Av. Ville Roy, 5636 - Centro, Boa Vista - RR, 69301-000</p>
						<h6 class="text-body">Contatos</h6>
						<p class="text-muted">Telefone: (95) 3624-3050</p>
						<p class="text-muted">Email:</p>
						<h6 class="text-body">Serviços Oferecidos</h6>
					</div>
				</div>
			</div>	
			<div class="col-md-6 col-xs-12">
				<div class="card text-left">
					<div class="card-body">
						<h3 class="text-primary">Cartório 2º Ofício Daniel Aquino</h3>
						<h6 class="text-body">Endereço</h6>
						<p class="text-muted">Av. Gen. Ataíde Teive, 4307 - Asa Branca, Boa Vista - RR, 69312-244</p>
						<h6 class="text-body">Contatos</h6>
						<p class="text-muted">Telefone: (95) 99112-7683</p>
						<p class="text-muted">Email:</p>
						<h6 class="text-body">Serviços Oferecidos</h6>
					</div>
				</div>
			</div>	
			<div class="col-md-6 col-xs-12">
				<div class="card text-left">
					<div class="card-body">
						<h3 class="text-primary">Cartório Ofício Único de São Luiz</h3>
						<h6 class="text-body">Endereço</h6>
						<p class="text-muted">69370-000, São Luiz - RR</p>
						<h6 class="text-body">Contatos</h6>
						<p class="text-muted">Telefone: (95) 3537-1706</p>
						<p class="text-muted">Email:</p>
						<h6 class="text-body">Serviços Oferecidos</h6>
					</div>
				</div>
			</div>	
			<div class="col-md-6 col-xs-12">
				<div class="card text-left">
					<div class="card-header">
						<h3 class="text-primary">Registro de Imóveis</h3>
						<h6 class="text-body">Endereço</h6>
						<p class="text-muted">Av. Glaycon de Paiva, 252 - Centro, Boa Vista - RR, 69301-250</p>
						<h6 class="text-body">Contatos</h6>
						<p class="text-muted">Telefone: (95) 3224-4874</p>
						<p class="text-muted">Email:</p>
						<h6 class="text-body">Serviços Oferecidos</h6>
					</div>
				</div>
			</div>	
			<div class="col-md-6 col-xs-12">
				<div class="card text-left">
					<div class="card-header">
						<h3 class="text-primary">Cartório Távora</h3>
						<h6 class="text-body">Endereço</h6>
						<p class="text-muted">Endereço: Av. Dr. Zany, Nº2327 - Centro, Caracaraí - RR, 69360-000</p>
						<h6 class="text-body">Contatos</h6>
						<p class="text-muted">Telefone: (95) 3532-2308</p>
						<p class="text-muted">Email:</p>
						<h6 class="text-body">Serviços Oferecidos</h6>
					</div>
				</div>
			</div>	
		</div>		
	</div>
</section>

@stop