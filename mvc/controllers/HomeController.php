<?php
require_once 'model/Connection.php';
require_once 'model/Model.php';
require_once "model/post.php";
require_once "model/category.php";
require_once "model/user.php"; 
require_once 'controllers/BaseController.php';
class HomeController extends BaseController{
	function __construct(){
		$this->category_model = new Category();
		$this->model = new Category();

		$this->post_model = new Post();
		$this->post_model2 = new Post();
		$this->post_model3 = new Post();
		$this->post_model4 = new Post();
		$this->post_model5 = new Post();
		$this->post_cate = new Post();
		$this->arrs_list = new Post();

	}
	public function index(){
		$categories = $this->category_model->all();
		// $posts_trending = $this->post_model->select("")->orderby("created_at","DESC")->limit(1)->get();

		$new_posts = $this->post_model->select("")->where2(["view_count > 30"])->orderby("view_count","ASC")->limit(4)->get();
		// echo "<pre>";
		// print_r($new_posts);
		// echo "</pre>";
		// die('aaaaaaaaa');
		$posts_trending = $this->post_model2->select("")->orderby("created_at","DESC")->limit(1)->get();	
		$posts = $this->post_model3->select("")->orderby("created_at","ASC")->limit(5)->get();
		$news = $this->post_model5->select("")->orderby("id","DESC")->limit(5)->get();
		$most_popular = $this->post_model4->select("")->where2(['view_count < 20'])->limit(4)->get();

		$this->view1('24-news/index.php',[
			'categories'=>$categories,
			'posts_trending'=>$posts_trending,
			'new_posts'=>$new_posts,
			'posts'=>$posts,
			'news'=>$news,
			'most_popular'=>$most_popular
		]);
	}
	public function admin(){
		$this->view('home.php');
	}
	public function blog(){
		$categories = $this->category_model->select("")->get();
		$posts_trending = $this->post_model->select("")->where2(['view_count > 10'])->limit(4)->get();
		
		$this->view1('24-news/blog.php',[
			'categories'=>$categories,
			'posts_trending'=>$posts_trending,]);
	}

	public function single(){
		$id = $_GET['id'];
		$user_model = new User();
		$category_model = new Category();
		$users = $user_model->all();
		$categories = $category_model->all();
		$post = $this->post_model->getById($id);
		$post = $this->post_model->getPost($id);
		$categories = $this->category_model->select("")->get();
		$posts_trending = $this->post_model->select("")->where2(['view_count > 10'])->limit(4)->get();
		$this->view1('24-news/single.php',[
			'categories'=>$categories,
			'posts_trending'=>$posts_trending,
			'post'=>$post
		]);
	}
	public function contact(){
		$categories = $this->category_model->select("")->get();
		$this->view1('24-news/Contact_us.php',[
			'categories'=>$categories
		]);
	}
	public function classify_post(){
		$id = $_GET['id'];
		$category_class = $this->model->select(["name"])->where1(["id"=>$id])->get();
		$posts_cate = $this->post_cate->select("")->where1(["category_id"=>"$id"])->get();
		$categories = $this->category_model->select("")->get();
		$posts_trending = $this->post_model->select("")->where2(['view_count > 10'])->limit(4)->get();

		$this->view1('24-news/category.php',[
			'categories'=>$categories, 
			'posts_trending'=>$posts_trending, 
			'category_class'=>$category_class, 
			'posts_cate'=>$posts_cate
		]);
	}

}

?>