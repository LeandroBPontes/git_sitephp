<?php
//arquivo de conexao com o banco
//mysqli_connect

$host = "localhost";
$user = "root";
$pass = "";
$db = "banco";

$link = mysqli_connect($host,$user,$pass,$db);
/*$banco = mysqli_connect_errno(); //procura erro de conexao
if($banco == true){
	echo "Erro na conexao";

	}
	else{
		echo "conexao ok!";
	}
*/
?>