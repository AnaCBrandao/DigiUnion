<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto X</title>
	<link rel="stylesheet" href="..\css1\bootstrap.min.css">
	<link rel="stylesheet" href="..\css\style.css">
	<link rel="stylesheet" href="../css/botaoCurtir.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/menu.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/super-build/ckeditor.js"></script>
	
	
</head>
<body>
	<div class="col-12">
	<!--CABEÇALHO-->
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
		<?php
		
			if(!empty($_SESSION)){
				echo '
													<div class="menu-item">
														<a class="branco" href="cadastro_proj.php">Cadastro de projetos</a>
													</div>
													<div class="menu-item">
														<a class="branco" href="minharea.php">Minha área</a>
													</div>
													<div>
														<a href="logout.php" class="branco"><button type="button" class="modalbtn btn btn-outline">Sair</button></a>
													</div>';
			  }else{
				echo '<button type="button" class="modalbtn btn btn-outline">Entrar</button>';
			  }
			
		?>
				</nav>
			</div>
			</nav>
		</div>
	</div>
	
	<!--MODALLLL-->
	<div class="modal">
		<div id="f1" class="modal-content animate">
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
					<form class="form" id="cadastrar" action="html/cadastro.php" method="post">
						<label class="label-input" for="">
							<i class="far fa-user icon-modify"></i>
							<input type="text" placeholder="Nome" name="nome" id="nome">
						</label>
						<label class="label-input" for="">
							<i class="far fa-envelope icon-modify"></i>
							<input type="email" placeholder="E-mail" name="email" id="email">
						</label>
						<label class="label-input" for="">
							<i class="far fa-address-card icon-modify"></i>
							<input type="text" placeholder="CPF" name="cpf" id="cpf">
						</label>
						<label class="label-input" for="">
							<i class="far fa-calendar icon-modify"></i>
							<input type="date" name="datanasc" id="datanasc">
						</label>
						<label class="label-input" for="">
							<i class="fas fa-lock icon-modify"></i>
							<input type="password" placeholder="Senha" name="senha" id="senha">
						</label>
						<label class="label-input" for="" id="label_final">
							<i class="fas fa-lock icon-modify"></i>
							<input type="password" placeholder="Confirme sua senha" name="confirme" id="confirme">
							<span id="erro_senha" class="erro" hidden>Senhas não coincidem</span>
						</label>
						<button class="btn btn-second" id="cadastro" type="button">cadastrar</button>
					</form>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="opcao">
						<label class="form-check-label" for="opcao">
						Exibir senhas
						</label>
					</div>
				</div><!-- second column -->
				</div><!-- first content -->
				<div class="content second-content">
					<div class="first-column">
						<h2 class="title title-primary">Olá, usuário!</h2>
						<p class="description description-primary">Preencha com seus dados pessoais</p>
						<p class="description description-primary">e comece essa jornada com a gente.</p>
						<button id="signup" class="btn btn-primary">cadastrar</button>
					</div>
					<div class="second-column" id="login">
						<h2 class="title title-second">Entrar na conta</h2>
						<form class="form" id="login" action="html/login.php" method="post">
							<label class="label-input" for="">
								<i class="far fa-envelope icon-modify"></i>
								<input type="email" placeholder="E-mail" name="email_login" id="email_login">
							</label>
							<label class="label-input" for="">
								<i class="fas fa-lock icon-modify"></i>
								<input type="password" placeholder="Senha" name="senha_login" id="senha_login">
							</label>
							<a class="password" href="#">Esqueceu sua senha?</a>
							<button class="btn btn-second" id="logar2" type="button">entrar</button>
						</form>
					</div><!-- second column -->
			</div><!-- second-content -->
		</div>
	</div>
	
	<div class="odio">
	<div>
		<div class="card mb-3 position-relative top-100 start-50 translate-middle col-10">
		  <div class="row g-0">
			  	<?php
					require "conexao.php";
					
					$id = $_POST["codigo"];
					$sql = "SELECT id, titulo, descricao, local, capa, likes FROM `projetos` WHERE id=$id";

					$resultado = mysqli_query($conexao, $sql);

					$projeto = mysqli_fetch_assoc($resultado);
					
					$titulo = $projeto["titulo"];
					$descricao = $projeto["descricao"];
					$local = $projeto["local"];
					$capa = $projeto["capa"];
					$curtidas = $projeto["likes"];

							 echo '
							 <div class="col-md-4 my-4 ms-3">
								  <img src="../'.$capa.'" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="curtir position-relative top-0 end-0 ms-4 mt-4">
									<div class="elemento__botao__interno">
										<img src="../imagens/ic-curtiu.png" alt="Imagem polegar curtiu" class="icone-curtir" onClick=botaoCurtirAlt('.$id.')>
									</div>
									<p class="p_preto mt-2 ms-2" id="'.$id.'">'.$curtidas.'</p>
								</div>
								<div class="col-md-6 ms-5">
								  <div class="card-body text-center ms-5">
								<h2 class="card-title mb-2">'.$titulo.'</h2>
								<p class="card-text">'.$descricao.'</p>
								<p class="card-text"><small class="text-muted">'.$local.'</small></p>
							 ';
					mysqli_free_result($resultado);
					mysqli_close($conexao);
				?>
			  
				<button type="button" class="btn btn-success">Apoiar este projeto</button>
				<button type="button" class="btn btn-outline-secondary">Mensagem</button>

			  </div>
			</div>
		  </div>
		</div>
	</div>
	
	<div class="card margem30 text-center position-relative top-100 start-50 translate-middle col-10">
	  <div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
		  <li class="nav-item">
			<a class="nav-link active" aria-current="true" href="#" id="aloha">Descrição completa</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#" id="resul">Resultados</a>
		  </li>
		</ul>
	  </div>
	 
	  <div class="card-body" id="cont2">
		<?php
		
					require "conexao.php";
					
					$id = $_POST["codigo"];
					$sql = "SELECT id, titulo, descricao, contribuicao FROM `projetos` WHERE id=$id";

					$resultado = mysqli_query($conexao, $sql);

					$projeto = mysqli_fetch_assoc($resultado);
					
					$titulo = $projeto["titulo"];
					$descricao = $projeto["descricao"];
					$contribuicao = $projeto["contribuicao"];

							 echo '<div id="cont">
							 <h5 class="card-title">'.$titulo.'</h5>
							<p class="card-text"><b>DESCRIÇÃO DO PROJETO: </b>'.$descricao.'</p><br/>
							<p class="card-text"><b>CONTRIBUIÇÃO PARA A SOCIEDADE: </b>'.$contribuicao.'</p>
							<a href="#" class="btn btn-primary">Ver no site</a>
							<input type="hidden"  name="codigo" value="'.$id.'"/>
							</div>';
					mysqli_free_result($resultado);
					mysqli_close($conexao);
		?>

	  </div>
	  
	  
	</div>
	
	</div>

	<!--RODAPÉ-->
	<footer class="text-light mt-5 position-relative top-100 start-0 ">
		<div class="container-fluid py-3 d-flex">
		 	<div class="col-8 text-center">
				<p><b>Entre em contato conosco:</b></p>
				<p>digiunionsuporte@gmail.com</p>
		  	</div>
			<div class="col-2 text-center">
				<img src="../imagens/instagram.png" width="25px" height="25px" alt="Logo instagram">
				<img src="../imagens/facebook.png" width="25px" height="25px" alt="Logo facebook">
				<img src="../imagens/linkedin.png" width="25px" height="25px" alt="Logo linkedin">
		  	</div>
		</div>

		<div class="text-center" style="background-color: #333; padding: 20px;" >
		  &copy 2022 DigUnion
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../js/app.js"></script>
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/jquery.mask.min.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/md5.js"></script>
	<script src="../js/main.js"></script>
	<noscript>
        Seu navegador não suporta código em JavaScript
    </noscript>
</body>
</html>