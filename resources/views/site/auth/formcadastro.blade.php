<div class="container-fluid">
	<div class="row mt-8 mb-3 justify-content-center cadastro">	
		<div class="col-md-4 col-sm-12 col-xs-12 img1 text-center">
			<img class="img-fluid" src="{{asset('img/vetores/registration.png')}}">
		</div>	
		<div class="mt-8 col-md-5 col-sm-12 col-xs-12 cadastro__descricao">
			<div class="text-left">
				<p>Realize seu cadastro e comece á utilizar todos os serviços disponibilizados pela Cartorios Roraima.<br>
				Antes de confirmar seu cadastro verifique todos os dados, leia termos de condições e uso e marque o aceite no fim do texto. </p>
			</div>
			<h3 class="text-center mt-4">Escolha o tipo de Cadastro que deseja efetuar</h3>
			<ul class="nav nav-tabs col-12 justify-content-center" id="formCadastro" role="tablist">
				<li class="nav-item col-6">
					<a class="nav-link bg-success text-white text-center" id="fisica-tab" data-toggle="tab" href="#fisica" role="tab" aria-controls="fisica" aria-selected="true">Pessoa Fisica</a>
				</li>
				<li class="nav-item col-6">
					<a class="nav-link bg-success text-white text-center" id="juridica-tab" data-toggle="tab" href="#juridica" role="tab" aria-controls="juridica" aria-selected="false">Pessoa Juridica</a>
				</li>	
			</ul>
		</div>
	</div>		
</div>	
<div  class="container-fluid container-cadastro">			
	<div class="tab-content" id="camposform">
		<div class="tab-pane show active" id="fisica" role="tabpanel" aria-labelledby="fisica-tab">
			<form>
				<div class="row col-12">			
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Dados Pessoais</h1>
								<hr>
							</div>
							<div class="card-body mt-0">
								<div class="form-row">
									<div class="col-md-12 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">Nome Completo</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">CPF</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">RG</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">								
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<select class=" light__input" name="sexo" id="logradouro">
												<option selected>Sexo...</option>
												<option>Masculino</option>
												<option>Feminino</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="date">
											<span class="light__label"></span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Celular</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Fixo</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Email Principal</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Email Alternativo</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Dados de Navegação</h1>
								<hr>
							</div>
							<div class="row card-body">
								<div class="col-4 foto-cadastro">
									<img id="foto" src="{{asset('img/icones/user.png')}}">
								</div>
								<div class="col-md-8 col-xs-12">							
									<div class="col">
										<div class="light__group">
											<input class="light__input" type="password">
											<span class="light__label">Senha</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col">
										<div class="light__group">
											<input class="light__input" type="password">
											<span class="light__label">Confirmar Senha</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="col-8 mt-5 custom-file mx-auto">
									<input id="foto" class="custom-file-input form-control" type="file" name="foto" onchange="readURL(this);">
									<label class="custom-file-label" for="foto">Escolher foto...</label>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="row col-md-12">			
					<div class="col-md-12">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Endereço</h1>
								<hr>
							</div>
							<div class="card-body">
								<div class="form-row">							
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Cep</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<select class="light__input" name="uf" id="uf">
												<option value="AC" selected>UF</option>
												<option value="AC">AC</option>
												<option value="AL">AL</option>
												<option value="AP">AP</option>
												<option value="AM">AM</option>
												<option value="BA">BA</option>
												<option value="CE">CE</option>
												<option value="DF">DF</option>
												<option value="ES">ES</option>
												<option value="GO">GO</option>
												<option value="MA">MA</option>
												<option value="MT">MT</option>
												<option value="MS">MS</option>
												<option value="MG">MG</option>
												<option value="PA">PA</option>
												<option value="PB">PB</option>
												<option value="PE">PE</option>
												<option value="PR">PR</option>
												<option value="PI">PI</option>
												<option value="RJ">RJ</option>
												<option value="RN">RN</option>
												<option value="RS">RS</option>
												<option value="RO">RO</option>
												<option value="PR">RR</option>
												<option value="SC">SC</option>
												<option value="SP">SP</option>
												<option value="SE">SE</option>
												<option value="TO">TO</option>
											</select>
										</div>
									</div>	
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">Cidade</span>
											<span class="light__border"></span>
										</div>
									</div>		
								</div>

								<div class="form-row">
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<select class="light__input" name="logradouro" id="logradouro">
												<option selected>Logradouro</option>
												<option>Rua</option>
												<option>Avenida</option>
												<option>Alameda</option>
												<option>Loteamento</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Numero</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="tel">
											<span class="light__label">Endereço</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>

								<div class="form-row">

									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Bairro</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Complemento</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">

						<div class="card">							
							<div class="card-body">	
								<div class="col-12">
									@include('site.auth.termos')
								</div>							
								<div class="form-check text-left col-6">
									<input class="form-check-input" type="checkbox" name="aceito" value="">
									<label class="form-check-label">Li e aceito os termos e condições de uso do Sistema Cartórios Maranhão.</label>
								</div>
								<div class="text-right col-12">
									<button class="col-4 btn btn-success btn-lg mt-0" type="submit">Gravar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="tab-pane" id="juridica" role="tabpanel" aria-labelledby="juridica-tab">
			<form>
				<div class="row col-12">			
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Dados da Empresa</h1>
								<hr>
							</div>
							<div class="card-body mt-0">
								<div class="form-row">
									<div class="col-md-12 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">Razão Social</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">CNPJ</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">Inscrição estadual</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>					
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Celular</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Fixo</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Email Principal</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Email Alternativo</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Dados de Navegação</h1>
								<hr>
							</div>
							<div class="row card-body">
								<div class="col-4 foto-cadastro">
									<img id="foto-Juri" src="{{asset('img/icones/user.png')}}">
								</div>
								<div class="col-md-8 col-xs-12">							
									<div class="col">
										<div class="light__group">
											<input class="light__input" type="password">
											<span class="light__label">Senha</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col">
										<div class="light__group">
											<input class="light__input" type="password">
											<span class="light__label">Confirmar Senha</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
								<div class="col-8 mt-5 custom-file mx-auto">
									<input id="foto" class="custom-file-input" type="file" placeholder="Nome Completo" name="foto" onchange="readURL2(this);">
									<label class="custom-file-label">Escolher foto...</label>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="row col-md-12">			
					<div class="col-md-12">
						<div class="card">
							<div class="col-md-12 mt-2">
								<h1>Endereço</h1>
								<hr>
							</div>
							<div class="card-body">
								<div class="form-row">							
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="tel">
											<span class="light__label">Cep</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<select class="light__input" name="uf" id="uf">
												<option value="AC" selected>UF</option>
												<option value="AC">AC</option>
												<option value="AL">AL</option>
												<option value="AP">AP</option>
												<option value="AM">AM</option>
												<option value="BA">BA</option>
												<option value="CE">CE</option>
												<option value="DF">DF</option>
												<option value="ES">ES</option>
												<option value="GO">GO</option>
												<option value="MA">MA</option>
												<option value="MT">MT</option>
												<option value="MS">MS</option>
												<option value="MG">MG</option>
												<option value="PA">PA</option>
												<option value="PB">PB</option>
												<option value="PE">PE</option>
												<option value="PR">PR</option>
												<option value="PI">PI</option>
												<option value="RJ">RJ</option>
												<option value="RN">RN</option>
												<option value="RS">RS</option>
												<option value="RO">RO</option>
												<option value="PR">RR</option>
												<option value="SC">SC</option>
												<option value="SP">SP</option>
												<option value="SE">SE</option>
												<option value="TO">TO</option>
											</select>
										</div>
									</div>	
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="light__input" type="text">
											<span class="light__label">Cidade</span>
											<span class="light__border"></span>
										</div>
									</div>		
								</div>

								<div class="form-row">
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<select class="light__input" name="logradouro" id="logradouro">
												<option selected>Logradouro</option>
												<option>Rua</option>
												<option>Avenida</option>
												<option>Alameda</option>
												<option>Loteamento</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Numero</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="tel">
											<span class="light__label">Endereço</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>

								<div class="form-row">

									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Bairro</span>
											<span class="light__border"></span>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="light__group">
											<input class="form-control light__input" type="text">
											<span class="light__label">Complemento</span>
											<span class="light__border"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">								
								<div class="col-12">
									@include('site.auth.termos')
								</div>							
								<div class="form-check text-right col-6">
									<input class="form-check-input" type="checkbox" name="aceito" value="">
									<label class="form-check-label text-left">Li e aceito os termos e condições de uso do Sistema Cartórios Maranhão.</label>
								</div>
								<div class="text-right col-12">
									<button class="col-4 btn btn-success btn-lg mt-0" type="submit">Gravar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>					
</div>
</div>