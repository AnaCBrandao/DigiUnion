<?php
<<<<<<< HEAD
	
=======

>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
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

            $sql = "select email_pessoa, senha_pessoa from pessoa where email_pessoa='$email' and senha_pessoa='$senha'";

            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) == 1) {
                $pessoa = mysqli_fetch_assoc($resultado);
                $json = '{"valido": true}';
<<<<<<< HEAD
            }
=======
            } else {
				echo "Algum dado incorreto";
			}
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        }
		echo $json;
    }
    else {
       echo "Solicitação inválida";
    }

?>