"use strict";

$(function() {
    $("#logar").click(function() {

		var email = $("#email_login").val();
		var senha = $("#senha_login").val();
		var dados = {"email_login": email, "senha_login": senha};
		console.log(dados);
		$.post("html/login.php", dados, function(retorno) {

			if(retorno.valido) {
				
				window.location.href = "index.php";
			}
			else {
				$("#login").append('<p id="erro_P" class="erro center">   Algum dado incorreto</p>');
			}

		});
	});
	
	 $("#logar2").click(function() {

		var email = $("#email_login").val();
		var senha = $("#senha_login").val();
		var dados = {"email_login": email, "senha_login": senha};
		console.log(dados);
		$.post("../html/login.php", dados, function(retorno) {

			if(retorno.valido) {
				
				window.location.href = "../index.php";
      }
      else {
				$("#login").append('<p id="erro_P" class="erro center">   Algum dado incorreto</p>');
      }

		});
	});
});