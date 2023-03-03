<?php
	namespace controllers;
	use \views\mainView;

	class carrosController
	{
		public function index(){
			mainView::render('carros.php');
		}
	}
?>