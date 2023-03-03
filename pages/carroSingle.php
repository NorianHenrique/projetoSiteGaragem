<?php
	$parametros = \views\mainView::$par;
?>
<?php
	$id = (int)$_GET['id'];
	$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.veiculos` WHERE id = ?");
	$sql->execute(array($id));
	if($sql->rowCount() == 0){
		Painel::alert('erro','O veículo que você quer encontrar não existe!');
		die();
	}

	$infoProduto = $sql->fetch();

	$pegaImagens = MySql::conectar()->prepare("SELECT * FROM `tb_admin.imagens_veiculos` WHERE veiculo_id = $id");
	$pegaImagens->execute();
	$pegaImagens = $pegaImagens->fetch();

?>

<section class="carro-single">
     <div class="center">

            <div class="img-carro">
                 <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $pegaImagens['imagem']; ?>"/>
            </div><!--img-carro-->

            <div class="descricao-carro">
                   <h2><?php echo $infoProduto['nome'] ?></h2>
                   <p><?php echo $infoProduto['descricao'] ?></p>
                   <p class="preco">Preço: R$<?php echo Painel::convertMoney($infoProduto['preco']) ?></p>
                   <a class="whatsapp" href=""><i class="fa-brands fa-whatsapp"></i> Entre em contato com nosso WhatsApp</a>
            </div><!--descricao-carro-->
            <div class="clear"></div>
     </div>
</section><!--carro-single-->

<section class="imagens-carro-interno">
       <h2>Mais Modelos</h2>
   <div class="center">

      <?php
          $modelos = mondels\carroSingleMondel::getAutomovel();
          foreach($modelos as $key =>$value){ 
      ?>

          <div class="carro-imagens">
             <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem']; ?>"/>
          </div><!--carro-imagens-->

          <?php } ?>
   </div>
</section><!--imagens-carro-interno-->


