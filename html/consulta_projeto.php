<?php
	require "conexao.php";
					
	$id = $_POST["id"];
	$sql = "SELECT id, titulo, descricao, contribuicao FROM `projetos` WHERE id=$id";

	$resultado = mysqli_query($conexao, $sql);

	$projeto = mysqli_fetch_assoc($resultado);
					
	$titulo = $projeto["titulo"];
	$descricao = $projeto["descricao"];
	$contribuicao = $projeto["contribuicao"];

	$html =  '<div id="cont">
			<h5 class="card-title">'.$titulo.'</h5>
			<p class="card-text"><b>DESCRIÇÃO DO PROJETO: </b>'.$descricao.'</p><br/>
			<p class="card-text"><b>CONTRIBUIÇÃO PARA A SOCIEDADE: </b>'.$contribuicao.'</p>
			<a href="#" class="btn btn-primary">Ver no site</a>
			<input type="hidden"  name="codigo" value="'.$id.'"/>
			</div>';
			
	echo $html;
	
	mysqli_free_result($resultado);
	mysqli_close($conexao);
?>