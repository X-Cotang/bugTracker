<?php

	class search extends Controller{
		public function __construct($session){
			parent::__construct($session);
            if(isset($_GET['keyword'])&&!empty($_GET['keyword'])){
                if(isset($_GET['type'])){
                    switch ($_GET['type']) {
                        case "all":
                            //die("SELECT * FROM menu_list_blog WHERE metaTitle LIKE '%".$_GET["keyword"]."%' OR description LIKE '%".$_GET["keyword"]."%'");
                            $data = $this->Model->fetch("SELECT * FROM menu_list_blog WHERE metaTitle LIKE ? OR description LIKE ?",['%'.$_GET["keyword"].'%','%'.$_GET["keyword"].'%']);
                            break;
                        case "hashtag":
                            $hashtag = $_GET["keyword"];
                            $data = $this->Model->fetch("SELECT * FROM blog_hashtag INNER JOIN hashtag ON blog_hashtag.hashtag = hashtag.hashtag INNER JOIN menu_list_blog ON menu_list_blog.token = blog_hashtag.token WHERE blog_hashtag.hashtag=?",[$hashtag]);
                            break;
                        case "catalog":
                            $catalog = $_GET["keyword"];
                            $data = $this->Model->fetch("SELECT * FROM menu_list_blog WHERE catalog=?",[$catalog]);
                            break;
                
                    }
                }
                if(isset($data)&&!empty($data)){
                    //print_r($data);
                    include "app/views/home.php";
                }else{
                    $result=false;
                    include "app/views/search.php";
                }
		    }else{
                include "app/views/search.php";
            }
            
	    }
    }
	new search($session);
    
?>