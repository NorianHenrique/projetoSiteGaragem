<?php
	namespace mondels;

use MySql;

	class carroSingleMondel{


		 public static function getAutomovel(){
			$selectModelos = MySql::conectar()->prepare("SELECT * FROM `tb_admin.automovel`");
			$selectModelos->execute();
			return $selectModelos->fetchAll();
		 }

	}
?>