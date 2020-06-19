<?php
include "connect.php";

date_default_timezone_set('America/Sao_Paulo');
//verifica se a pessoa pode estar na tela de adm
SESSION_START(); //INICIA OU RECUPERA SESSÃO EM ABERTO
$login = $_SESSION['login']; //email do usuario
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql))
{
	$senha = $line['senha'];
	$nivel = $line['nivel'];
	$id_user = $line['id_user'];
}
if($senha_log == $senha && $nivel == 1){
$titulo = $_POST['titulo'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$conteudo = $_POST['conteudo'];
$registro = false;
if($titulo != "" && $foto != "" && $conteudo != ""){

		$registro = true;

}else{
	echo "<script>window.history.go(-1);</script>";
}

$sql = mysqli_query($link, "SELECT * FROM tb_postagens order by id_post desc -1");
while($line = mysqli_fetch_array($sql)){
	@$id = $line['id_post'];
}
@$id = $id+1;
$pasta = "postagem/post$id";
if(file_exists($pasta)){
//echo "pasta ja existe";
}else{
mkdir($pasta,0777);
}
$dt = date('Y-m-d');
$hr = date('H:i:s');
$page = 2;

if($registro == true){
mysqli_query($link, "insert into tb_postagens(titulo,imagem,texto,dt,hr,page,id_user)VALUES('$titulo', '$foto','$conteudo','$dt','$hr', '$page', '$id_user')");

move_uploaded_file($_FILES['foto']['tmp_name'],$pasta."/".$foto);
header('location:form_scripts.php');
}else{
  echo"Não foi possivel cadastrar essa postagem";
  echo "<a href=form_scripts.php> Voltar ao Formulário</a>";
}

}else{
	header('location:index.php');
}

?>

