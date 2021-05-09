<?php

	class EditHashtag extends Controller{
		public function __construct($session){
			parent::__construct($session);

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$name = $_POST["hashtag"];
					$metaTitle = RemoveString($name);
					$this->Model->execute("update hashtag set name='$name' where id=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from hashtag where id=$id");
					break;
			}


			include "views/hashtag/editView.php";
		}
	}
	new EditHashtag($session);
	
?>