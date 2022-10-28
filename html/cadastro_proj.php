<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigUnion</title>
	<link rel="stylesheet" href="../css1/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Fira+Mono|Montserrat:800'><link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/menu.js"></script>
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
			require "menu.php";
		
			if(!empty($_SESSION)){
				$html = printarMenu(true);
				$html = $html.('<a href="logout.php" class="branco"><button type="button" class="modalbtn btn btn-outline">Sair</button></a>		</div>
								</div>');
			}else{
				header("location: erro.html");
			}
			
			echo $html;
		?>
					</nav>
			</nav>
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
				
				<select class="form-select" id="floatingSelect" name="categoria">
				<option disabled selected>Escolha uma categoria</option>
					<?php
						
						require "conexao.php";
						echo '<script>console.log("teste")</script>';
						
						$sql_categoria = "SELECT * FROM `categorias`";
						
						$resultado = mysqli_query($conexao, $sql_categoria);
						$linhas = mysqli_num_rows($resultado);
						
						if($linhas != 0) {
							
								for($i=1; $i<=$linhas; $i++){
								  $categorias = mysqli_fetch_assoc($resultado);
								  $id_cat =  $categorias["id_cat"];
								  $nome = $categorias["nome"];
								 echo '<option value="'.$id_cat.'">'.$nome.'</option>
										
										';
								}
						echo "</select>
						</div>";

						}else {
							echo "Sem categorias";
						} 
					
						mysqli_free_result($resultado);
						mysqli_close($conexao);
					?>
			<div class="input-group mb-3">
				<span class="input-group-text">Descrição:</span>
				<textarea id="descricao" name="descricao" class="form-control" aria-label="With textarea"></textarea>
		    </div>
			<div class="input-group mb-3">
				<span class="input-group-text">Contribuição para a sociedade:</span>
				<textarea id="contribuicao" name="contribuicao" class="form-control" aria-label="With textarea"></textarea>
			</div>
			<div class="inp mx-2 ut-group mb-3">
				<p>Enviar foto de capa:</p>
				<input name="arquivo" type="file" id="arquivo" class="form-control">
			</div>
            <div class="text-center">
				<?php
					echo '<input type="hidden"  name="cpf" value="'.$_SESSION["cpf"].'"/>';
				?>
				<button type="submit">Enviar</button>
                <!--<button id="cadastrar_proj" class="btn btn-outline-info">Enviar</button><br>-->
            </div>
        </form>
    </div>>
	<!--RODAPÉ
	<footer class="bg-dark text-light mt-5 static-bottom">
		<div class="container-fluid py-3">
		 	<div class="col-10">
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
	 </footer>-->
	 
	<script src="../js/valida_proj.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../js/app.js"></script>
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/jquery.mask.min.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/md5.js"></script>
	<script src="../js/main.js"></script>
	
</body>
</html>
