<?php
    session_start();
    session_unset(); //removendo as variáveis de sessão
    session_destroy(); //destruindo os dados armazenados no servidor
<<<<<<< HEAD
    header("location: ../index.php");
=======
    header("location: ../index.html");
>>>>>>> 8201e000cf6b864218bc7c1e021270eea06f5f81
?>