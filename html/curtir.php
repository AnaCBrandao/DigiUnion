<?php session_start();
	$id = $_POST["id"];
	
	require "conexao.php";

	//consultando os likes já existentes
	$sql = "SELECT id, likes FROM `projetos` WHERE id = $id";
	$resultado = mysqli_query($conexao, $sql);
	$projeto = mysqli_fetch_assoc($resultado);

    $likes = $projeto["likes"] + 1;

    // atualizando likes em +1
    $sql = 'update projetos set likes = '.$likes.' where id = "'.$id.'";';
    $resultado = mysqli_query($conexao, $sql);

    echo $likes;

	mysqli_close($conexao);
		
?>