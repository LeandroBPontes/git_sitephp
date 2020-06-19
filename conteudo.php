<div id="conteudo_principal">

	<!--<div class="postagens">
		<h1 class="titulos"> A importância de se pensar em longo prazo </h1>
		<img src="imagens/investimento.png" class="imagem">
		<p class="paragrafo"> Parágrafo Provisório...</p>
		<span class="data">15/02/2020</span>
		</div>

<div class="postagens">
		<h1 class="titulos"> Título da postagem </h1>
		<img src="imagens/Leandro.jpeg" class="imagem">
		<p class="paragrafo"> Parágrafo Provisório...</p>
		<span class="data">15/02/2020</span>
</div>-->

<?php
include "connect.php";

$qtde_registros = 1;
@$page = $_GET['pag'];
if(!$page){
	$pagina = 1;
}else{
	$pagina = $page;
}
$inicio = $pagina - 1;
$inicio = $inicio * $qtde_registros;
$sel_parcial = mysqli_query($link, "select * from tb_postagens where page = 1 or page = 2 order by id_post desc limit $inicio, $qtde_registros");
$sel_total = mysqli_query($link, "select * from tb_postagens");

$contar = mysqli_num_rows($sel_total);//qtd registros da tabela
$contar_pages = $contar / $qtde_registros;
while($line = mysqli_fetch_array($sel_parcial)){
		$titulo = $line['titulo'];
		$imagem = $line['imagem'];
		$conteudo = $line['texto'];
		$data = $line['dt'];
		$hora = $line['hr'];
		$id_post = $line['id_post'];
	?>
	<a href="novopost<?php echo $id_post; ?>.html"><h1 class="titulos" style= "color: #00008B;"><?php echo $titulo; ?></h1></a>
	<img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem">
	<p class="paragrafo"><?php echo $conteudo; ?></p>
		<span class="data"><?php echo date('d/m/Y',strtotime($data));
			
		 ?></span>
	<?php

}
	$anterior = $pagina - 1;
	$proximo = $pagina + 1;

	echo "<br><br><br>";
	if($pagina>1){
		echo "<a href=?pag=$anterior> &larr; Anterior</a>";
	}

	for($i = 1;$i<$contar_pages+1;$i++){
		echo "<a href=?pag=".$i.">".$i."</a>";

	}

	if($pagina < $contar_pages){

		echo "<a href=?pag=$proximo> Próximo &rarr; </a>";

	}

?>
</div>

<div id="recentes">
	tag	<h1 class="titulos">Posens Recentes</h1>
	<div class="postagens_recentes">
		<?php
		$contar= 0;
		$sql = mysqli_query($link, "select * from tb_postagens where page = 1 or 2 order by id_post desc ");
	while($line = mysqli_fetch_array($sql) and $contar < 6){
		$titulo = $line['titulo'];
		$data = $line['dt'];
		$imagem = $line['imagem'];
		$id_post = $line['id_post'];
		?>
		<h1 class="titulos" style= "color: #00008B; font-size:20px;"><?php echo $titulo; ?></h1>
			<img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem">
		<span class="data" style="margin-top: -10px;"><?php echo date('d/m/Y',strtotime($data));?></span>
		<?php
		$contar++;
	}
	?>
</div>
</div>