"use strict";

function editarProjeto(id){
	var dados = {"id": id};
        
    $.post("buscar_proj.php", dados, function(retorno) {
		console.log(retorno);
			
		retorno.forEach(function(r){
		
			var titulo = r.titulo;
			var local = r.local;
			var desc = r.descricao;
			var contribuicao = r.contribuicao;
				
			$('#titulo_p').val(titulo);
			$('#local_p').val(local);
			$('#desc_p').val(desc);
			$('#contribuicao_p').val(contribuicao);
		});
    });
}

function deletarProjeto(id){
	var dados = {"id": id};
	console.log(dados);

    $.post("deleta_proj.php", dados, function(retorno) {			
		if(retorno.valido) {    
			alert("projeto deletado");
			window.location.href = "minharea.php";
         }
    });
}

function botaoCurtir(id){
	var dados = {"id": id};

    $.post("curtir.php", dados, function(retorno) {			  
		//$(`#likes {id}`).text(retorno);
    });
}

$(function(){ 
    //VALIDAÇÕES DE CADASTRO

    $("#opcao").click(function() { //caixinha pra visualizar a senha
        var input = $("#senha");
        var input2 = $("#confirme");
        var type = input.attr("type") == "password"? "text": "password";
        var type = input2.attr("type") == "password"? "text": "password";
        input.attr("type", type);
        input2.attr("type", type);
   });

   $("#cpf").mask("000.000.000-00");

   $("#nome").blur( function() { 
        var nome = $("#nome").val();

        $(this).removeClass("vermelho");
        $("#erro2").remove();

        if(nome.trim().length == 0){
           
            $("#cadastrar").prepend('<p id="erro2" class="erro center">    O campo nome não pode estar vazio</p>');
            $(this).addClass("vermelho");
        }

    });

    $("#email").blur(function() { 
        var email = $("#email").val();
        
        $(this).removeClass("vermelho");
        $("#erro2").remove();

        if(email.trim().length == 0){
            $("#cadastrar").prepend('<p id="erro2" class="erro center">    O campo email não pode estar vazio</p>');
            $(this).addClass("vermelho");
        }
    });

    $("#confirme").blur(function() { 
        var senha = $("#senha").val();
        var senha2 = $("#confirme").val();
        
        $(this).removeClass("vermelho");
        $("#erro2").remove();

        if(senha != senha2){
            $("#cadastrar").prepend('<p id="erro2" class="erro center">    As senhas não coincidem</p>');
            $(this).addClass("vermelho");
        }
    });

    $("#cadastro").click(function(){ //validação
		var nome = $("#nome").val();
		var email = $("#email").val();
        var cpf = $("#cpf").val();
        var datanasc = $("#datanasc").val();
		var senha = $("#senha").val();
		var confirme = $("#confirme").val();
        
        var dados = {"nome": nome, "email": email, "cpf": cpf, "datanasc": datanasc, "senha": senha, "confirme": confirme};
        
        $.post("html/cadastro.php", dados, function(retorno) {
			if(retorno.valido) {    
				$("#erro2").show();
            }
            else {
				$("#cadastrar").prepend('<p class="verde text-center">    Cadastro realizado com sucesso</p>');
            }
        });
    });
	
	$("#categoria").on('change', function() {		
		var categoria = $("#categoria").val();
		var html ="";
		
		$("div").remove(".card");
		$("div").remove(".alert");
		
		var dados = {"categoria": categoria};
		
		$.post("html/filtro.php", dados, function(retorno) {
			
			if(retorno.length != 0 ){
				retorno.forEach(function(r){
					var titulo = r.titulo;
					var capa = r.capa;
					var id = r.id;			
					
					 html = html+`
								<div class="card mx-2 col" style="max-width: 26rem;">
								  <img src="`+capa+`" class="card-img-top" alt="Imagem do projeto">
								  <div class="card-body">
									<h5 class="card-title">`+titulo+`</h5>
										<form action="html/ex_proj.php" method="post">
											 <input type="hidden"  name="codigo" value="`+id+`"/>
											 <input type="submit" class="btn btn-primary" value="Saiba mais"/>	
										</form>
								  </div>
								</div>
								`;

				});
			}else{
				
				 html =`<div class="alert alert-danger" role="alert">
				  Ainda não existem projetos cadastrados nessa categoria!
				</div>`;
			}
			
			$("#projetos").append(html);
		});
	});
	
	var flag = 0;
	
	$("#senha_atual").blur(function() { 
        var senha = $("#senha_atual").val();
        
        $(this).removeClass("vermelho");
        $("#erro_senha").remove();

		var dados = {"senha": senha};
        
        $.post("alterar_senha.php", dados, function(retorno) {
			if(!retorno.valido) {    
				$("#editar_usu").prepend('<p id="erro_senha" class="erro center">    As senhas não coincidem</p>');
				$(this).addClass("vermelho");
				
				flag=0;
            }else{
				flag=1;
			}
        });
    });

	$("#salvar_usu").click(function() { 
		
		if(flag){
			var nome = $("#nome_e").val();
			var email = $("#email_e").val();
			var cpf = $("#cpf_e").val();
			var datanasc = $("#data_nasc_e").val();
			var senha = $("#senha_nova").val();
					
			var dados = {"nome": nome, "email": email, "cpf": cpf, "data_nasc": datanasc, "senha_nova": senha};
			
			$.post("alterar_usu.php", dados, function(retorno) {
				 
				if(retorno.valido){
					window.location.href = "minharea.php";
					flag=0;
				}	  
			});
		}else{
			alert('As senhas não coincidem');
			flag=0;
		}
    });
	

	$("#edita_proj").click(function(){ //validação
		var titulo = $('#titulo_p').val();
		var local = $('#local_p').val();
		var cat = $('#cat_p').val();
		var desc = $('#desc_p').val();
		var contribuicao = $('#contribuicao_p').val();
	
		var dados = {"id": id, "titulo": titulo,"local": local,"categoria": cat,"descricao": desc,"contribuicao": contribuicao};
		
		console.log(dados);
		
		$.post("edita_proj.php", dados, function(retorno) {			
			if(retorno.valido) {    
				alert("Projeto editado");
			}
		});
	});
	
	$("#resul").click(function(){ 
			var id = $("input[name=codigo]").val();
			var resultados = '<br/><br/><div class="alert alert-info" role="alert"><h2>Resultados deste projeto </h2></div>';
			var conteudo = '';
	
			$("#cont").remove();
			$("#aloha").removeClass('active');
			$("#resul").addClass('active');
			
			var dados = {"codigo": id};
			console.log(dados);
			
			$.post("consulta_resultados.php", dados, function(retorno) {
				console.log(retorno);	
				
				retorno.forEach(function(r){
					conteudo = conteudo+`<div class="card"><div class="card-body">`+String(r.conteudo)+`</div></div><br/>`;	
					console.log('conteudo: ' + conteudo);
					
				});
				resultados = resultados.concat(conteudo);
				
				var html = `<div id="exibeResultado">
					<form action="resultados.php" method="post">					
						<div class="form-group">
							<label for="exampleFormControlTextarea1"></label>
							<textarea class="form-control" id="conteudo" name="conteudo" rows="3"placeholder="Informe aqui o resultado de seu projeto caso tenha sido concluído"></textarea>
						</div>
						<input type="hidden"  name="codigo" value="`+id+`"/>
						<button class="btn btn-primary" type="submit">Enviar</button>
					</form>
					<div>`+resultados+`</div>
				</div>`;
					
				$("#cont2").append(html);
						
			});
	});
	
	$("#aloha").click(function(){ 
			var id = $("input[name=codigo]").val();
			var html = '';
	
			$("#exibeResultado").remove();
			$("#resul").removeClass('active');
			$("#aloha").addClass('active');
		
			var dados = {"id": id};
			console.log(dados);
			
			$.post("consulta_projeto.php", dados, function(retorno) {			
				console.log(retorno);
				html = html.concat(retorno);
				$("#cont2").append(html);
			});
			
			
	});
	
}); 
