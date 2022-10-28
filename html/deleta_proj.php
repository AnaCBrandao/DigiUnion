<?php
		$id = $_POST["id"];
        header("Content-Type:application/json");

        $json = '{"valido": false}';

            require "conexao.php";

            $sql = "delete from projetos where id = '$id';";

            $resultado = mysqli_query($conexao, $sql);

            if($resultado) {
                $json = '{"valido": true}';
            }

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        
		
		echo $json;
?>