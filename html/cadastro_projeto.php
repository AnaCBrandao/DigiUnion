<?php session_start();

	//if(!empty($_POST)){
		$titulo=$_POST["titulo"];
		$local=$_POST["local"];
		$categoria=$_POST["categoria"];
		$descricao=$_POST["descricao"];
		$contribuicao=$_POST["contribuicao"];
		$cpf = $_POST["cpf"];;
		
			if(isset($_FILES['arquivo']['name'])){
				

				$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
				$nome = $_FILES['arquivo']['name'];

				// Pega a extensao
				$extensao = strrchr($nome, '.');

				// Converte a extensao para mimusculo
				$extensao = strtolower($extensao);


				// Somente imagens, .jpg;.jpeg;.gif;.png
				// Aqui eu enfilero as extesões permitidas e separo por ';'
				// Isso server apenas para eu poder pesquisar dentro desta String
				if(strstr('.jpg;.jpeg;.png', $extensao)){
					// Cria um nome único para esta imagem
					// Evita que duplique as imagens no servidor.
					
					$novoNome = md5(microtime()) . $extensao;
					
					
					// Concatena a pasta com o nome
					$destino = '../imagens/' . $novoNome; 
					
					// tenta mover o arquivo para o destino
					move_uploaded_file( $arquivo_tmp, $destino);
					
						require "conexao.php";
			
						//$erro = '{"valido": false}';
						$destino = 'imagens/' . $novoNome;
						
						$sql = "INSERT INTO `projetos` (`titulo`, `local`, `categoria`, `descricao`, `contribuicao`, `capa`, `cpf_usu`) VALUES ";
						$sql .= "(\"{$titulo}\", \"{$local}\", \"{$categoria}\", \"{$descricao}\", \"{$contribuicao}\", \"{$destino}\", \"{$cpf}\")";

						error_log($sql);
							
						mysqli_query($conexao, $sql);
						mysqli_close($conexao);
						
						header("location: ../index.php");
					
				}
				
			}
			
	//}
	

 ?>
