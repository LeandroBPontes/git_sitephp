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
}
if($senha_log == $senha && $nivel == 1){

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
	<div id="box_form">
		<h1 class="titulos" style="margin-left: 10%"> Formulario de Scripts
	</h1>

	<form action= "postar_script.php" method="POST" enctype="multipart/form-data">
		
		<input type="text" name="titulo" class="campos_cad"placeholder="Digite o título da postagem">
		<input type="file" name="foto" class="campos_cad">
		<textarea name="conteudo" class="campos_cad" placeholder="digite o conteudo..." style="height: 300px";></textarea>

		<div id="botoes">
		<input type="submit" value="Publicar" class="bt_cad">
		<input type="reset" value="Limpar" class="bt_cad">
	</form>
	    </div>
	


    <div class="botoes">
	<a href="index.php" class="form_link">&larr; Home </a><br>
	<a href="form_postar.php" class="form_link"> Ir para postagem &rarr;</a>
	
</div>
</div>
</body>
</html>