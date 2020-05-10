<?php 

class Connection{
	public $connection;
	function __construct(){
		$servername ='localhost';
		$username ='root';
		$pass='';
		$dbname = 'blogs';

		$conn = new mysqli($servername,$username,$pass,$dbname);
		mysqli_query($conn,"SET NAMES 'UTF8'");

	//Kiểm tra kết nối:
		if ($conn->connect_errno) {
			echo "Kết nối không thành công !" .$conn->connect_errno;
		}else{
	// echo "Kết nối thành công!";
		}
		$this->connection=$conn;
	}
}



?>
