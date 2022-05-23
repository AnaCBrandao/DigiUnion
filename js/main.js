"use strict";

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

}); 