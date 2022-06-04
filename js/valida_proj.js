"use strict";

$(function(){
	
	$("#cadastro_proj").submit(function(event){
			var deuCerto=true;
			
			var titulo = $("#titulo").val();

			if(titulo.trim().length == 0){
				$("#cadastro_proj").append('<p class="erro center">    Campo título não pode estar vazio</p>');
				$("#titulo").addClass("vermelho");
				
				deuCerto=false;
			}
			
			var local = $("#local").val();


			if(local.trim().length == 0){
				$("#cadastro_proj").append('<p id="erro_P" class="erro center">    Campo local não pode estar vazio</p>');
				$("#local").addClass("vermelho");
				
				deuCerto=false;
			}
			
			var descricao = $("#descricao").val();

			if(descricao.trim().length == 0){
				$("#cadastro_proj").append('<p id="erro_P" class="erro center">   Campo descrição não pode estar vazio</p>');
				$("#descricao").addClass("vermelho");
				deuCerto=false;
			}

			var contribuicao = $("#contribuicao").val();

			if(contribuicao.trim().length == 0){
				$("#cadastro_proj").append('<p id="erro_P" class="erro center">    Campo contribuição não pode estar vazio</p>');
				$("#contribuicao").addClass("vermelho");
				deuCerto=false;
			}
		
		if(!deuCerto){
			console.log(deuCerto);
			
			event.preventDefault();
		}else{
			deuCerto = true;
		}

	});
	
});
