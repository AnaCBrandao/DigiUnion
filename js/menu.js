"use strict";

$(function() {
	var html = `
		<div class="row d-flex justify-content-evenly" id="menu_padrao">
				<nav class="bg_preto">
					<div class="col-4">
						<img src="imagens/logo.png" width="150px" height="150px">

					</div>
					<div class="col-8">
						<nav class="bg_preto">
							<div class="menu-item">
								<a class="branco" href="index.html">Página inicial</a>
							</div>
							<button type="button" class="modalbtn btn btn-outline">Entrar</button>
						</nav>
					</div>
				</nav>
		</div>
	`;

	$("#html_usuario").html(html);

    $("#logar").click(function() {
		//alert("teste");
		var email = $("#email_login").val();
		var senha = $("#senha_login").val();
		var dados = {"email_login": email, "senha_login": senha};
		console.log(dados);
		$.post("html/login.php", dados, function(retorno) {
			//alert("teste");
			if(retorno.valido) {
				//alert("teste");
				var html_usuario = `
					<div class="row d-flex justify-content-evenly">
							<nav class="bg_preto">
								<div class="col-4">
									<img src="imagens/logo.png" width="150px" height="150px">

								</div>
								<div class="col-8">
									<nav class="bg_preto">
										<div class="menu-item">
											<a class="branco" href="index.html">Página inicial</a>
										</div>
										<div class="menu-item">
											<a class="branco" href="html/cadastro_proj.php">Cadastro de projetos</a>
										</div>
										<div class="menu-item">
											<a class="branco" href="html/projetos.html">Meus projetos</a>
										</div>
										<div class="menu-item">
											<a class="branco" href="html/editar.html">Editar dados pessoais</a>
										</div>
										<a href="html/logout.php" class="branco"><button type="button" class="modalbtn btn btn-outline">Sair</button></a>
									</nav>
								</div>
							</nav>
					</div>
				`;

				$("#html_usuario").html(html_usuario);
            }
            else {
				$("#html_usuario").html(html);
            }
		});
	});
});	
