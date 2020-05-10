<?php
require_once 'model/user.php';
require_once 'controllers/BaseController.php';
class AuthController extends BaseController{
	protected $user;
	public function __construct(){
		$this->user = new User();
	}
	public function login(){
		if (!isset($_POST['btn_submit'])) {
			if (isset($_SESSION['user'])) {
				$this->redirect('/Project/mvc/index.php?mod=home&act=admin');
			}else{
				$this->view('auth/login.php');
			}
		}else{
			$email = $_POST['email'];
			$password = $_POST['password'];

			//Kiểm tra điều kiện:
			//kiểm tra đồng thời cả email và password:

			$users = $this->user->where(['email' => $email , 'password' => md5($password)]);
			if (count($users) == 0) {
				setcookie("error","Đăng nhập không thành công",time()+3,"/","",0);
				$this->redirect('/Project/mvc/index.php?mod=auth&act=login');
				exit();
			}else{
				//Đăng nhập thành công
				$user = $users[0];
				$_SESSION['user'] = $user;
				setcookie("success","Đăng nhập thành công",time()+3,"/","",0);
				$this->redirect('/Project/mvc/index.php?mod=home&act=admin');
			}
		}
	}
	
	public function register(){
		if (empty($_POST)) {
			$this->view('auth/register.php');
		}else{
			$data = $_POST;
			//Kiểm tra user đã tồn tại hay chưa?
			$users = $this->user->where("email",$data['email']);
			if (count($users)!==0) {
				setcookie("error","Email" .$data['email']. " đã tồn tại!",time()+3);
				$this->redirect('/Project/mvc/index.php?mod=auth&act=register');
			}else if ($data['password'] !== $data['repassword']) {
				setcookie("error","Mật khẩu nhập lại không khớp!",time()+3);
				$this->redirect('/Project/mvc/index.php?mod=auth&act=register');
			}else{
				unset($data['repassword']);

				$data['password'] = md5($data['password']);
				$data_insert = [
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => $data['password']
				];
				$insert = $this->user->insert($data_insert);
				if ($insert) {
				setcookie("succes","Đăng ký thành công!",time()+3,"/","",0);
				$this->redirect('/Project/mvc/index.php?mod=auth&act=login');
				}else{
				setcookie("error","Đăng ký không thành công!",time()+3,"/","",0);
				$this->redirect('/Project/mvc/index.php?mod=auth&act=register');
				}
			}
		}
	}
	public function logout(){
		unset($_SESSION['user']);
		// $this->view1('index.php');
		$this->redirect('index.php?mod=home&act=index');
	}
}

?>