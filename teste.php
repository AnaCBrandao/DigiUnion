<?php
		require "html/conexao.php";
		$sql = "SELECT id, titulo, descricao, capa, likes FROM `projetos` order by likes desc";

		$resultado = mysqli_query($conexao, $sql);

		for($i=1; $i<=3; $i++){
		  $projeto = mysqli_fetch_assoc($resultado);
		  $capa = $projeto["capa"];
		  $titulo = $projeto["titulo"];
		  $descricao = $projeto["descricao"];

			 echo '
			<div class="carousel-item">
				<img src="'.$capa.'" class="d-block w-100" alt="'.$titulo.'">
				<div class="carousel-caption d-none d-md-block">
					<h5>'.$titulo.'</h5>
				</div>
			</div>';
		}
		mysqli_free_result($resultado);
		mysqli_close($conexao);
	?>