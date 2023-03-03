<?php
	$id = $par[2];
	$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.automovel` WHERE id = ?");
	$sql->execute(array($id));

	$infoEmpreend = $sql->fetch();

	if($infoEmpreend['nome'] == ''){
		header('Location: '.INCLUDE_PATH_PAINEL);
		die();
	}

?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Veículos: <?php echo $infoEmpreend['nome'] ?></h2>
	<div class="info-item">

		<div class="row1">
				<div class="card-title"><i class="fa fa-rocket"></i> Imagem do Veículo:</div>
				<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $infoEmpreend['imagem'] ?>" />
		</div><!--row1-->

		<div class="row2">
				<div class="card-title"><i class="fa fa-rocket"></i> Informações do Veículo:</div>
				<p><i class="fa fa-pencil"></i> Nome do veículo: <?php echo $infoEmpreend['nome'] ?></p>
				<p><i class="fa fa-pencil"></i> Tipo: <?php echo ucfirst($infoEmpreend['tipo']) ?></p>
		</div><!--row2-->

		<div class="clear"></div>
	
	</div><!--info-item-->



	<div class="card-title"><i class="fa fa-rocket"></i> Cadastrar Veículo:</div>
	<form method="post" enctype="multipart/form-data">
	<?php
		if(isset($_POST['acao'])){
			$empreendId = $id;
			$nome = $_POST['nome'];
			$preco = Painel::formatarMoedaBd($_POST['preco']);

			$descricao = $_POST['descricao'];

			$imagens = array();
			$amountFiles = count($_FILES['imagens']['name']);

			$sucesso = true;

			if($_FILES['imagens']['name'][0] != ''){

			for($i =0; $i < $amountFiles; $i++){
				$imagemAtual = ['type'=>$_FILES['imagens']['type'][$i],
				'size'=>$_FILES['imagens']['size'][$i]];
				if(Painel::imagemValida($imagemAtual) == false){
					$sucesso = false;
					Painel::alert('erro','Uma das imagens selecionadas são inválidas!');
					break;
				}
			}

			}else{
				$sucesso = false;
				Painel::alert('erro','Você precisa selecionar pelo menos uma imagem!');
			}


			if($sucesso){
				//TODO: Cadastrar informacoes e imagens e realizar upload.
				for($i =0; $i < $amountFiles; $i++){
					$imagemAtual = ['tmp_name'=>$_FILES['imagens']['tmp_name'][$i],
						'name'=>$_FILES['imagens']['name'][$i]];
					$imagens[] = Painel::uploadFile($imagemAtual);
				}

				$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.veiculos` VALUES (null,?,?,?,?,0)");
				$sql->execute(array($empreendId,$nome,$preco,$descricao));
				$lastId = MySql::conectar()->lastInsertId();
				foreach ($imagens as $key => $value) {
					MySql::conectar()->exec("INSERT INTO `tb_admin.imagens_veiculos` VALUES (null,$lastId,'$value')");
				}
				Painel::alert('sucesso','O veículo foi cadastrado com sucesso!');
			}
		}

	?>
		<div class="form-group">
			<label>Nome:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição:</label>
			<textarea name="descricao"></textarea>
		</div><!--form-group-->
		
		<div class="form-group">
			<label>Preco:</label>
			<input type="text" name="preco">
		</div><!--form-group-->

		<div class="form-group">
			<label>Selecione Imagens:</label>
			<input type="file" multiple name="imagens[]">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar Veículo!">
		</div><!--form-group-->
	</form>
	<div class="wraper-table">
	<table>
		<tr style="background: #00bfa5;">
			<td>Nome</td>
			<td>Preço</td>
			<td>Descrição</td>
			<td>#</td>
		</tr>

		<?php
			$pegaImoveis = Painel::selectQuery('tb_admin.veiculos','automovel_id=?',array($id));
			foreach($pegaImoveis as $key=>$value){
			
			$value['preco'] = Painel::convertMoney($value['preco']);
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td>R$<?php echo $value['preco']; ?></td>
			<td><?php echo $value['descricao']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-veiculos?id=<?php echo $value['id']; ?>"><i class="fa fa-eye"></i> Visualizar</a></td>
		</tr>
		<?php } ?>
		

	</table>
	</div>
</div><!--box-content-->