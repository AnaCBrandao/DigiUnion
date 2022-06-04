<?php session_start(); ?>
<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigUnion</title>
	<link rel="stylesheet" href="../css1/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/menu.js"></script>
	</head>
<body>
	<div class="col-12">
	<!--CABEÇALHO-->
	<div>
		<div class="row d-flex justify-content-evenly">
							<nav class="bg_preto">
								<div class="col-4">
									<img src="../logo/logo.png" width="150px" height="150px">

								</div>
								<div class="col-8">
									<nav class="bg_preto">
										<div class="menu-item">
											<a class="branco" href="../index.php">Página inicial</a>
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
	</div>
	<!--CADASTRO DE PROJETO-->
	<div class="card position-relative margem start-50 translate-middle mb-5 p-3 shadow-lg col-8
	border border-info justify-content-center">
        <form action="cadastro_projeto.php" method="post" id="cadastro_proj" enctype="multipart/form-data"  >
            <h3 class="text-center mb-5 font-monospace">Descreva o projeto:</h3>
            <div class="input-group mb-3">
                <span class="input-group-text">Título:</span>
                <input type="text" id="titulo" name="titulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Local: </span>
                <input type="text" id="local" name="local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
			<div class="input-group mb-3">
				<select id="categoria" name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example">
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
	<link rel="stylesheet" href="..\css1\bootstrap.min.css">
	<link rel="stylesheet" href="..\css\style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<!--CABEÇALHO-->
	<div class="col-12">
		<div class="row d-flex justify-content-evenly">
			<nav class="navbar navbar-expand-lg float-end bg_preto">
				<div class="col-4">
					<img src="../imagens/logo.png" width="150px" height="150px">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="col-8">
					<div class="collapse navbar-collapse float-end" id="navbarNav">
						<ul class="navbar-nav">
								<li class="nav-item">
									<a class="branco" href="../index.html">Página inicial</a>
								</li>
								<li class="nav-item">
									<a class="branco" href="cadastro_proj.html">Cadastro de projetos</a>
								</li>
							<button type="button" id="entrar" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Entrar</button>
						</ul>
					</div>
				</div>
			</nav>

			<!--MODAL LOGIN-->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="container modal-dialog modal-fullscreen">
				  <div class="modal-header">
					       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>

				  <div class="content first-content">
  					<div class="first-column">
  						<h2 class="title title-primary">Bem-vindo de volta! </h2>
  						<p class="description description-primary">Para se conectar novamente</p>
  						<p class="description description-primary">com a gente, por favor,</p>
  						<p class="description description-primary">preencha os campos de login.</p>
  						<button id="signin" class="btn btn-primary">entrar</button>
  					</div>
  					<div class="second-column">
  						<h2 class="title title-second">Criar conta</h2>
  						<form class="form">
  							<label class="label-input" for="">
  								<i class="far fa-user icon-modify"></i>
  								<input type="text" placeholder="Nome">
  							</label>

  							<label class="label-input" for="">
  								<i class="far fa-envelope icon-modify"></i>
  								<input type="email" placeholder="E-mail">
  							</label>

  							<label class="label-input" for="">
  								<i class="far fa-address-card icon-modify"></i>
  								<input type="text" placeholder="CPF">
  							</label>

  							<label class="label-input" for="">
  								<i class="far fa-calendar icon-modify"></i>
  								<input type="date">
  							</label>

  							<label class="label-input" for="">
  								<i class="fas fa-lock icon-modify"></i>
  								<input type="password" placeholder="Senha">
  							</label>

  							<label class="label-input" for="">
  								<i class="fas fa-lock icon-modify"></i>
  								<input type="password" placeholder="Confirme sua senha">
  							</label>

  							<button class="btn btn-second">cadastrar</button>
  						</form>
  					</div><!-- second column -->
			    </div><!-- first content -->

    			<div class="content second-content">
    				<div class="first-column">
    					<h2 class="title title-primary">Olá, usuário!</h2>
    					<p class="description description-primary">Preencha com seus dados pessoais</p>
    					<p class="description description-primary">e comece essa jornada com a gente.</p>
    					<button id="signup" class="btn btn-primary">cadastrar</button>
    				</div>
    				<div class="second-column">
    					<h2 class="title title-second">Entrar na conta</h2>
    					<form class="form">
    						<label class="label-input" for="">
    							<i class="far fa-envelope icon-modify"></i>
    							<input type="email" placeholder="E-mail">
    						</label>

    						<label class="label-input" for="">
    							<i class="fas fa-lock icon-modify"></i>
    							<input type="password" placeholder="Senha">
    						</label>

    						<a class="password" href="#">Esqueceu sua senha?</a>
    						<button class="btn btn-second">entrar</button>
    					</form>
    				</div><!-- second column -->
    			</div><!-- second-content -->
			</div>
		</div>
	</div>
	</div>


	<!--CADASTRO DE PROJETO-->
	<div class="card position-relative margem start-50 translate-middle mb-5 p-3 shadow-lg col-8
	border border-info justify-content-center">
        <form id="cadastro_proj" action="cadastro_proj.php" method="post">
            <h3 class="text-center mb-5 font-monospace">Descreva o projeto:</h3>
            <div class="input-group mb-3">
                <span class="input-group-text">Título:</span>
                <input type="text" id="titulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Local: </span>
                <input type="text" id="local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
			<div class="input-group mb-3">
				<select id="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example">
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
					<option selected>Em qual categoria se enquadra?</option>
					<option value="1">Educação</option>
					<option value="2">Música</option>
					<option value="3">Teatro</option>
				</select>
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text">Descrição:</span>
<<<<<<< HEAD
				<textarea id="descricao" name="descricao" class="form-control" aria-label="With textarea"></textarea>
		    </div>
			<div class="input-group mb-3">
				<span class="input-group-text">contribuição para a sociedade:</span>
				<textarea id="contribuicao" name="contribuicao" class="form-control" aria-label="With textarea"></textarea>
			</div>
			<div class="inp mx-2 ut-group mb-3">
				<p>Enviar foto de capa:</p>
				<input name="arquivo" type="file" id="arquivo" class="form-control">
			</div>
            <div class="text-center">
				<button type="submit">Enviar</button>
                <!--<button id="cadastrar_proj" class="btn btn-outline-info">Enviar</button><br>-->
=======
				<textarea id="descricao" class="form-control" aria-label="With textarea"></textarea>
		    </div>
			<div class="input-group mb-3">
				<span class="input-group-text">contribuição para a sociedade:</span>
				<textarea id="contribuicao" class="form-control" aria-label="With textarea"></textarea>
			</div>
			<div class="inp mx-2 ut-group mb-3">
				<p>Enviar foto de capa:</p>
				<input type="file" id="foto" class="form-control" id="inputGroupFile02">
			</div>
            <div class="text-center">
                <button id="cadastrar_proj" class="btn btn-outline-info">Enviar</button><br>
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
            </div>
        </form>
    </div>>
	<!--RODAPÉ-->
	<footer class="bg-dark text-light mt-5 static-bottom">
		<div class="container-fluid py-3">
<<<<<<< HEAD
		 	<div class="col-10">
=======
		 	<div class="col-8">
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
				 <h3>Sobre</h3>
				<p>
					Esse projeto foi criado para a conclusão do curso de TI, temos como objetivo ajudar no desenvolvimento de projetos independentes.
				</p>
				<h4> Entre em contato conosco:</h4>
				<h5>digiunionsuporte@gmail.com</h5>
		  	</div>
		</div>
		<div class="text-center" style="background-color: #333; padding: 20px;" >
		  &copy 2022 DigUnion
		</div>
	 </footer>
<<<<<<< HEAD
	 
	<script src="../js/valida_proj.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../js/app.js"></script>
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/jquery.mask.min.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/md5.js"></script>
	<script src="../js/main.js"></script>
	
=======

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
	<script src="../js/valida_proj.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
</body>
</html>
