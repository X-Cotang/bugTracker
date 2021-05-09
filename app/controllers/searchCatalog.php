<?php

	class searchCatalog extends Controller{
		public function __construct($session){
			parent::__construct($session);

            $catalog = isset($_GET["catalog"])?$_GET["catalog"]:"";

			$data = $this->Model->fetch("SELECT * FROM menu_list_blog WHERE catalog=?",[$catalog]);
           
			include "app/views/home.php";
		}
	}
	new searchCatalog($session);

?>