<?php
include "connect.php";

date_default_timezone_set('America/Sao_Paulo');

SESSION_START(); //INICIA OU RECUPERA SESSÃO EM ABERTO
$login = $_SESSION['login']; //email do usuario
$senha_log = $_SESSION['password'];//senha do usuario

//acesso ao banco de dados
$sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql))
{
	$senha = $line['senha'];
	$nivel = $line['nivel'];
	$id_user = $line['id_user'];
}
//verifica se a pessoa pode estar na tela de adm
//armazena os inputs do formulario em variaveis

if($senha_log == $senha && $nivel == 1){
$titulo = $_POST['titulo'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$conteudo = $_POST['conteudo']; // texto do textarea

//Uma possibilidade para publicar videos
//$video = $_FILES["video"]["type"] == "video/mp4"

// inicializa um registro como falso para verificar se os inputs foram preenchidos ou se estão vazios
$registro = false;

if($titulo != "" && $foto != "" && $conteudo != ""){

		$registro = true;

}else{
	echo "<script>window.history.go(-1);</script>";
}

// consulta a tabela tb_postagens no banco
//sobrescreve e incremenda ao final
$sql = mysqli_query($link, "SELECT * FROM tb_postagens order by id_post desc limit 1");
while($line = mysqli_fetch_array($sql)){
	@$id = $line['id_post'];
}


@$id = $id+1;

//

$pasta = "postagem/post$id";

//verifica existencia da pasta
if(file_exists($pasta)){
//echo "pasta ja existe";
}else{
mkdir($pasta,0777);//cria uma pasta para as armazenar as fotos das postagens
}

$dt = date('Y-m-d');
$hr = date('H:i:s');
$page = 1;

if($registro == true){
mysqli_query($link, "insert into tb_postagens(titulo,imagem,texto,dt,hr,page,id_user)VALUES('$titulo', '$foto','$conteudo','$dt','$hr', '$page', '$id_user')");

move_uploaded_file($_FILES['foto']['tmp_name'],$pasta."/".$foto);
header('location:form_postar.php');
}else{
  echo"Não foi possivel cadastrar essa postagem";
  echo "<a href=form_postar.php> Voltar ao Formulário</a>";
}

}else{
	header('location:index.php');
}

?>
