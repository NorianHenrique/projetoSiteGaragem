<section class="banner">
      
      <div class="texto-destaque-banner">
            <div class="center">
                 <h2>O carro dos seus sonhos esta aqui</h2>
                 <a href="carros#veiculos">Saber mais</a>
            </div>
      </div><!--texto-destaque-banner-->
</section><!--banner-->


<section class="sessao-destaques">
         <h2>Nossos diferenciais</h2>
    <div class="center">
         
          <div class="destaque-vendas">
               <div class="img-destaque">
                   <img src="<?php echo INCLUDE_PATH?>imagens/destaque1.jpg"/>
               </div><!--img-destaque-->
               <div class="texto-destaque">
                      <h3>Seu carro sempre limpo</h3>
                      <p><?php echo $infoSite['servico_limpeza']; ?></p>
               </div><!--texto-limpeza-->

          </div><!--destaque-linpeza-->

          <div class="destaque-vendas">
               <div class="img-destaque">
                    <img src="<?php echo INCLUDE_PATH?>imagens/destaque2.jpg"/>
               </div><!--img-destaque-->

               <div class="texto-destaque">
                      <h3>Compramos e vendemos o seu carro</h3>
                      <p><?php echo $infoSite['servico_recompra']; ?></p>
               </div><!--texto-limpeza-->

          </div><!--destaques-vendas-->
    </div>
</section><!--sessao-destaques-->

<section class="carros-destaques" id="carros-destaques">
	 <div class="center">
    
		    <h2>Nosso carros em destaques</h2>
          
			    <div class="carros-box">

                   <?php
                   $carros = mondels\homeMondel::getCarros();
                   foreach($carros as $key => $value){ 
                   $imagem = \MySql::conectar()->prepare("SELECT imagem FROM `tb_admin.imagens_veiculos` WHERE veiculo_id = $value[id]");
	              $imagem->execute();
	              $imagem = $imagem->fetch()['imagem'];    
                  
                   ?>
                 
			        <div class="carro-destaque-single">
                             <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem; ?>" />
				         <p><?php echo $value['nome'] ?></p>
					    <p><b>Preço: R$<?php echo Painel::convertMoney($value['preco']) ?></b></p>
                        
				    </div><!--carro-destaque-single-->

                        <?php  }?>
		  	</div><!--carros-box--->
                
               <div class="button">
                   <a class="visualizar" href="<?php echo INCLUDE_PATH?>carros#veiculos">Ver mais!</a>
                   <a class="whatsapp" href=""><i class="fa-brands fa-whatsapp"></i> Entre em contato com nosso WhatsApp</a>
                      <div class="clear"></div>
               </div><!--button-->

             
	  	</div>
	  </section><!--carros-destaques-->

     <section class="contato" id="contato">
            <div class="center">

                  <div class="form-contato">
                         <h2>Entre em contato</h2>
                         <form class="ajax-form" method="post" action="">
                               <input type="text" name="nome" placeholder="Nome"/>
                               <input type="number" name="telefone" placeholder="Telefone"/>
                               <input type="email" name="email" placeholder="Email"/>
                               <textarea name="mensagem" placeholder="Mensagem"></textarea>
                               <input type="submit" name="acao" value="Enviar!"/>
                         </form>
                  </div><!--form-contato-->

                  <div class="map">
                       <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Rua%20lavinia%20pereira%20de%20souza&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:center;height:500px;width:100%;margin-top: 30px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;border: 4px solid #e0e0e0;}</style></div></div>
                  </div><!--map-->

            </div>
     </section><!--contato-->