<?php
	include "config/Token.php";
	class test extends Controller{
		public function __construct($session){
			parent::__construct($session);

            $hashtag = isset($_GET["hashtag"])?$_GET["hashtag"]:"";
			//$data = $this->Model->fetch("select * from menu_list_blog order by id desc");
			//$a=[$hashtag];
			//$data = $this->Model->fetch("SELECT * FROM blog_hashtag INNER JOIN hashtag ON blog_hashtag.hashtag = hashtag.hashtag INNER JOIN menu_list_blog ON menu_list_blog.token = blog_hashtag.token WHERE blog_hashtag.hashtag=?",[$hashtag]);
            
			/*
			// code dowr
			$data=$this->conn->prepare("SELECT * FROM blog_hashtag INNER JOIN hashtag ON blog_hashtag.hashtag = hashtag.hashtag INNER JOIN menu_list_blog ON menu_list_blog.token = blog_hashtag.token WHERE blog_hashtag.hashtag=:ht");
			$data->execute([':ht' => $hashtag]);
			//$data = $data->setFetchMode(PDO::FETCH_ASSOC);
            print_r($data->fetchAll(PDO::FETCH_ASSOC));
			*/
			//print_r($data);
			//$number = $this->Model->count("select * from menu_list_blog");
			/*
			$result = $this->conn->prepare("select * from menu_list_blog");
			$result->execute();
			print_r($result->rowCount());
			*/
			//$id=$this->Model->fetchOne("select id from menu_catalog where metaTitle='Cong-nghe-thong-tin'");
			//print_r($id);
			/*
			$data=$this->Model->fetchOne("select * from menu_catalog");
			print_r($data);
			echo $data["domains"]."</br>";
			$doamins=json_decode($data["domains"],true);
			print_r($doamins);
			if($data==""){
				echo "test";
				echo $data;
			}*/
		
			//echo system("ls");
			$token=new Token();
            $token=$token->generate(10);
			echo $token;
			//echo shell_exec("python3 Sublist3r/sublist3r.py -d unikey.org > /tmp/testsub.txt 2>&1 & echo $!");

            $this->pid =shell_exec("python3 Sublist3r/sublist3r.py -d unikey.org > /tmp/".$token.".txt 2>&1 & echo $!");
            
            //exit($this->pid);
			
			exit($this->pid);
            //include "app/views/home.php";
		}
	}
	new test($session);

?>