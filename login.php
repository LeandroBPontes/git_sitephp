<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8"/>

<title>Holder do Tempo</title>
<link rel="stylesheet" type="text/css" href="css/formato.css">

</head>

<body>
	<div id="box_form">
		<h1 class="titulos" style="margin-left: 10%"> Tela de Login
		<?php
		//"@" antes da variavel indica que caso n tenha nada na variavel, ela será anulada para n dar erro

		//variavel v remete ao logar.php a variavel valor
		@$v = $_GET['valor'];
		if($v){
			echo " - <span style ='color:red'> Todos os campos devem ser preenchidos</span>";
		}

		?>
	</h1>
	<form action= "logar.php" method="POST" enctype="multipart/form-data">
		
		<input type="email" name="email" class="campos_cad"placeholder="E-mail">
		<input type="password" name="senha" class="campos_cad"placeholder="Senha">

		<div id="botoes">
		<input type="submit" value="Logar" class="bt_cad">
		<input type="reset" value="Limpar" class="bt_cad">
		</form>
	    </div>
	


    <div class="botoes">
	<a href="index.php" class="form_link">&larr; Home </a>
	<p class="p_form">Ainda não possui cadastro? Então clique no link abaixo e faça cadastro</p>
	<a href="form_cadastro.php" class="form_link">Cadastre-se</a>
</div>
</div>
</body>
</html>