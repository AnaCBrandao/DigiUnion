<?php
	
    if(!empty($_POST)) {

        $email = $_POST["email_login"];
        $senha = md5($_POST["senha_login"]);

        header("Content-Type:application/json");

        $json = '{"valido": false}';

        if(!empty(trim($email)) && !empty(trim($senha))) {
			session_start();
            $_SESSION["email"] = $email;
			$_SESSION["senha"] = $senha;

            require "conexao.php";

            $sql = "select email_pessoa, senha_pessoa, cpf_pessoa from pessoa where email_pessoa='$email' and senha_pessoa='$senha'";

            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) == 1) {
                $pessoa = mysqli_fetch_assoc($resultado);
				$_SESSION["cpf"] = $pessoa["cpf_pessoa"];
                $json = '{"valido": true}';
            }

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        }
		echo $json;
    }
    else {
       echo "Solicitação inválida";
    }

?>