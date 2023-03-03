<div class="box-content">

	<h2><i class="fa fa-pencil"></i> Cadastrar Veículo</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){

				$nome = $_POST['nome'];
				$tipo = $_POST['tipo'];
				$imagem = $_FILES['imagem'];

				if($_FILES['imagem']['name'] == ''){
					Painel::alert('erro','Você precisa selecionar uma imagem.');
				}else{

					//Imagem é válida?
					if(!(Painel::imagemValida($imagem))){
						Painel::alert('erro','Ops. Imagem inválida :(');
					}else{
						//Realizar cadastro e upload.
						$idImagem = Painel::uploadFile($imagem);
						$slug = Painel::generateSlug($nome);
						$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.automovel` VALUES (null,?,?,?,?,?)");
						$sql->execute(array($nome,$tipo,$idImagem,$slug,0));
						$lastId = MySql::conectar()->lastInsertId();
						MySql::conectar()->exec("UPDATE `tb_admin.automovel` SET order_id = $lastId WHERE id = $lastId");
						Painel::alert('sucesso','Cadastro do veículo foi feito com sucesso!');
					}
				}
			}
		?>
		
		<div class="form-group">
			<label>Nome:</label>
			<input required type="text" name="nome" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Tipo:</label>
			<select name="tipo">
				<option value="carro">Carro</option>
				<option value="caminhonete">Caminhonete</option>
			</select>
		</div><!--form-group-->

		
		<div class="form-group">
			<label>Imagem:</label>
			<input type="file" name="imagem">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar">
		</div><!--form-group-->

	</form>

</div><!--box-content-->