<?php
	include "../config/Config.php";
	include "../config/Model.php";
    include "../config/Token.php";
	class subDomain{
        // test
        //private $pid;
        //private $command;
		public function __construct(){
            header("Content-Type: application/json");
            $this->Model = new Model();
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                try {
                    
                    $data = json_decode(file_get_contents('php://input'),true);
                    
                    if(preg_match('/[a-zA-Z0-9\.\-]/', $data["domain"])==1){
                        
                        $this->scan($data["domain"]);
                    }
                }catch(Exception $e) {
                    exit('{"success": 0}');
                }
            }elseif(isset($_GET["id"])){
                $this->getScan();
            }else{
                $this->check();
            }
            //echo system("ls");
	
        }
        private function getScan(){
            // cần viết lại
            $data=$this->Model->fetch("select subdomain from menu_list_blog where token=?",[$_GET["id"]]);
            exit(json_encode($data));
        }

        private function scan($d){
            //$this->command = $command;
        
            $token=new Token();
            $token=$token->generate(10);
            //print_r($token);
            $domain=$this->Model->fetchOne("select * from domains where domain=?",[$d]);
            //print_r($domain);
            if($domain["pid"]==0||$domain["pid"]==1){
                $this->pid = shell_exec("python3 ../Sublist3r/sublist3r.py -b -d ".$d."> /tmp/".$token.".txt 2>&1 & echo $!");
                $this->Model->execute("UPDATE domains SET pid = ?, domain_token = ? WHERE domain = ?",[$this->pid,$token,$d]);
                exit('{"success": 1}');
            }else{
                exit('{"success": 0}');
            }
            
        }
        
    
        private function isRunning($pid)
        {
            try {
                print_r($pid);
                $result = shell_exec(sprintf('ps %d', $pid));
                if(count(preg_split("/\n/", $result)) > 2) {
                    return true;
                }
            } catch(Exception $e) {}
    
            return false;
        }
        private function check(){       
            $data=$this->Model->fetch("select * from domains");
            //print_r($data);
            foreach($data as $dt){
                //print_r($dt["pid"]);
                
                if($dt["pid"]!==0&&$dt["pid"]!==1){
                    //print_r($dt["pid"]);
                    if(!$this->isRunning($dt["pid"])){
                        $filename = "/tmp/".$dt["domain_token"].".txt";
                        print_r($filename);
                        $fp = fopen($filename, "r");
                        $contents = fread($fp, filesize($filename));//đọc file
                        $this->Model->execute("UPDATE domains SET subdomain=?,pid=? WHERE domain = ?",[$contents,1,$dt["domain"]]);
                        fclose($fp);//đóng file
                        if(unlink($filename)){
                            exit('{"success": 1}');
                        }else{
                            exit('{"success": 0}');
                        }
                    }
                }
            }
            exit('{"success": 0}');
        }
    }
	new subDomain();
?>