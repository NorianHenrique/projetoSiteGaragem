<?php
	$parametros = \views\mainView::$par;
?>
<?php
   $infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
   $infoSite->execute();
   $infoSite = $infoSite->fetch();
?>


<html>
    <head>
         <title><?php echo $infoSite['titulo'];?></title>
         <script src="https://kit.fontawesome.com/5506a4acb1.js" crossorigin="anonymous"></script>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
         <link href="<?php echo INCLUDE_PATH?>css/style.css" rel="stylesheet"/>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="author" content="Norian Henrique - NADSistemas">
         <meta name="keywords" content="veículos,carros,garagem,caminhonetes,pecas,acessorios.">
         <meta name="description" content="Garagem Turbo - Vendas de veículos e carros populares - Os melhores veículos da cidade.">
         <meta name="robots" content="index/follow">
    </head>

<body>

<base base="<?php echo INCLUDE_PATH?>" />

<div class="sucesso"><i class="fa-solid fa-check"></i> Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>imagens/ajax-loader.gif" />
</div><!--overlay-loading-->


<header>
      
             <div class="logo">
                  <h1><a href="<?php echo INCLUDE_PATH?>">Garagem Turbo</a></h1>
             </div><!--logo-->
               
                <nav class="menu-desktop">
                      <ul>
                          <li><a href="<?php echo INCLUDE_PATH?>">Home</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>carros">Carros</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>carros#depoimentos">Depoimentos</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>#contato">Contato</a></li>
                      </ul>
                      <div class="clear"></div>
                </nav><!--menu-destopkp-->

                <nav class="mobile">
                   <h3><i class="fa fa-bars"></i></h3>
                      <ul>
                          <li><a href="<?php echo INCLUDE_PATH?>">Home</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>carros">Carros</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>carros#depoimentos">Depoimentos</a></li>
                          <li><a href="<?php echo INCLUDE_PATH?>#contato">Contato</a></li>
                      </ul>
                    <div class="clear"></div>
                </nav><!--mobile-->

</header>


