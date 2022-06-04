"use strict";

$(function() {
	var html = `
		<div class="row d-flex justify-content-evenly" id="menu_padrao">
				<nav class="bg_preto">
					<div class="col-4">
<<<<<<< HEAD
						<img src="logo/logo.png" width="150px" height="150px">
=======
						<img src="imagens/logo.png" width="150px" height="150px">
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81

					</div>
					<div class="col-8">
						<nav class="bg_preto">
							<div class="menu-item">
<<<<<<< HEAD
								<a class="branco" href="index.php">Página inicial</a>
=======
								<a class="branco" href="index.html">Página inicial</a>
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
							</div>
							<button type="button" class="modalbtn btn btn-outline">Entrar</button>
						</nav>
					</div>
				</nav>
		</div>
	`;

	$("#html_usuario").html(html);

    $("#logar").click(function() {
<<<<<<< HEAD
		
=======
		//alert("teste");
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
		var email = $("#email_login").val();
		var senha = $("#senha_login").val();
		var dados = {"email_login": email, "senha_login": senha};
		console.log(dados);
		$.post("html/login.php", dados, function(retorno) {
<<<<<<< HEAD
			
			if(retorno.valido) {
				
=======
			//alert("teste");
			if(retorno.valido) {
				//alert("teste");
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
				var html_usuario = `
					<div class="row d-flex justify-content-evenly">
							<nav class="bg_preto">
								<div class="col-4">
<<<<<<< HEAD
									<img src="logo/logo.png" width="150px" height="150px">
=======
									<img src="imagens/logo.png" width="150px" height="150px">
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81

								</div>
								<div class="col-8">
									<nav class="bg_preto">
										<div class="menu-item">
<<<<<<< HEAD
											<a class="branco" href="index.php">Página inicial</a>
=======
											<a class="branco" href="index.html">Página inicial</a>
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
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
