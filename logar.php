<?php
include "connect.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

if($email != "" && $senha != ""){

	$sql = mysqli_query($link, "select * from tb_user where email = '$email' ");
	//varredura banco
	$registro = mysqli_num_rows($sql);
	while($line = mysqli_fetch_array($sql)){
		$senha_user = $line['senha'];
		$nivel = $line['nivel'];

	}
}
	if($registro){
		if($senha_user == $senha){
			SESSION_START();
			$_SESSION['login'] = $email;
			$_SESSION['password'] = $senha;
			//direcionando para local adequado
			if($nivel == 1){
				header('location:adm.php');
			}else{
				header('location:cliente.php');
			}

	}else{
		echo "Você não possui cadastro. Deseja se cadastrar?";
		echo "<a href='form_cadastro.php'> Cadastre-se</a>";
	}
	
}else{
	header('location:login.php?valor=1');
}

?>