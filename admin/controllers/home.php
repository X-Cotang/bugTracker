<?php
	
	class home extends Controller{
		public function __construct($session){
			parent::__construct($session);
			include "views/home.php";
		}
	}
	new home($session);

?>