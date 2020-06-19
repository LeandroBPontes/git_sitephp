<?php
SESSION_START(); //RECUPERA SESSÃO
//remove definicoes das variaveis individualmente por indice
unset($_SESSION['login']);
unset($_SESSION['password']);
header('location:index.php');

//outra possibilidade

//destruir a variavel de sessão

//session_destroy();
?>

