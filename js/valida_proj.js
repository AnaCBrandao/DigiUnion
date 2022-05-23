"use strict";

$(function(){

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

});
