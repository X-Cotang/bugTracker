<?php	
	class Controller {
		public $model;
		public $urlView;
		public $conn;
		public function __construct($session){
			if(!$session){
				exit();
			}
			global $conn;
			$this->conn=$conn;
			$this->Model = new Model();
		}

		public function load($urlView, $data){
			extract($data);
			if(file_exists($urlView)){
				include $urlView;
			}
		}
	}
