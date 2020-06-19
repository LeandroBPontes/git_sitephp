<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8"/>

<title>Holder do Tempo</title>
<link rel="stylesheet" type="text/css" href="css/formato.css">

</head>

<body>
	<div id="box_form">
		<h1 class="titulos" style="margin-left: 10%"> Cadastre-se</h1>

	<form action= "cadastrar.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="nome" class="campos_cad" placeholder="nome">
"		<input type="email" name="email" class="campos_cad"placeholder="email>
		<input type="password" name="senha" class="campos_cad"placeholder="Senha">
		<input type="password" name="repetesenha" class="campos_cad" placeholder="Confirmar Senha">
		<input type="text" name="lembrete" class="campos_cad"placeholder="Lembrete">
		<div id="botoes">
		<input type="submit" value="Cadastrar" class="bt_cad">
		<input type="reset" value="Limpar" class="bt_cad">
	</form>
	    </div>
	


    <div class="botoes">
	<a href="index.php" class="form_link">&larr; Home </a>
	<p class="p_form">Já possui cadastro? Então clique no link abaixo e faça login</p>
	<a href="login.php" class="form_link">Logar</a>
</div>
</div>
</body>
</html>