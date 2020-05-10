<?php 
require_once 'model/post.php';
require_once 'model/Model.php';
require_once'model/user.php';
require_once 'model/helper.php';
require_once'BaseController.php';
class UserController extends BaseController{
	protected $model;

	function __construct(){
		$this->user_model = new User();
		$this->post_model = new Post();
	}
	public function list(){//index
		//Lấy dữ liệu:
		$users = $this->user_model->all();
		//Gọi đến view:
		$this->view('user/list.php',['users'=> $users]);
	}
	public function create(){//create

		$users = $this->user_model->all();

		$this->view('user/add.php',['users'=> $users]);
	}
	public function store(){//store
		
		$data = $_POST;
		$upload = new Upload();
		$data['password'] = md5($data['password']);
		$data['avatar'] = "Upload/" .$upload->file_upload("Upload","avatar",500000,array('JPG','png','jpg'));
		$result = $this->user_model->insert($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}

	}
	public function detail(){
		$id = $_GET['id'];
		$user = $this->user_model->getById($id);
		$posts = $this->post_model->select("")->where1(["user_id"=>$id])->get();
		// echo "<pre>";
		// print_r($posts);
		// echo "</pre>";
		// die('aaaaaa');
		$this->view('user/detail.php',['user'=> $user,'posts'=>$posts]);
		 
	}
	public function edit(){//edit

		$user = $this->user_model->all();
		$id = $_GET['id'];
		$user = $this->user_model->getById($id);

		$this->view('user/edit.php',['user'=> $user]);
	}
	public function update(){//update
		$data = $_POST;
		$upload = new Upload();
		$data['password'] = md5($data['password']);
		$data['avatar'] = "Upload/" .$upload->file_upload("Upload","avatar",500000,array('JPG','png','jpg'));	
		$result = $this->user_model->update($data);
		if ($result) {
			setcookie("success","Cập nhật thành công",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}else{
			setcookie("fail","Cập nhật thất bại",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}
	}
	public function destroy(){//destroy
		$id = $_GET['id'];
		$result =$this->user_model->Delete($id);
		if ($result) {
			setcookie("success","Xóa thành công",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}else{
			setcookie("fail","Xóa thất bại",time()+3);
			$this->redirect('index.php?mod=user&act=list');
		}
	}
}

?>