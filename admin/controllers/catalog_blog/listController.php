<?php

	class ListCatalogBlog extends Controller{
		public function __construct($session){
			parent::__construct($session);

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = (isset($_POST["topic"]))?$_POST["topic"]:exit();
					//$subdomain = (isset($_POST["subdomain"]))?$_POST["subdomain"]:exit();
					$metaTitle = RemoveString($name);
					$this->Model->execute("insert into menu_catalog(name, metaTitle) values(?,?)",[$name,$metaTitle]);
					
					// header("location: index.php?controller=catalog_blog/list");
					if(isset($_POST["domains"])){
						$id=$this->Model->fetchOne("select id from menu_catalog where metaTitle=?",[$metaTitle]);
						$this->addDomain(array_unique($_POST["domains"]),$id['id']);
					}
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;

				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from menu_catalog where id=?",[$id]);
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from menu_catalog");

			include "views/catalog_blog/listView.php";
		}
		private function addDomain($domains,$id){
			$data=$this->Model->fetch("select * from domains where catalog_id=?",[$id]);
			//print_r($data);
			//print_r($id);
			//print_r($domains);
			
			foreach($domains as $dm){
				//print_r($dm);
				$test=0;
				if(empty($data)&&!empty($dm)){echo "test";$this->Model->execute("insert into domains(catalog_id,domain) values(?,?)",[$id,$dm]);continue;}
				foreach($data as $dt){
					print_r($dt);
					//print_r($dm."aaa");
					if($dt['domain']==$dm){
						$test=1;
					}
				}
				if($test===0){$this->Model->execute("insert into domains(catalog_id,domain) values(?,?)",[$id,$dm]);}
			}
		}
	}
	new ListCatalogBlog($session);

?>