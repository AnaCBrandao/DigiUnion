<?php session_start();


	$_SESSION["titulo"][]=$_POST["titulo"];
	$_SESSION["local"][]=$_POST["local"];
	$_SESSION["tipo"][]=$_POST["tipo"];
	$_SESSION["descricao"][]=$_POST["descricao"];
	$_SESSION["contribui"][]=$_POST["contribui"];
	$_SESSION["foto"][]=$_POST["foto"];
	
 ?>
