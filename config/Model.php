<?php
	class Model {
		public function fetch($sql,$arr=[]){
			/*
			global $con;
			
			$result = mysqli_query($con,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
			*/
			global $conn;
			//print_r($arr);
			$data=$conn->prepare($sql);
			$data->execute($arr);
            $data=$data->fetchAll(PDO::FETCH_ASSOC);
			return $data;
		}
		
		public function fetchOne($sql,$arr=[]){
			/*
			global $con;
			$result = mysqli_query($con,$sql);
			$rows = mysqli_fetch_array($result);
			return $rows;
			*/
			global $conn;
			$data=$conn->prepare($sql);
			$data->execute($arr);
            $data=$data->fetch(PDO::FETCH_ASSOC);
			return $data;
		}

		public function execute($sql,$arr=[]){
			/*
			global $con;
			mysqli_query($con,$sql);
			*/
			global $conn;
			$data=$conn->prepare($sql);
			$data->execute($arr);
			return 1;
		}

		public function count($sql){
			/*
			global $con;
			$result = mysqli_query($con,$sql);
			return mysqli_num_rows($result);
			*/
			global $conn;
			$result = $conn->prepare($sql);
			$result->execute();
			return $result->rowCount();
		}

		public function getId($idName, $tblName){
			/*
			global $con;
			$result = mysqli_query($con,"select $idName from $tblName order by $idName desc limit 0,1");
			$rows = mysqli_fetch_array($reulst);
			return $rows;
			*/
			global $conn;
			$data=$conn->prepare("select :idName from :tblName order by :idName desc limit 0,1");
			$data->execute([":idName"=>$idName,":tblName"=>$tblName]);
            $data=$data->fetch(PDO::FETCH_ASSOC);
			return $data;
		}
	}
