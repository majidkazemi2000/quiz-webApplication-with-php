<?php

class ajax_login_admin extends Controller {
	private $con;

	function sign_in(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['username']) && isset($_POST['password'])){
			$connection = $this->get_connection();
			$username = $_POST['username'];
			$username = $this->clear($connection,$username);

			$password = $_POST['password'];
			$password = $this->clear($connection,$password);


			$username = md5($username);
			$password = md5($password);
			$res = $connection->query("SELECT * FROM `main` WHERE `username`='$username' AND `password`='$password'");
			if ($res != null && $res->num_rows > 0){
				$_SESSION['admin_username'] = $username;
				$_SESSION['admin_password'] = $password;
				return true;
			}else{
				return false;
			}


		}else{
			return false;
		}
	}
	function logout(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			unset($_SESSION['admin_username']);
			unset($_SESSION['admin_password']);
			return true;
		}else{
			return false;
		}

	}
	function clear($con,$param){
		$param = trim($param);
		$param = htmlspecialchars($param);
		$param = mysqli_real_escape_string($con,$param);
		return $param;
	}
	function get_connection(){
		if ($this->con == null){
			$this->con = new mysqli("localhost","root","","quiz");
			mysqli_set_charset($this->con,"utf8");
		}
		return $this->con;
	}
}

?>
