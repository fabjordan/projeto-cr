@extends('site.partials.header')

@section('content')

<section class="contato">
	<div class="container-fluid background-img pb-5">

		<div class="pt-5 mt-6">
			<div class="col-md-6 offset-md-6 col-xs-12 mt-9 pb-5">
				<h2>Contate-nos agora!</h2>
				<h5 class="pb-3">Envie uma dúvida, sugestão, elogio ou reclamação!</h5>
				<form>
					<div class="form-group">
						<input class="form-control" type="text" name="nome" placeholder="Digite seu nome">
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input class="form-control" type="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group col">
							<input class="form-control" type="tel" name="telefone" placeholder="Telefone de contato">
						</div>
					</div>
					<div class="form-group">
						<select class="form-control custom-select">
							<option>Escolha uma opção</option>
							<option>Elogio</option>
							<option>Dúvida</option>
							<option>Sugestão</option>
							<option>Reclamação</option>
							<option>Outros assuntos</option>
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Digite sua mensagem com no mínimo 15 caracteres."></textarea>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>

<section class="suporte pb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center mt-7 pb-5">
				<h1 class="mt-3">Suporte</h1>
				<hr class="w-25"></hr>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="pl-5">
					<span class="lh-1 text-muted">
						Aqui você encontra materiais e informações disponíveis para atender aos requesitos 
						técnicos da central Cartórios Maranhão. Alguns conteúdos aqui abordados terão uma comunicação mais técnica 
						e é imprescindível que isso seja levado até o profissional responsável por esta parte na sua Serventia. 
					</span>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="accordion" id="cr-accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-deafult" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="iconsmind-MaleFemale pr-2"></i> Para o Títular
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#cr-accordion">
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i> Manual Operacional V. 1.0</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-deafult collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="iconsmind-Coding pr-2"></i>Para o desenvolvedor
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#cr-accordion">
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i>
											Manual Técnico de Integração V. 1.3
											<span class="badge badge-primary badge-pill ml-2">Novo</span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i>
											Manual Técnico de Integração V. 1.2
											<span class="badge badge-danger badge-pill ml-2">Modelo Descontinuado</span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i>
											Manual Técnico de Integração V. 1.1
											<span class="badge badge-danger badge-pill ml-2">Modelo Descontinuado</span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i>
											Manual Técnico de Integração V. 1.0
											<span class="badge badge-danger badge-pill ml-2">Modelo Descontinuado</span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#"> <i class="iconsmind-File-Word pr-2"></i>
										Formulário de Solicitação de Acesso a Base de Testes</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

@stop