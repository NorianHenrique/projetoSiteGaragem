<?php
	namespace mondels;

	class homeMondel{
		  
		public static function getCarros(){
			$selectCarros = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.veiculos`");
			$selectCarros->execute();
			return $selectCarros->fetchAll();
		 }

	}
?>