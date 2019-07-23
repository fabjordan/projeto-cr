<!-- Modal do Login -->
<div class="modal animated fadeIn" id="login" tabindex="-1" role="dialog" aria-labelledby="ModalDeLogin" aria="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">	
			<div class="header-login"><a href="\cadastro">Cadastro de usuário</a></div>		
			<div class="icon"><img class="img-modal" src="img/logo.png">
			</div>
			<form class="formulario">
				<div class="form-group">
					<input class="form-control input-modal" type="text" name="documento" placeholder="Documento">
				</div>
				<div class="form-group form-senha">
					<input class="form-control input-modal" type="password" name="senha" placeholder="Senha">
					<a  class="link-modal" href="#" data-toggle="modal" data-target="#modal-RecDocumento" data-dismiss="modal">Esqueci a senha</a>
				</div>
				<div class="col-12 botao-modal">				
					<button type="button" class="botao botao-login col-12" href="#">Entrar</button>
				</div>
				<div class=" botao-modal area-cert col-12">
					<button type="button" class="botao botao-login col-12" data-toggle="modal" data-target="#modal-cent" data-dismiss="modal">Certificado Digital</button>
				</div>								
			</form>													
		</div>			
	</div>
</div><!-- fim modal cpf -->

<!-- Modal Certificado Digital -->
<div id="modal-cent" class="modal animated fadeIn" data-dismiss="modal" tabindex="-1" role="dialog" aria-labelledby="ModalCertificado" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="header-login">
				<a href="\cadastro">Cadastro de usuário</a>
			</div>

			<div class="icon"><img class="img-modal" src="img/logo.png">
			</div>
			<form class="formulario">
				<div class="form-group">
					<select class="custom-select form-control input-modal">
						<option>123456789</option>
						<option>123456789</option>
						<option>123456789</option>
					</select>
				</div>
				<div class="form-group">
					<input class="form-control  input-modal" type="password" name="senha" placeholder="Senha">
					<a class="link-modal" href="#" data-toggle="modal" data-target="#modal-RecCerti" data-dismiss="modal">Esqueci a senha</a>
				</div>
				<div class="col-12 botao-modal">				
					<button type="button" class="botao botao-login col-12" href="#">Entrar</button>
				</div>
				<div class="area-cert col-12 botao-modal">
					<button type="button" class="botao botao-login col-12" data-toggle="modal" data-target="#login" data-dismiss="modal">Login com Documento</button>
				</div>
			</form>		
		</div>
	</div>
</div><!-- fim modal certificado digital -->

<!-- Modal recuperação de senha Documento-->
<div class="modal" id="modal-RecDocumento" tabindex="-1" role="dialog" arial-labelledby="ModalSenha" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="header-login">
				<a href="\cadastro">Cadastro de usuário</a>
			</div>

			<div class="icon"><img class="img-modal" src="img/logo.png">
			</div>
			<form class="formulario">
				<div class="form-group">
					<input class="form-control input-modal" type="text" name="documento" placeholder="Numero do documento">				
				</div>
				<div class="col-12 botao-modal">					
					<button type="button" class="botao botao-login col-12" href="#">Recuperar Senha</button>
				</div>
				<div class="area-cert col-12 botao-modal">
					<a href="#" class="col-12" data-toggle="modal" data-target="#login" data-dismiss="modal">Login com Documento</a>
				</div>
				<div class="area-cert col-12 botao-modal">
					<a href="#" class="col-12" data-toggle="modal" data-target="#modal-cent" data-dismiss="modal">Login com Certificado Digital</a>
				</div>							
			</form>		
		</div>
	</div>					
</div>

<!-- Modal recuperação de senha Certificado-->
<div class="modal" id="modal-RecCerti" tabindex="-1" role="dialog" arial-labelledby="ModalSenha" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="header-login">
				<a href="\cadastro">Cadastro de usuário</a>
			</div>
			<div class="icon"><img class="img-modal" src="img/logo.png">
			</div>
			<form class="formulario">
				<div class="form-group">
					<select class="custom-select form-control input-modal">
						<option>123456789</option>
						<option>123456789</option>
						<option>123456789</option>
					</select>				
				</div>
				<div class="col-12 botao-modal">							
					<button type="button" class="botao botao-login col-12" href="#">Recuperar Senha</button>
				</div>
				<div class="area-cert col-12 botao-modal">
					<a href="#" class="col-12" data-toggle="modal" data-target="#login" data-dismiss="modal">Login com Documento</a>
				</div>
				<div class="area-cert col-12 botao-modal">
					<a href="#" class="col-12" data-toggle="modal" data-target="#modal-cent" data-dismiss="modal">Login com Certificado Digital</a>
				</div>							
			</form>		
		</div>
	</div>					
</div>