<?php 
include_once('Model.php');
	class Category extends Model{
		public $table = "categories";
		public $primary_key = "id";

		public function products($category_id){

			$data = array();

			$query = "SELECT * FROM san_pham WHERE category_id = ".$category_id;
			$result = $this->conn->query($query);
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;	
				}
		

			return $data;
		}
	}
 ?>