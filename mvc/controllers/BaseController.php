<?php 

class BaseController{
	public function view($path,$data = []){
		if (!empty($data)) {
			extract($data);
		}
		include('views/backend/'.$path);
	}
	public function view1($path,$data = []){
		if (!empty($data)) {
			extract($data);
		}
		include('views/frontend/'.$path);
	}
	public function redirect($path){
		header('Location: ' .$path);
	}
}

?>