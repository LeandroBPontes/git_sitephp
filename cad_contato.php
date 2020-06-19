<?php
include "connect.php";
$nome    =   $_POST['nome'];
$email    =   $_POST['email'];
$assunto   =   $_POST['assunto'];
$conteudo   =   $_POST['conteudo']; 

$to = "design.criation@gmail.com"; //email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To'


mail($to, $assunto, )

?>