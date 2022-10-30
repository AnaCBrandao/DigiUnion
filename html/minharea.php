<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto X</title>
	<link rel="stylesheet" href="..\css1\bootstrap.min.css">
	<link rel="stylesheet" href="..\css\style.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Fira+Mono|Montserrat:800'><link rel="stylesheet" href="..\css\style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/menu.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
</head>
<body>
	<div class="col-12">
	<!--CABEÇALHO-->
		<div class="row d-flex justify-content-evenly">
			<nav class="bg_preto">
				<div class="col-4">
					<img src="logo.png" width="150px" height="150px">
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
														<a class="branco" href="minharea.html">Minha área</a>
													</div>
													<div>
														<a href="logout.php" class="branco"><button type="button" class="modalbtn btn btn-outline">Sair</button></a>
													</div>';
			  }
			
		?>
				</nav>
			</div>
			</nav>
		</div>
	</div>

	
	
	<div class="">
		<div class="card p-5 position-absolute start-50 translate-middle col-10 margem30">
			<?php
					require "conexao.php";
					
					$id_email = $_SESSION["email"];
					
					$sql = "SELECT nome_pessoa, email_pessoa, cpf_pessoa, datanasc_pessoa, senha_pessoa FROM pessoa WHERE email_pessoa='$id_email'";

					$resultado = mysqli_query($conexao, $sql);

					$pessoa = mysqli_fetch_assoc($resultado);
					
					$nome = $pessoa["nome_pessoa"]; 
					$email = $pessoa["email_pessoa"]; 
					$cpf = $pessoa["cpf_pessoa"]; 
					$datanasc = $pessoa["datanasc_pessoa"];  
					
									
					echo'<form class="row g-3" id="editar_usu">
					  <div class="col-md-6">
						<label for="inputEmail4" class="form-label">Nome</label>
						<input type="text" class="form-control" id="nome_e" value="'. $nome .'">
					  </div>
					  <div class="col-md-6">
						<label for="inputPassword4" class="form-label">Email</label>
						<input type="text" class="form-control" id="email_e"  value="'.$email.'">
					  </div>
					  <div class="col-md-6">
						<label for="inputAddress" class="form-label">CPF</label>
						<input disabled type="text" class="form-control" id="cpf_e"  value="'.$cpf.'">
					  </div>
					  <div class="col-md-6">
						<label for="inputAddress2" class="form-label">Data de nascimento</label>
						<input type="date" class="form-control" id="data_nasc_e"  value="'.$datanasc.'" >
					  </div>
					  <div class="col-md-6">
						<label for="inputCity" class="form-label">Senha atual</label>
						<input type="password" class="form-control" id="senha_atual">
					  </div>
					  <div class="col-md-6 mb-3">
						<label for="inputState" class="form-label">Nova senha</label>
						<input type="password" class="form-control" id="senha_nova">
					  </div>

					  <div class="col-12 ">
						<button type="submit" class="btn btn-success position-absolute bottom-0 end-0 mb-4 me-5" id="salvar_usu">Salvar</button>
					  </div>
					</form>';
							
			?>

		  </div>
		</div>
	</div>
	
	<?php
	
		$sql = "SELECT id, titulo, cpf_usu FROM projetos WHERE cpf_usu='$cpf'";

		$resultado = mysqli_query($conexao, $sql);
		$linhas = mysqli_num_rows($resultado);
		
		if($linhas != 0) {
			echo '<div class="card mb-5 text-center position-absolute  start-50 translate-middle col-10 margem70">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
				  <th scope="col" >#</th>
				  <th scope="col" colspan="4">Nome</th>
				  <th scope="col">Editar</th>
				  <th scope="col">Excluir</th>
				</tr>
			  </thead>
			
				<tbody>';
			for($i=1; $i<=$linhas; $i++){
				$projetos = mysqli_fetch_assoc($resultado);
				$titulo = $projetos["titulo"]; 
			    $id = $projetos["id"]; 
				
				echo '<tr>
					  <th scope="row">'.$id.'</th>
					  <td  colspan="4">'.$titulo.'</td>
					  <td><button type="button" class="btn btn-outline-success" data-bs-toggle="modal"  data-bs-target="#exampleModal"><a href="#abrirModal" onClick=editarProjeto('.$id.')>Editar</a></button></td>
					  <td><button type="submit" class="btn btn-outline-danger "><a onClick=deletarProjeto('.$id.')>Excluir</a></button></td>
					</tr>';
			}
			
			echo '</tbody>
		</table>
	</div>';
		}
			mysqli_free_result($resultado);
			mysqli_close($conexao);		 
	?>
	
	<div id="abrirModal" class="modal3">
		<div>
		<a href="#fechar" title="Fechar" class="fechar3">x</a>
		<form class="row g-3" id="editar_usu">
			<h2>Edite seu projeto</h2>
					  <div class="col-md-12">
						<label for="inputEmail4" class="form-label">Titulo</label>
						<input type="text" class="form-control" id="titulo_p" value="">
					  </div>
					  <div class="col-md-12">
						<label for="inputPassword4" class="form-label">Local</label>
						<input type="text" class="form-control" id="local_p"  value="">
					  </div>
					  <div class="col-md-12">
						<label for="inputAddress" class="form-label">Categoria</label>
						<select class="form-select" name="categoria"id="cat_p">
							<option disabled selected>Escolha uma categoria</option>
							<option value="1">Educação</option>
							<option value="2">Música</option>
							<option value="3">Teatro</option>
							<option value="4">Gastronomia</option>
							<option value="5">Desenho</option>
						</select>	
					  </div>
					  <div class="col-md-12">
						<label for="inputAddress2" class="form-label">Descrição</label>
						<input type="text" class="form-control" id="desc_p"  value="" >
					  </div>
					  <div class="col-md-12">
						<label for="inputAddress" class="form-label">Contribuição</label>
						<input  type="text" class="form-control" id="contribuicao_p"  value="">
					  </div><br/><br/><br/><br/><br/>
					
					  <div class="col-11 ">
						<p><button type="submit" class="btn btn-success position-absolute bottom-0 end-0 mb-4 mt-4 me-3" id="edita_proj">Salvar</button></p>
					  </div>
		</form>
		</div>
	</div>
	
	
<!-- Modal -->


	<!--RODAPÉ-->
	<footer class="bg-dark text-light mt-5 position-relative top-100 start-0">
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
	<script src="../js/md5.js"></script>
	<script src="../js/main.js"></script>
	<noscript>
        Seu navegador não suporta código em JavaScript
    </noscript>
</body>
</html>