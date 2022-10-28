<?php
   $categoria = $_POST["categoria"];
		
   header ("Content-Type: application/json");

   
		require "conexao.php";

		$sql = "SELECT id, titulo, categoria, capa FROM `projetos` WHERE categoria = $categoria";

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