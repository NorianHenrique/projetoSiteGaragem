<?php
	namespace controllers;
	use \views\mainView;

	class carroSingleController
	{
		public function index(){
			
			mainView::render('carroSingle.php');
		}
	}
?>