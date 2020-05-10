<?php 
require_once 'model/Connection.php';
// require_once 'model/helper.php';
class Model extends Connection{
	protected $table;
	public $connection;

	private $query = [
		"SELECT" => "",
		"WHERE" => "",
		"GET" => "",
		"ORDERBY" => "",
		"LIMIT" => ""
	];

	public function select($columns = []){
		if (empty($columns)) {
			$this->query["SELECT"] = "*";
		}else{
			foreach ($columns as $key => $value) {
				$this->query["SELECT"] .= $value .",";
			}
			$this->query["SELECT"] = substr_replace($this->query["SELECT"],"",-1);
		}
		return $this;
	}
	public function where1($conditions = []){

		foreach ($conditions as $key => $condition) {
			if (is_array($condition)) {
				$this->query["WHERE"] .= implode(" ",$condition);
			}else{
				$this->query["WHERE"] .= $key. " = " . $condition ." AND";
				// $this->query["WHERE"] .=  $condition ." AND";
			}
		}
		$this->query["WHERE"] = substr($this->query["WHERE"],0,-3);
		return $this;
	}
	public function where2($conditions = []){
		foreach ($conditions as $key => $condition) {
			if (is_array($condition)) {
				$this->query["WHERE"] .= implode(" ",$condition);

			}else{
				$this->query["WHERE"] .= $condition ." AND";
			}
		}
		$this->query["WHERE"] = substr($this->query["WHERE"],0,-3);
		return $this;
	}

	//SELECT * FROM posts ORDER BY(created_at) DESC LIMIT 5
	public function orderby($columns,$condition){
		$this->query["ORDERBY"] .= "(" . $columns .") ".  $condition;
		return $this;
	}
	public function limit($number){
		$this->query["LIMIT"] .= $number;
		return $this;
	}
	public function get(){
		$query = "";
		if ($this->query["SELECT"] == "" || $this->query["SELECT"] == "*") {
			$query .= "SELECT *";
		}else{
			$query .="SELECT " . $this->query["SELECT"];
		}
		$query .= " FROM ". $this->table;
		if ($this->query["WHERE"] != "") {
			$query .=" WHERE " . $this->query["WHERE"];
		}
		if ($this->query["ORDERBY"] != "") {
			$query .=" ORDER BY" . $this->query["ORDERBY"];
		}
		if ($this->query["LIMIT"] != "") {
			$query .=" LIMIT " . $this->query["LIMIT"];
		}
		$result = $this->connection->query($query);
		// die($query);
		$data =array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	function __construct(){
		$connect = new Connection();
		$this->connection = $connect->connection;
	}
	public function all(){
		//Câu lệnh truy vấn:
		$query = "SELECT * FROM $this->table" ;
		$result = $this->connection->query($query);

		$data =array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
		
	}
	public function update($data){
		
		$query = "UPDATE $this->table SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;
		
	}
	public function Delete($id){
		$query = "DELETE FROM $this->table WHERE id = $id";
		$result = $this->connection->query($query);
		return $result;
	}
	public function getById($id){
		$query = "SELECT * FROM $this->table WHERE id = ".$id;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);
		$data =$result->fetch_assoc();
		return $data;
	}
	public function add($data){
		
		$query = "INSERT INTO $this->table (";
		foreach ($data as $key => $value) {
			$query .= $key .",";
		}
		$query = substr_replace($query,")",-1);
		$query .=" VALUES (";
		foreach ($data as $key => $value) {
			$query .= "'" . $value . "'" . ",";
		}
		$query = substr_replace($query,")",-1);
		$result =$this->connection->query($query);
		return $result;
		
	}
	public function insert($data){
		//Viết câu lệnh thêm dữ liệu:
		$string_name = "";
		$string_value = "";
		$i=0;
		foreach ($data as $key => $value) {
			$i++;
			$string_name .=$key;
			if ($i!==count($data)) {
				$string_name .=", ";
			}
			$string_value .="'$value'";
			if ($i !==count($data)) {
				$string_value .=", ";
			}
		}
		$query = "INSERT INTO $this->table ($string_name) VALUES($string_value)";

		 //Thực Thi câu lệnh:
		$status = $this->connection->query($query);
		return $status; 
	}
	
}

?>