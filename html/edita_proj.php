<?php
        header("Content-Type:application/json");
		$titulo = $_POST["titulo"];
		$local = $_POST["local"];
		$cat = $_POST["categoria"];
		$desc = $_POST["descricao"];
		$contribuicao = $_POST["contribuicao"];
		$id = $_POST["id"];

        $json = '{"valido": false}';

            require "conexao.php";

            $sql = 'update projetos set titulo = "'.$titulo.'", local = "'.$local.'", categoria = "'.$cat.'", descricao = "'.$desc.'", contribuicao = "'.$contribuicao.'" where id = '.$id.';';

            $resultado = mysqli_query($conexao, $sql);

            
            $json = '{"valido": true}';
            

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        
		
		echo $json;
?>