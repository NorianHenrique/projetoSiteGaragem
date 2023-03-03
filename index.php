<?php
include('config.php');
Site::updateUsuarioOnline(); 
Site::contador(); 

$homeControllers = new controllers\homeController();
$carrosControllers = new controllers\carrosController();
$carroSingleControllers = new controllers\carroSingleController();
$pesquisarControllers = new controllers\pesquisarController();

Router::get('/',function() use ($homeControllers){
	
	$homeControllers->index();
});

Router::get('/carros',function() use ($carrosControllers){
	
	$carrosControllers->index();
});

Router::get('/carroSingle',function() use ($carroSingleControllers){
	
	$carroSingleControllers->index();
});

Router::get('/pesquisar',function() use ($pesquisarControllers){
	
	$pesquisarControllers->index();
})


?>
