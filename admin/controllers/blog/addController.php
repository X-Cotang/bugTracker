<?php
	
	class AddBlog extends Controller{
		public function __construct($session){
			parent::__construct($session);
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$description = $_POST["description"];
					$content = $_POST["content"];
					$metaTitle = RemoveString($name);
					$dateTime = date("d/m/Y");
					$catalog = $_POST["catalog"];
					$token = new Token();
					$strToken = $token->generate(10);
					//cần code hàm check token
					
					
					
					if($_FILES["image"]["name"]){
						$image = "public/images/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/".time().$_FILES["image"]["name"]);
					}

					$this->Model->execute("insert into menu_list_blog(avatar, name, metaTitle, catalog, description, content, token, dateTime) values('$image','$name', '$metaTitle', $catalog, '$description', '$content', '$strToken', '$dateTime')");
					if(isset($_POST['hashtag'])){
						$hashtag=array_unique($_POST['hashtag']);
						print_r($hashtag);
						$this->addHashtag($hashtag);
						print_r($hashtag);
						foreach($hashtag as $ht){
							$this->Model->execute("insert into blog_hashtag(hashtag,token) values('$ht','$strToken')");
						}
					}
					
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=blog/list'>";
					break;
			}

			include "views/blog/addView.php";
		}
		public function addHashtag($hashtag){
			foreach($hashtag as $ht){
				$data=$this->Model->fetchOne("select * from hashtag where hashtag='$ht'");
				//print_r($data);
				if($data==""){
					// them hashtag nếu chưa có
					//echo "test";
					$this->Model->execute("insert into hashtag(hashtag) values('$ht')");
				}

			}
		}

	}
	new AddBlog($session);

?>