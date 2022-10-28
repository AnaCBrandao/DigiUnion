<?php
function printarMenu($flag){
			  if($flag){
				$html= '<div class="menu-item">
														<a class="branco" href="html/cadastro_proj.php">Cadastro de projetos</a>
													</div>
													<div class="menu-item">
														<a class="branco" href="html/minharea.php">Minha área</a>
													</div>
												';
			  }else{
				$html =  '
						<button type="button" class="modalbtn btn btn-outline">Entrar</button>';
			  }
			  
				return($html);
}
?>