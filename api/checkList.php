<?php
	include "../config/Config.php";
	include "../config/Model.php";
	class checkList{
		public function __construct(){
            header("Content-Type: application/json");
            $this->Model = new Model();
			if(isset($_GET["id"])&&$_SERVER["REQUEST_METHOD"] === "GET"){
                // sqli 
                $this->getChecklist($_GET["id"]);
            }else if($_SERVER["REQUEST_METHOD"] === "POST"){
                // sqli
                // Check laị checklist
                //echo file_get_contents('php://input');
                //exit();
                try {
                    $data = json_decode(file_get_contents('php://input'),true);
                }catch(Exception $e) {
                    exit('{"success": 0}');
                }
                $this->updateChecklist($data);
            }
            return 1;
		}
        private function getChecklist($id){
            
			$value = $this->Model->fetchOne("select checklist from menu_list_blog where token=?",[$id]);
            print_r($value["checklist"]);
            exit();
        }
        private function updateChecklist($data){
            $value = $this->Model->fetchOne("select checklist from menu_list_blog where token=?",[$data["id"]]);
            $checklist=json_decode($value["checklist"],true);
            ($checklist[$data["Checklist"]]===0) ? $checklist[$data["Checklist"]]=1 : $checklist[$data["Checklist"]] = 0;
            $checklist=json_encode($checklist);
            $this->Model->execute("update menu_list_blog set checklist=? where token=?",[$checklist,$data["id"]]);
            exit('{"success": 1}');
        }
	}
	new checkList();
?>