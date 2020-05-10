
<?php 
session_start();
$mod = "home";
$act = "index";

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}

//Nhiệm vụ:
//1.Tìm ra controller_obj tương ứng
//2.Tìm ra method tương ứng trong controller

$class_name = ucfirst($mod) . "Controller";
$path = __DIR__ . "/controllers/" . $class_name .".php";
if (!file_exists($path)) {
	//Điều kiện không có file:
	echo "file $path không tồn tại";
	exit();
}
require_once($path);
$controller_obj = new $class_name();
if (!method_exists($controller_obj,$act)) {
	//Điều kiện không có method:	
	echo "Method không tồn tại";
}
$controller_obj->$act();


?>

