<?php
	header ("Content-Type: application/json");
					
	$id = $_POST["codigo"];
   
		require "conexao.php";

		$sql = "SELECT conteudo, id_proj FROM `resultados` WHERE id_proj = $id";

		$resultado = mysqli_query($conexao, $sql);
		$linhas = mysqli_num_rows($resultado);
		
		$data = array();
		
		for($i=1; $i<=$linhas; $i++){
			$cat = mysqli_fetch_assoc($resultado);
			
			array_push($data, $cat);
		}
		
		$json = json_encode($data);
		
   
	   //consulta SQL ->  categoria (WHERE id_cat = $categoria)
	   //passa o resultado da consulta pra um objeto JSON;
   
	echo $json;
?>