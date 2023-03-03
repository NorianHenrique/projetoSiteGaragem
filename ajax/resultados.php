<?php
	include('../config.php');
	$data = array();
	$data['sucesso'] = true;
	$data = "";

?>
	
<div class="box-content">
<h2><i class="fa fa-user-tie"></i>Veiculos</h2>
<div class="busca">
	<h4><i class="fa fa-search"></i> Realizar uma busca</h4>
	<form method="post">
		<input placeholder="Procure por: nome ou preco" type="text" name="busca">
		<input type="submit" name="acao" value="Buscar!">
	</form>
</div><!--busca-->
<div class="boxes">
	<?php

	$query = "";
	if(isset($_POST['acao'])){
		$busca = $_POST['busca'];
		$query = " WHERE nome LIKE '%$busca%' OR preco LIKE '%$busca%''";
	}
	if(isset($_POST['acao'])){
		echo '<div style="width:100%;" class="busca-result"><p>Foram encontrados <b>'.count($clientes).'</b> resultado(s)</p></div>';
	}
	foreach($clientes as $value){
?>
	<div class="box-single-wraper">
		<div class="box-single">
			<div class="topo-box">

			</div><!--topo-box-->
			<div class="body-box">
				<p><b><i class="fa fa-pencil"></i> Nome do veiculo:</b> <?php echo $value['nome']; ?></p>
				<p><b><i class="fa fa-pencil"></i> Preco:</b> <?php echo $value['preco']; ?></p>
			
				<div class="group-btn">
				   <a target="_blank" href=" <?php echo INCLUDE_PATH ?>carroSingle?id=<?php echo $value['id']; ?>">Ver mais</a>
				</div><!--group-btn-->
			</div><!--body-box-->
		</div><!--box-single-->
	</div><!--box-single-wraper-->

	<?php } ?>

	<div class="clear"></div>

</div><!--boxes-->

</div><!--box-content-->

<?php

	echo $data;



?>