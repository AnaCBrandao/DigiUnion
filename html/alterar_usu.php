<?php
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$cpf = $_POST["cpf"];
		$data_nasc = $_POST["data_nasc"];
        $senha = md5($_POST["senha_nova"]);

        header("Content-Type:application/json");

        $json = '{"valido": false}';

            require "conexao.php";

            $sql = 'update pessoa set nome_pessoa = "'.$nome.'", email_pessoa = "'.$email.'", datanasc_pessoa = "'.$data_nasc.'", senha_pessoa = "'.$senha.'", csenha_pessoa = "'.$senha.'" where cpf_pessoa = "'.$cpf.'";';

            $resultado = mysqli_query($conexao, $sql);

            if($resultado) {
                $json = '{"valido": true}';
            }

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        
		
		echo $json;
?>