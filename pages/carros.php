<?php
	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 6;
	
	$carros = Painel::selectAll('tb_admin.veiculos',($paginaAtual - 1) * $porPagina,$porPagina);
?>

<section class="sessao-carros">
            <h3>Nossos veículos</h3>

            <div class="form-pesquisar">
                 <h2>Encontre o seu veículo: <i class="fa fa-search"></i></h2>
                 <form method="post" action="">
                     <input placeholder="Procure por: Nome ou Preco " type="text" name="busca" >
		       <input type="submit" name="acao" value="Buscar!">
		 </form>
           
            </div><!--pesquisar-->

         

         <div class="center">

         <?php
                
                foreach($carros as $key => $value){ 
                $imagem = \MySql::conectar()->prepare("SELECT imagem FROM `tb_admin.imagens_veiculos` WHERE veiculo_id = $value[id]");
	         $imagem->execute();
	         $imagem = $imagem->fetch()['imagem'];    
                  
          ?>

            <div class="veiculos-loja" id="veiculos">
                   <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem; ?>" />
                   <h3><?php echo $value['nome'] ?></h3>
                   <p><b>Preço: R$<?php echo Painel::convertMoney($value['preco']) ?></b></p>
                   <a target="_blank" href=" <?php echo INCLUDE_PATH ?>carroSingle?id=<?php echo $value['id']; ?>">Ver mais</a>
                   
            </div><!--veiclos-loja-->
            <?php  }?>
       

         </div>

         <div class="paginacao">
                <?php
			$totalPaginas = ceil(count(Painel::selectAll('tb_admin.veiculos')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
		       if($i == $paginaAtual)
			  echo '<a class="page-selected" href="'.INCLUDE_PATH.'carros?pagina='.$i.'">'.$i.'</a>';
			else
		         echo '<a href="'.INCLUDE_PATH.'carros?pagina='.$i.'">'.$i.'</a>';
			}

		    ?>
	</div><!--paginacao-->
</section><!--sessao-carros-->

<section class="depoimentos" id="depoimentos">
<div class="center">
	<h2>Depoimentos</h2>
		 <div class="depoimentos-box">
               <?php
                 $depoimentos = mondels\carrosMondel::getDepoimentos();
                 foreach ($depoimentos as $key => $value){ 
                ?>
			<div class="depoimento-single">
			    <p><?php echo $value['depoimento'] ?></p>
			    <p><?php echo $value['nome']?></p>
			    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['foto'] ?>" />
			</div><!--depoimento-single-->

                     <?php } ?>

	

		</div><!--depoimentos-box-->
	</div>
</section><!--depoimentos-->