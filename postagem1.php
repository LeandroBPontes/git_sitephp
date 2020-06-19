<div id="conteudo_principal">

	
	<br><br>
	<?php
	include "connect.php";

	$sql = mysqli_query($link, "select * from tb_postagens where id_post = 1 ");
	while($line = mysqli_fetch_array($sql)){
		$titulo = $line['titulo'];
		$imagem = $line['imagem'];
		$conteudo = $line['texto'];
		$data = $line['dt'];
		$hora = $line['hr'];
		$id_post = 1;		

}
	?>
	<div class="postagens">
		<h1 class="titulos2"><?php echo $titulo; ?> </h1>	
		<img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem2">
		<p class="paragrafo"><?php echo $conteudo; ?></p>
		<span class="data"><?php echo date('d/m/Y',strtotime($data));
			
		 ?></span>
		 <br><br>
	

<h1 class="titulos">Na sexta-feira (27/03), a Itália teve recorde de número diário de novas mortes por coronavírus - foram 969.

No total, até 28 de março, mais de 10 mil pessoas já morreram em decorrência do contágio pelo vírus no país.<br><br>

Todo o território italiano está sob rígida quarentena. No início da sexta-feira, autoridades disseram que as restrições provavelmente serão estendidas por mais tempo.<br><br>

Coronavírus: mortes suspeitas sem diagnóstico angustiam famílias no Brasil<br><br>
Cidadãos mais pobres da Índia temem que 'a fome mate antes do coronavírus'<br>
A região mais afetada, no norte da Lombardia, teve um aumento acentuado de mortes, após um declínio na quinta-feira que aumentou as esperanças de que o surto lá pudesse ter passado do pico.<br><br>

O número divulgado nesta sexta-feira incluiu 50 mortes registradas no dia anterior na região noroeste do Piemonte, mas que não foram enviadas a tempo da atualização de quinta-feira.<br><br>

Enquanto isso, a Espanha - o segundo país mais atingido pela doença covid-19, causad pelo novo vírus, na Europa - sofreu um forte aumento no número de mortes, mas a taxa de novas infecções está se estabilizando, disseram autoridades.<br><br>

A BBC News Brasil ouviu especialistas para entender por que o número de mortes segue crescendo. Os principais fatores apontados são a demora para detectar casos e a demora para impor medidas restritivas.<br><br>

Qual é a situação na Itália?<br>
Foram registrados 4.401 novos casos confirmados, um pouco abaixo do registrado na quinta-feira, mas ainda assim maior que os números do início da semana.<br><br>

O correspondente da BBC em Roma, Mark Lowen, diz que o progresso no combate ao surto está se mostrando lento e desigual.<br>

Também cresce o medo de um aumento de casos no sul do país, que é mais pobre.<br><br>

Na quinta-feira, Vincenzo De Luca, presidente da região da Campânia, perto de Nápoles, disse que o governo central não forneceu os respiradores prometidos e outros equipamentos que salvam vidas.<br><br>

"Nesse momento, existe a perspectiva real de que a tragédia da Lombardia esteja prestes a se tornar a tragédia do sul", disse ele.</h1>
</div>
</div>
<div id="recentes">
		<h1 class="titulos">Postagens Recentes</h1>
	<div class="postagens_recentes">
		<?php
		$contar= 0;
		$sql = mysqli_query($link, "select * from tb_postagens where page = 1 order by id_post desc ");
	while($line = mysqli_fetch_array($sql) and $contar < 6){
		$titulo = $line['titulo'];
		$data = $line['dt'];
		?>
		<a href="index_postagens.php" style="color: blue"; class="titulos"> <?php echo $titulo; ?></a><br>
		<a href="index_postagens.php"><img src="postagem/<?php echo "post".$id_post."/".$imagem;?>" class="imagem"></a>
		<!--<h1 class="titulos"><?php echo $titulo; ?></h1>-->
		<span class="data" style="margin-top: -10px;"><?php echo date('d/m/Y',strtotime($data));?></span>
		<?php
		$contar++;
	}
	?>
</div>
</div>