<div id="conteudo_principal">
	<h1 class="titulos"></h1>
	<?php
	include "connect.php";

	$sql = mysqli_query($link, "select * from tb_postagens where page = 2 order by id_post desc ");
	while($line = mysqli_fetch_array($sql)){
		$titulo = $line['titulo'];
		$imagem = $line['imagem'];
		$conteudo = $line['texto'];
		$data = $line['dt'];
		$id_post = $line['id_post'];
		$hora = $line['hr'];
		

	?>
	<div class="postagens">
			<a href="novopost<?php echo $id_post; ?>.html"><h1 class="titulos" style= "color: #00008B;"><?php echo $titulo; ?></h1></a>
		
		<img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem">
		<p class="paragrafo"><?php echo $conteudo; ?></p>
		<span class="data"><?php echo date('d/m/Y',strtotime($data));
		 ?></span>
		</div>
		<?php
	}
	?>


</div>


<div id="recentes">
		<h1 class="titulos"> Recentes</h1>
	<div class="postagens_recentes">
		<?php
		$contar= 0;
		$sql = mysqli_query($link, "select * from tb_postagens where page = 2 order by id_post desc ");
	while($line = mysqli_fetch_array($sql) and $contar < 6){
		$titulo = $line['titulo'];
		$imagem = $line['imagem'];
		$data = $line['dt'];
		$id_post = $line['id_post'];
		?>
		<h1 class="titulos" style= "color: #00008B;font-size:20px;"><?php echo $titulo; ?></h1>
		<img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem">
		<span class="data" style="margin-top: -10px;"><?php echo date('d/m/Y',strtotime($data));?></span>
		<?php
		$contar++;
	}

	?>
</div>
</div>