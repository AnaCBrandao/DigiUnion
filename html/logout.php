<?php
    session_start();
    session_unset(); //removendo as variáveis de sessão
    session_destroy(); //destruindo os dados armazenados no servidor
    header("location: ../index.php");
?>