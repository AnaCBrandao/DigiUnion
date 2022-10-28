<?php session_start();
	$texto = $_POST["conteudo"];
	$id = $_POST["codigo"];
	
	require "conexao.php";
			
	$sql = "INSERT INTO `resultados` (`id_proj`,`conteudo`) VALUES";
	$sql .= "(\"{$id}\",\"{$texto}\");";
						
	error_log($sql);
		
	mysqli_query($conexao, $sql);
	mysqli_close($conexao);
	
	header("location: ../index.php");			
?>