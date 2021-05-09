<?php

	class ListHashtag extends Controller{
		public function __construct($session){
			parent::__construct($session);

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["hashtag"];
					$this->Model->execute("insert into hashtag(hashtag) values('$name')");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=hashtag/list'>";
					break;

				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:"";
					echo "ahihi".$id;
					$this->Model->execute("delete from hashtag where id=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=hashtag/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from hashtag");

			include "views/hashtag/listView.php";
		}
	}
	new ListHashtag($session);

?>