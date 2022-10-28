<?php
	session_start();
        $senha = md5($_POST["senha"]);

        header("Content-Type:application/json");

        $json = '{"valido": false}';
		
            $email = $_SESSION["email"];

            require "conexao.php";

            $sql = "select email_pessoa, senha_pessoa from pessoa where email_pessoa='$email' and senha_pessoa='$senha'";

            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) == 1) {
                $pessoa = mysqli_fetch_assoc($resultado);
                $json = '{"valido": true}';
            }

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        
		
		echo $json;
?>