<?php 
require_once 'model/Model.php';
class Post extends Model{
	protected $table = 'posts';
	public function getPost($id){
		//Câu lệnh hiển thị dữ liệu:
		$query = "SELECT * FROM posts WHERE id = $id ";

		//Thực thi câu lệnh:
		$result = $this->connection->query($query);

		//Trả về 1 bản ghi:
		$post = $result->fetch_assoc();


		//USER:
		if ($post['user_id']) {
		//Viết câu lệnh thêm dữ liệu:
			$user_query = "SELECT * FROM users WHERE id = " .$post['user_id'];
		//Thực thi câu lệnh:
			$user_result = $this->connection->query($user_query);
		//Trả về 1 bản ghi:
			$user = $user_result->fetch_assoc(  );
			$post['user']= $user;
		}

		//CATEGORY:
		if ($post['category_id']) {
		//Viết câu lệnh thêm dữ liệu:
			$category_query = "SELECT * FROM categories WHERE id = ".$post['category_id'];
		//Thực thi câu lệnh:
			$category_result = $this->connection->query($category_query);
		//Trả về 1 bản ghi:
			$category = $category_result->fetch_assoc();
			$post['category']= $category;
		}else{
			echo "NO!";
		}
		return $post;
	}
}

?>