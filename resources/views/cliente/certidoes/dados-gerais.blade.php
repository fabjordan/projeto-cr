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
					<li class="breadcrumb-item" aria-current="page">Certidões</li>
					<li class="breadcrumb-item active" aria-current="page">Dados Gerais</li>
				</ol>
			</nav>
			<div class="division"></div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12 col-xs-12">
			<div class="card card-certidao">
				<div class="card-body">
					<div class="row">

						<div class="col-md-6 col-sm-6 col-xs-12">
							<h5 class="d-inline-block w-50">Pedido N° 123456</h5>
						</div>

						<!-- <div class="col-md-6 col-sm-6 col-xs-12 text-right">
							<span class="cr-badge__blue">
								Entrega via Correios <i class="iconsmind-Bus"></i>
							</span>

							<span class="cr-badge__indigo">
								Documento Digital <i class="iconsmind-File-Cloud"></i>
							</span>

							<span class="cr-badge__purple">
								Balcão de Cartório <i class="iconsmind-Post-Office"></i>
							</span>
						</div> -->

						<hr class="w-100 mt-2 ml-3 mr-3">

						<div class="col-md-4 col-sm-6 col-xs-12">
							<h6>Status</h6>
							<span>Aguardando Calculo de Emolumentos </span>
						</div>

						<div class="col-md-3 col-sm-12 col-xs-12">
							<h6>Tipo de Remessa</h6>
							<span>
								Entrega via Correios
							</span>
						</div>

						<div class="col-md-2 col-sm-6 col-xs-12">
							<h6>Total R$</h6>
							<span>1.000,00</span>
						</div>

						<div class="col-md-3 col-sm-12 col-xs-12">
							<h6>Forma de Pagamento</h6>
							<span> Boleto (Bradesco) </span>
						</div>

						<div class="col-md-12 col-xs-12 mt-3">
							<h6>Observações</h6>
							<span>Carta Registrada de 65300088 (Santa Inês) para 69309-089 (Boa Vista/RR)</span>
						</div>

					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12 col-xs-12 mt-3">
			<div class="card card-certidao">
				<div class="card-body">
					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<h5 class="d-inline-block w-50">Dados da Serventia</h5>
						</div>

						<hr class="w-100 mt-2 ml-3 mr-3">

						<div class="col-md-12 col-sm-12 col-xs-12 pb-3">
							<h6>Denominação</h6>
							<span>Cartório da 2ª Zona de Registro de Imóveis de São Luis</span>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<h6>Telefone</h6>
							<span>(98) 32327-6921 </span>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<h6>Cidade</h6>
							<span> São Luís - MA </span>
						</div>

						<div class="col-md-6 col-sm-12 col-xs-12">
							<h6>Email</h6>
							<span> cartorioimoveisjurandyleite@gmail.com </span>
						</div>

					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12 col-xs-12 mt-3">
			<div class="card card-certidao">
				<div class="card-body">
					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<h5 class="d-inline-block w-50">Ítens do Pedido</h5>
						</div>

						<hr class="w-100 mt-2 ml-3 mr-3">

						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-sm table-borderless">
									<thead>
										<tr>
											<th>Item</th>
											<th>Descrição</th>
											<th class="text-center">Valor</th>
											<th class="text-center">Opções</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Certidão de Inteiro Teor da Matrícula Atualizada</td>
											<td class="text-center">0,00</td>
											<td class="text-center">
												<button class="btn btn-success btn-sm">
													Ver
												</button>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>TAXA ADMINISTRATIVA</td>
											<td class="text-center">15,00</td>
											<td></td>
										</tr>
										<tr>
											<td>3</td>
											<td>FRETE</td>
											<td class="text-center">0,00</td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-xs-12 mt-3">
			<div class="card card-certidao">
				<div class="card-body">
					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<h5 class="d-inline-block w-50">Arquivos</h5>
						</div>

						<hr class="w-100 mt-2 ml-3 mr-3">

						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-sm table-borderless">
									<thead>
										<tr>
											<th>Arquivo</th>
											<th>Download</th>
											<th>Disponível até</th>
											<th>Código de Validação</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-md-12 col-xs-12 mt-5">
							<form action="" class="form-inline">
								<div class="form-group">
									<input type="file" class="form-control">
								</div>
								<div class="form-group ml-2">
									<button type="submit" class="btn btn-success">Enviar</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>

</div>

@stop