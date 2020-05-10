<?php 
require_once'model/post.php';
require_once'model/category.php';
require_once'model/user.php';
require_once'BaseController.php';
require_once'model/Model.php';
require_once'model/helper.php';

class PostController extends BaseController{
	protected $model;

	function __construct(){
		$this->post_model = new Post();
	}
	public function list(){//index
		//Lấy dữ liệu:
		$posts = $this->post_model->all();
		//Gọi đến view:
		$this->view('post/list.php',['posts'=> $posts]);
	}
	
	public function create(){//create
		$user_model = new User();
		$category_model = new Category();

		$posts = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();

		$this->view('post/add.php',['posts'=> $posts,'categories' =>$categories,'users'=>$users]);
	}
	public function store(){//store
		$data = $_POST;
		$upload = new Upload();
		$data['thumbnail'] = "Upload/". $upload->file_upload("Upload","thumbnail",500000,array('JPG','png','jpg'));
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->insert($data);

		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}

	}
	public function detail(){
		$id = $_GET['id'];
		$user_model = new User();
		$category_model = new Category();
		$users = $user_model->all();
		$categories = $category_model->all();
		$post = $this->post_model->getById($id);
		$post = $this->post_model->getPost($id);
		$this->view('post/detail.php',['post'=> $post]);
		
	}
	public function edit(){//edit
		$user_model = new User();
		$category_model = new Category();

		$post = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();
		$id = $_GET['id'];
		$post = $this->post_model->getById($id);

		$this->view('post/edit.php',['post'=> $post,'categories' =>$categories,'users'=>$users]);
		
	}
	public function update(){//update
		$data = $_POST;
		$upload = new Upload();
		$data['thumbnail'] = "Upload/". $upload->file_upload("Upload","thumbnail",500000,array('JPG','png','jpg'));
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->update($data);
		if ($result) {
			setcookie("success","Cập nhật thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}else{
			setcookie("fail","Cập nhật thất bại",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}
	}
	public function destroy(){//destroy
		$id = $_GET['id'];
		$result =$this->post_model->Delete($id);
		if ($result) {
			setcookie("success","Xóa thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}else{
			setcookie("fail","Xóa thất bại",time()+3);
			$this->redirect('index.php?mod=post&act=list');
		}
	}
}

?>