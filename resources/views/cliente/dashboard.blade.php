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
			<h3 class="cr-header-page__title">Dashboard</h3>

			<nav aria-label="breadcrumb" class="cr-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
				</ol>
			</nav>
			<div class="division"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="owl-carousel">
				<a href="#" class="card cr-card__blue">
					<div class="card-body text-center">
						<i class="iconsmind-Letter-Open"></i>
						<p class="card-text">Pedidos de Certidão</p>
						<p class="card-text-2">25</p>
					</div>
				</a>
				<a href="#" class="card cr-card__yellow">
					<div class="card-body text-center">
						<i class="iconsmind-Network"></i>
						<p class="card-text">Protocolo Eletrônico</p>
						<p class="card-text-2">8</p>
					</div>
				</a>
				<a href="#" class="card cr-card__green">
					<div class="card-body text-center">
						<i class="iconsmind-Information"></i>
						<p class="card-text">Intimações de Protesto</p>
						<p class="card-text-2">25</p>
					</div>
				</a>
				<a href="#" class="card cr-card__red">
					<div class="card-body text-center">
						<i class="iconsmind-Support"></i>
						<p class="card-text">Meus Chamados</p>
						<p class="card-text-2">25</p>
					</div>
				</a>
				<a href="#" class="card cr-card__purple">
					<div class="card-body text-center">
						<i class="iconsmind-Mail-Read"></i>
						<p class="card-text">New Comments</p>
						<p class="card-text-2">25</p>
					</div>
				</a>

			</div>
		</div>

		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="card">
				<div class="card-body">
					<h5 class="cr-card__title">Últimos Pedidos</h5>

					<div class="scroll overflow-hidden height-200" data-spy="scroll">
						<table class="table table-sm table-borderless">
							<tbody>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
								<tr>
									<td>
										<i class="iconsmind-Letter-Open"></i>
									</td>
									<td>
										<span class="text-inline">Pedido de Certidão 41256</span>
									</td>
									<td>
										<span class="badge badge-pill badge-primary">Primary</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>  
			</div>
		</div>

	</div>

</div>

@stop