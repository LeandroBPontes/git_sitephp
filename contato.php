<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8"/>

<title>Holder do Tempo</title>
<link rel="stylesheet" type="text/css" href="css/formato.css">

</head>

<body>
	<div id="geral">
	<div id="topo">
		<?php include "topo.php";?>
	</div>
	<div id="menu">
		<?php include "menu.php";?>
	</div>
	<div id="conteudo">
		<br><br>
		<form action="cad_contato.php" method="POST">
			<label class="legenda">Nome:</label><br>
				<input type="text" name="nome" class="campos" placeholder="Preencha com o seu nome completo" required></br>

			<label class="legenda">E-mail:</label><br>
				<input type="email" name="email"  class="campos"placeholder="Preencha com o seu E-mail" required></br>

			<label class="legenda">Assunto:</label><br>
				<input type="text" name="assunto" class="campos" placeholder="Sobre o que deseja falar?" required></br>

            <label class="legenda">Conteudo:</label><br>
			<textarea name="conteudo" class="campo2" placeholder="Digite em no máximo 140 caracteres o conteúdo" maxlength="140"></textarea><br>

			<input type="submit" value="Enviar" class="bt_enviar">

		</form>
	</div>
	<div id="rodape">
		<?php include "rodape.php";?>
	</div>
</div>


</body>

</html>