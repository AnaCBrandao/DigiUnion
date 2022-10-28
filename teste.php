
<?php  session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigUnion</title>
	<link rel="stylesheet" href="css1\bootstrap.min.css">
	<link rel="stylesheet" href="css\style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/menu.js"></script>
	</head>
<body>
	<div class="col-12">
	<!--CABEÇALHO-->
	<div id="html_usuario">
		
		?>
	</div>

	<!--MODAL LOGIN-->

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
							<button class="btn btn-second" id="logar" type="button">entrar</button>
						</form>
					</div><!-- second column -->
			</div><!-- second-content -->
		</div>
	

	<!--CARROSSEL-->
	<div id="carouselExampleCaptions" class="shadow-lg slide " style="max-height: 50rem;" " data-bs-ride="carousel">
	  <div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="logo/capa1.jpg" class="d-block w-100" style="max-height: 50rem;" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Projeto X</h5>
			<p>Subtitulo</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="logo/capa2.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Projeto Y</h5>
			<p>Subtitulo</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="logo/capa3.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Projeto Z</h5>
			<p>Subtitulo</p>
		  </div>
		</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>

	<!--FILTRO-->
	<form class="row justify-content-center mt-5">
		<div class="form-floating col-8">
		  <select class="form-select" id="floatingSelect" aria-label="  Filtrar por categoria">
			<option selected>Educação</option>
			<option value="1">Musica</option>
			<option value="2">Teatro</option>
		  </select>
		  <label for="floatingSelect">  Filtrar por categoria</label>
		</div>
	</form>

	<!--PROJETOS-->
	<?php
		require "html/conexao.php";

		$sql = "SELECT titulo, descricao, capa FROM `projetos`";

		$resultado = mysqli_query($conexao, $sql);
		$linhas = mysqli_num_rows($resultado);

		echo '<div class="my-4 mx-4 row">';

		if($linhas != 0) {

			for($i=1; $i<=$linhas; $i++){
			  $projetos = mysqli_fetch_assoc($resultado);

			  $capa = $projetos["capa"];
			  $titulo = $projetos["titulo"];
			  $descricao = $projetos["descricao"];

				 echo '
					<div class="card mx-2 col" style="max-width: 26rem;">
					  <img src="'.$capa.'" class="card-img-top" alt="Imagem do projeto">
					  <div class="card-body">
						<h5 class="card-title">'.$titulo.'</h5>
						<p class="card-text">'.$descricao.'</p>
						<a href="html/ex_proj.html" class="btn btn-primary">Saiba mais</a>
					  </div>
					</div>
				 ';

				  if(($i%4)==0){
					echo '</div>';
					echo '<div class="my-4 mx-4 row">';
				  }else if($i == $linhas){
					echo '</div>';
				  }
			}

		} else {
			echo "Nenhum projeto cadastrado";
		}


		mysqli_free_result($resultado);
		mysqli_close($conexao);
	?>

	<!--RODAPÉ-->
	<footer class="bg-dark text-light mt-5 static-bottom">
		<div class="container-fluid py-3">
		 	<div class="col-12">
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


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/md5.js"></script>
	<script src="js/main.js"></script>
	<noscript>
        Seu navegador não suporta código em JavaScript
    </noscript>
</body>
</html>
