<?php
	namespace controllers;
	use \views\mainView;

	class pesquisarController
	{
		public function index(){
			
			mainView::render('pesquisar.php');
		}
	}
?>