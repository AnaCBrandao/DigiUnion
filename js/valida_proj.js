"use strict";

$(function(){
<<<<<<< HEAD
	
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
	
=======

    //VALIDAÇÕES CADASTRO DE PROJETOS
    $("#titulo").blur(function() {

        $("#titulo").removeClass("vermelho");
        $("#erro_P").remove();

        var titulo = $("#titulo").val();

        if(titulo.trim().length == 0){
            $("#cadastro_proj").append('<p id="erro_P" class="erro center">    Este campo não pode estar vazio</p>');
            $("#titulo").addClass("vermelho");
        }
    });

    $("#descricao").blur(function() {

        $("#descricao").removeClass("vermelho");
        $("#erro_P").remove();

        var descricao = $("#descricao").val();

        if(descricao.trim().length == 0){
            $("#cadastro_proj").append('<p id="erro_P" class="erro center">    Este campo não pode estar vazio</p>');
            $("#descricao").addClass("vermelho");
        }
    });

    $("#contribuicao").blur(function() {

        $("#contribuicao").removeClass("vermelho");
        $("#erro_P").remove();

        var contribuicao = $("#contribuicao").val();

        if(contribuicao.trim().length == 0){
            $("#cadastro_proj").append('<p id="erro_P" class="erro center">    Este campo não pode estar vazio</p>');
            $("#contribuicao").addClass("vermelho");
        }
    });

    $("#cadastrar_proj").click(function(){
        var local = $("#local").val();
        var titulo = $("#titulo").val();
        var descricao = $("#descricao").val();
        var contribuicao = $("#contribuicao").val();
        var categoria = $("#categoria").val();
        var foto = $("#foto").val();

        var dados = {"titulo": titulo, "local": local, "categoria": categoria, "descricao": descricao, "contribuicao": contribuicao, "foto": foto};

        $.post("cadastro_projeto.php", dados, function(retorno) {
  			  if(retorno.valido==true) {
  				      alert("Projeto não pode ser cadastrado, tente novamente");
          }
          else {
  	         window.location.replace("ex_proj.html");
          }
        });
    });

>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
});
