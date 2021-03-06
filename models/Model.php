<?php 

	include_once('Connection.php');
	class Model{
		public $conn;
		public $table;
		public $primary_key;
		public function __construct(){
			$connection =  new Connection();
			$this->conn = $connection->conn;
		}
	
		public function getAll(){

			$data = array();

			$query = "SELECT * FROM ".$this->table;

			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
				
			}




			return $data;
		}
		public function find($id){
			$query= 'SELECT * FROM '.$this->table." WHERE ".$this->primary_key.'=' .$id;
			$result= $this->conn-> query($query);

			
			return $result->fetch_assoc();

		}
		public function insert($data){


		$field = "";
		$values = "";

		foreach ($data as $key => $value) {
			$field.=$key.',';
			$values .="'".$value."',";
		}
		$field = trim($field,',');
		$values = trim($values,',');
		
	
			$query = "INSERT INTO ".$this->table."(".$field.") VALUES (".$values.")";
			
			
			return $this->conn-> query($query);
		}

		public function destroy($id){

			$query = " DELETE FROM " .$this->table. " WHERE " .$this->primary_key."=".$id;
			return $this->conn->query($query);
		}

		public function update($data,$id){

		$arr ="";
		foreach ($data as $key => $value) {
			
			$arr .= $key.' = '."'".$value."',";
		}
		$arr = trim($arr,',');
		
		$query ="UPDATE ".$this->table." SET ".$arr." WHERE ".$this->primary_key."=".$id;
		
		return $this->conn->query($query);
		
		}
	}

 ?>