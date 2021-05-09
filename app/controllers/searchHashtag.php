<?php

	class searchHashtag extends Controller{
		public function __construct($session){
			parent::__construct($session);

            $hashtag = isset($_GET["hashtag"])?$_GET["hashtag"]:"";

			$data = $this->Model->fetch("SELECT * FROM blog_hashtag INNER JOIN hashtag ON blog_hashtag.hashtag = hashtag.hashtag INNER JOIN menu_list_blog ON menu_list_blog.token = blog_hashtag.token WHERE blog_hashtag.hashtag=?",[$hashtag]);
           
			include "app/views/home.php";
		}
	}
	new searchHashtag($session);

?>