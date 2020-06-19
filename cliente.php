<?php
include "connect.php";

//verifica se a pessoa pode estar na tela de adm
SESSION_START(); //INICIA OU RECUPERA SESSÃO EM ABERTO
$login = $_SESSION['login']; //email do usuario
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql))
{
	$senha = $line['senha'];
	$nivel = $line['nivel'];
	$nome = $line['nome'];
}
if($senha_log == $senha && $nivel > 1){

}else{
	header('location:index.php');
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8"/>

<title>Holder do Tempo</title>
<link rel="stylesheet" type="text/css" href="css/formato.css">

</head>

<body>
	<div id="box_log">
		 <h1 class="titulos" style="margin-left: 2%"> Tela do cliente: <?php echo $login; ?> </h1> 
		 <h1 class="titulos" style="margin-left: 2%"> Nome do Usuario: <?php echo $nome; ?> </h1> 
		<a href="index.php"style="margin-left: 2%"> Ir para home </a> | <a href="logout.php"> Sair</a>
</div>
</body>
</html>