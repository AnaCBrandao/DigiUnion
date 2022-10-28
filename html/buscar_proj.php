<?php
		$id = $_POST["id"];

        header("Content-Type:application/json");

            require "conexao.php";

            $sql = "select * from projetos where id = '$id';";

            $resultado = mysqli_query($conexao, $sql);

			$linhas = mysqli_num_rows($resultado);
		
			$data = array();
		
		for($i=1; $i<=$linhas; $i++){
			$cat = mysqli_fetch_assoc($resultado);
			
			array_push($data, $cat);
		}
		
		$json = json_encode($data);

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        
		
		echo $json;
?>