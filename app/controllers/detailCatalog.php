<?php

	class detailCatalog extends Controller{
		public function __construct($session){
			parent::__construct($session);

			$id = isset($_GET["id"])?$_GET["id"]:exit();
			$value = $this->Model->fetchOne("select * from menu_catalog where id=?",[$id]);
			$domains_test=$this->Model->fetch("select * from domains where catalog_id=?",[$id]);
			//exit("test");
			include "app/views/detailCatalog-test.php";
		}
	}
	new detailCatalog($session);

?>