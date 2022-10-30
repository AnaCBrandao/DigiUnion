 <?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigUnion</title>
	<link rel="stylesheet" href="css1\bootstrap.min.css">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\botaoCurtir.css">
	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Fira+Mono|Montserrat:800'><link rel="stylesheet" href="css\style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/menu.js"></script>
	</head>
<body>
	<div class="col-12">
	<!--CABEÇALHO-->
	<div> 
		<div class=" row d-flex justify-content-evenly ">
			<nav>
				<div class="col-4">
					<img src="logo/logo.png" width="150px" height="150px" alt="Logo Digiunion">
				</div>
				<div class="col-8">
					<nav class="bg_preto">
						<div class="menu-item">
							<a class="branco" href="index.php">Página inicial</a>
						</div>
						<?php
							require "html/menu.php";
						
							if(!empty($_SESSION)){
								$html = printarMenu(true);
								$html = $html.('<a href="html/logout.php" class="branco"><button type="button" class="modalbtn btn btn-outline">Sair</button></a> </nav>
											</div>
								</div>');
							}else{
								$html = printarMenu(false);
							}
							
							echo $html;
						?>
					</nav>
				</div>
		</div>
		
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="min-height: 50em;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 5"></button>
</div>
  <div class="carousel-inner margem-carrossel">
  <?php
		require "html/conexao.php";
		$sql = "SELECT id, titulo, descricao, capa, likes FROM `projetos` order by likes desc";

		$resultado = mysqli_query($conexao, $sql);
		$linhas = mysqli_num_rows($resultado);

		for($i=1; $i<=5; $i++){
		  $projeto = mysqli_fetch_assoc($resultado);
		  $capa = $projeto["capa"];
		  $titulo = $projeto["titulo"];
			
		  if($i<= $linhas){
		    if($i==1){
				echo '
				<div class="carousel-item active center">
					<img src="'.$capa.'" class="d-block w-100" alt="'.$titulo.'">
					<div class="carousel-caption d-none d-md-block">
						<h5>'.$titulo.'</h5>
					</div>
				</div>';
			}else{
				echo '
				<div class="carousel-item">
					<img src="'.$capa.'" class="d-block w-100" alt="'.$titulo.'">
					<div class="carousel-caption d-none d-md-block">
						<h5>'.$titulo.'</h5>
					</div>
				</div>';
			}
		  }else{
			break;
		  }
			
		}
		mysqli_free_result($resultado);
		mysqli_close($conexao);
	?>
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

  <!--MODAL LOGIN-->
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
							<button class="btn btn-second" id="logar" type="button">entrar</button>
						</form>
					</div><!-- second column -->
			</div><!-- second-content -->
		</div>
	</div>
	</div>

	<!--FILTRO-->
	<div id="projfil">
		<form action="html/filtro.php" class="row justify-content-center mt-5">
			<div class="form-floating col-8">
			<?php
			
				require "html/conexao.php";
				
				$sql_categoria = "SELECT * FROM `categorias`";
				
				$resultado = mysqli_query($conexao, $sql_categoria);
				$linhas = mysqli_num_rows($resultado);

			
				echo '<select class="form-select mt-5" id="categoria" >
						<option value="" selected disabled hidden>Filtrar por categoria</option>
				';
				if($linhas != 0) {
					
						for($i=1; $i<=$linhas; $i++){
						$categorias = mysqli_fetch_assoc($resultado);
						$id_cat =  $categorias["id_cat"];
						$nome = $categorias["nome"];
						echo '<option value="'.$id_cat.'">'.$nome.'</option>
								
								';
						}
						echo '</select>
						</div>
					</form>';

			}else {
				echo "Sem categorias";
			} 
		
			mysqli_free_result($resultado);
			mysqli_close($conexao);
		
		?>
		
		
		  
	<div id="projetos" class="row">
	<!--PROJETOS-->
	<?php
		require "html/conexao.php";

		$sql = "SELECT id, titulo, descricao, capa, likes FROM `projetos`";

		$resultado = mysqli_query($conexao, $sql);
		$linhas = mysqli_num_rows($resultado);

		echo '<div class="my-4 row mx-4" id="proj">';

		if($linhas != 0) {

			for($i=1; $i<=$linhas; $i++){
			  $projetos = mysqli_fetch_assoc($resultado);
			  $id =  $projetos["id"];
			  $capa = $projetos["capa"];
			  $titulo = $projetos["titulo"];
			  $descricao = $projetos["descricao"];
			  $curtidas = $projetos["likes"];

				 echo '
					
						<div class="card col-3 mx-2 mb-4" style="max-width: 20rem;">
						  <img src="'.$capa.'" class="card-img-top mt-2" alt="Imagem do projeto">
						  <div class="card-body">
							<h5 class="card-title">'.$titulo.'</h5>
								<form action="html/ex_proj.php" method="post">
									 <input type="hidden"  name="codigo" value="'.$id.'"/>
										<div class="curtir position-absolute top-0 end-0 me-4 mt-4">
											<div class="elemento__botao__interno">
												<img src="./imagens/ic-curtiu.png" alt="Imagem polegar curtiu" class="icone-curtir" onClick=botaoCurtir('.$id.')>
											</div>
											<p class="mt-2 ms-2 p_branco" id="'.$id.'">'.$curtidas.'</p>
										</div>
									 <input type="submit" class="btn btn-primary position-relative bottom-0 start-50 translate-middle" style="max-width: 7rem;" value="Visitar"/>	
								</form>
						  </div>
						</div>
					
				 ';

				  if(($i%6)==0){
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
	</div>
	</div>

	<!--RODAPÉ-->
	<footer class="bg-dark text-light mt-5 static-bottom">
		<div class="container-fluid py-3 d-flex">
		 	<div class="col-8 text-center">
				<p><b>Entre em contato conosco:</b></p>
				<p>digiunionsuporte@gmail.com</p>
		  	</div>
			<div class="col-2 text-center">
				<img src="imagens/instagram.png" width="25px" height="25px" alt="Logo instagram">
				<img src="imagens/facebook.png" width="25px" height="25px" alt="Logo facebook">
				<img src="imagens/linkedin.png" width="25px" height="25px" alt="Logo linkedin">
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
	<script src="js/script.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/md5.js"></script>
	<script src="js/main.js"></script>
	<noscript>
        Seu navegador não suporta código em JavaScript
    </noscript>
</body>
</html>