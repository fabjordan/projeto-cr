@extends('base.master')

@section('head')
@endsection

@section('js-init')
@endsection

@section('js')
@endsection

@section('content')

<div class="container-fluid">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 cr-header-page">
			<h3 class="cr-header-page__title">Certidões</h3>

			<nav aria-label="breadcrumb" class="cr-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Certidões</li>
				</ol>
			</nav>
			<div class="division"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">

			<div class="card card-certidao">
				<div class="card-body">
					<div class="row align-items-center">

						<div class="col-md-6 col-sm-6 col-xs-12">
							<h5 class="d-inline-block w-50">Pedido N° 123456</h5>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 text-right">
							<span class="cr-badge__blue">
								Entrega via Correios <i class="iconsmind-Bus"></i>
							</span>

							<span class="cr-badge__indigo">
								Documento Digital <i class="iconsmind-File-Cloud"></i>
							</span>

							<span class="cr-badge__purple">
								Balcão de Cartório <i class="iconsmind-Post-Office"></i>
							</span>
						</div>

						<hr class="w-100 mt-2 ml-3 mr-3">

						<div class="col-md-5 col-sm-12 col-xs-12">
							<h6>Serventia</h6>
							<span>Central Única de Serviços Eletrônicos Compartilhados</span>
						</div>

						<div class="col-md-2 col-sm-6 col-xs-12">
							<h6>Valor R$</h6>
							<span>8.0000,00</span>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<h6>Status</h6>
							<span>Aguardando Calculo de Emolumentos </span>
						</div>

						<div class="col-md-1 col-sm-12 col-xs-12">
							<a href="{{ route('cliente.certidoes.dados-gerais') }}" title="Acessar" class="btn btn-primary btn-xs">
								<i class="iconsmind-Arrow-RightinCircle"></i>
							</a>
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>

</div>

@stop