<?php
	if(!empty($_POST)){
		$nome= $_POST["nome"];
		$email= $_POST["email"];
		$cpf= $_POST["cpf"];
		$datanasc = $_POST["datanasc"];
		$senha= $_POST["senha"];
		$confirme= $_POST["confirme"];
		
		header ("Content-Type: application/json");
		
		$erro = '{"valido": true}';
		
		error_log("teste");
		
		
		//Verifica se o campo nome não está em branco
		if (empty($nome)) {
			echo "Favor digitar o seu nome corretamente.<br>";
			
		}else if ((!preg_match("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/",
			$email))){ //Verifica se o campo email está preenchido corretamente
			echo "Favor digitar o seu e-mail corretamente.<br>";
			
		}else if (strlen($cpf) != 14){
			echo "Favor digitar o seu cpf com 11 dígitos.<br>";
			//Verifica se o cpf tem 11 caracteres
			
		}else if (empty($datanasc)){
			echo "Favor digitar alguma data de nascimento.<br>";
			 //Verifica se existe data de nascimento
			 
		}else if (!preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/",
			$senha)){
			echo "Favor digitar uma senha com 8 dígitos, contendo pelo menos 1 letra maiuscula, 1 minúscula e 1 algarismo.<br>";
			//Verifica se a senha está no padrão do sistema
			
		}else if($senha != $confirme){
			echo "Favor digitar a mesma senha nos dois campos.<br>";
			
		}else{
		
			$senha = md5($senha);
			$confirme = md5($confirme);
			
			require "conexao.php";
			
			$erro = '{"valido": false}';
			
			$sql = "INSERT INTO pessoa VALUES ";
			$sql .= "(\"{$nome}\", \"{$email}\", \"{$cpf}\", \"{$datanasc}\", \"{$senha}\", \"{$confirme}\")";

			error_log($sql);
				
			mysqli_query($conexao, $sql);
			mysqli_close($conexao);
		}
	echo $erro;
	}
?>