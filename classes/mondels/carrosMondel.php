<?php
	namespace mondels;

use MySql;

	class carrosMondel{

		  
		 public static function getDepoimentos(){
			$depoimentos = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos`");
			$depoimentos->execute();
			return $depoimentos->fetchAll();
		 }

		 public static function getCarros(){
			$selectCarros = MySql::conectar()->prepare("SELECT * FROM `tb_admin.veiculos`");
			$selectCarros->execute();
			return $selectCarros->fetchAll();
		 }

	}
?>