@extends('site.partials.header')

@section('content')


<section class="emolumentos">
	<div class="container-fluid">
		<div class="row mt-5">

			<div class="col-md-6 col-sm-6 col-xs-12 img1">
				<div class="mt-8 pl-4">
					<img class="img-fluid" src="{{asset('img/vetores/vetor2.png')}}">
				</div>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 emolumentos__descricao">
				<div class="mt-10">
					<h2>Emolumentos</h2>
				</div>
				<div class="mt-2">
					<h5 class="text-muted">Aqui você pode encontrar e pesquisar os valores da Tabela de Custas e Emolumentos atualizada, fornecida pelo Tribunal de Justiça.</h5>
				</div>
				<div class="pr-5 pt-4">
					<form>
						<div class="form-group">
							<input class="form-control" type="text" name="pesquisa" placeholder="Digite sua Busca">
						</div>
						<div class="form-group">
							<select class="form-control custom-select">
								<option>Busca por atribuição</option>
								<option>Registro de Imóveis</option>
								<option>Registro de Título e Documentos</option>
								<option>Tabelionato de Notas</option>
								<option>Registro Civil das Pessoas Naturais</option>
								<option>Registro Civil das Pessoas Juridicas</option>
								<option>Tabelionato de Protesto</option>
								<option>Tabelionato de Registro de Contratos Marítimos</option>
								<option>Registro de Distribuição</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block">Pesquisar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12 text-center mt-6">
			<h3>Tabela de Emolumentos</h3>
		</div>

		<div class="col-md-12">

			<div class="table-responsive pl-5 pr-5">
				<table class="table table-hover text-center mt-5 bg-light">
					<thead>
						<tr>
							<th>Item</th>
							<th>Descrição</th>
							<th>valor</th>
							<th>Taxa Ferc</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>13.1</td>
							<td>Escritura Pública com fornecimento do primeiro traslado (com base no valor do ato):</td>
							<td>0,00</td>
							<td>0,00</td>
						</tr>
						<tr>
							<td>13.1.1</td>
							<td>ATÉ R$ 5.100,00</td>
							<td>103,10</td>
							<td>3,10</td>
						</tr>
						<tr>
							<td>13.1.10</td>
							<td>De R$ 37.937,16 a R$ 47.421,43</td>
							<td>692,50</td>
							<td>20,80</td>
						</tr>
						<tr>
							<td>13.1.13</td>
							<td>De R$ 74.095,99 a R$ 92.619,98</td>
							<td>1.353,10</td>
							<td>40,60</td>
						</tr>
						<tr>
							<td>13.1.14</td>
							<td>De R$ 92.619,99 a R$ 115.774,98</td>
							<td>1.692,90</td>
							<td>50,80</td>
						</tr>
						<tr>
							<td>13.1.15</td>
							<td>De R$ 115.774,99 a R$ 144.718,72</td>
							<td>2.115,40</td>
							<td>63,50</td>
						</tr>
					</tbody>
				</table>
				<div class="col-12 mt-3">
					<nav>
						<ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Próximo</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

@stop