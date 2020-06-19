<img src="imagens/logo.png" class="logo"/>
<?php
include "connect.php";
@SESSION_START();
@$email = $_SESSION['login'];
//busca os campos no banco, onde o email e igual ao email da sessao

@$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$email'");
//fetch array é responsavel pela varredura dos campos de cada usuario
while($line = mysqli_fetch_array($sql)){
	$nivel = $line['nivel'];
}

if(@$nivel == 1){
	echo "<a href= logout.php class=links_top >Sair</a>";
	echo"<a href=adm.php class=links_top>Ir para Adm</a>";
}else if(@$nivel == ""){

	echo "<a href= login.php class=links_top >Logar</a>";
	echo"<a href=form_cadastro.php class=links_top>Cadastre-se</a>";
}else{
	echo "<a href= logout.php class=links_top>Sair</a>";
	echo"<a href=cliente.php class=links_top>Ir para Cliente</a>";
}


?>
