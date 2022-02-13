<?php

class ajax_api extends Controller {
	private $con;
	function sign_in(){
		if (isset($_POST['api']) && $_POST['api'] == 'api' && isset($_POST['username']) && isset($_POST['password'])){
			$connection = $this->get_connection();

			$username = $_POST['username'];
			$username = $this->clear($connection,$username);

			$password = $_POST['password'];
			$password = $this->clear($connection,$password);

			if (strlen($username) < 6 || $username == "" || strpos($username,"@") === false || strpos($username,".") === false || substr($username,0,1) === "@" || substr($username,0,1) === "." || substr($username,strlen($username)-1,1) === "@" || substr($username,strlen($username)-1,1) === "." || strlen($username) > 32){
				return false;
			}

			if (strlen($password) < 4 || $password == ""){
				return false;
			}

			$password = md5($password);

			$res = $connection->query("SELECT * FROM `api` WHERE `user_email`='$username' AND `user_password`='$password'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				$_SESSION['api_user_key'] = $result['user_key'];
				return true;
			}else{
				return false;
			}

		}else{
			return false;
		}
	}
	function sign_up(){
		if (isset($_POST['api']) && $_POST['api'] == 'api' && isset($_POST['name']) && isset($_POST['email']) && $_POST['password']){
			$connection = $this->get_connection();

			$name = $_POST['name'];
			$name = $this->clear($connection,$name);

			$email = $_POST['email'];
			$email = $this->clear($connection,$email);

			$password = $_POST['password'];
			$password = $this->clear($connection,$password);


			$ip = $_SERVER['REMOTE_ADDR'];

			$code = $this->generatecode();

			$res5 = $connection->query("SELECT * FROM `api` WHERE `user_email`='$email' OR `user_key`='$code'");
			if ($res5 != null && $res5->num_rows > 0){
				return false;
			}

			if (strlen($name) < 3 || is_numeric($name)){
				return false;
			}

			if (strlen($email) < 6 || $email == "" || strpos($email,"@") === false || strpos($email,".") === false || substr($email,0,1) === "@" || substr($email,0,1) === "." || substr($email,strlen($email)-1,1) === "@" || substr($email,strlen($email)-1,1) === "."){
				return false;
			}

			if (strlen($password) < 4 || $password == "" || strlen($password) > 16){
				return false;
			}

			$password = md5($password);

			if ($connection->query("INSERT INTO `api` (`user_name`,`user_email`,`user_key`,`user_password`,`user_ip`) VALUES ('$name','$email','$code','$password','$ip')")){
				$_SESSION['api_user_key'] = $code;
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function logout(){
		if (isset($_POST['api']) && $_POST['api'] == 'api'){
			unset($_SESSION['api_user_key']);
			return true;
		}else{
			return false;
		}

	}


	function get_user_info(){
		if (isset($_POST['api']) && $_POST['api'] == 'api' && isset($_SESSION['api_user_key'])){
			$connection = $this->get_connection();

			$code = $_SESSION['api_user_key'];
			$res = $connection->query("SELECT * FROM `api` WHERE `user_key`='$code'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();

				$total = 0;
				$pricing = $result['price_type'];
				$price = "";
				switch ($pricing){
					case '0':
						$price = "اشتراکی وجود ندارد";
						$total = 0;
						break;
					case '1':
						$price = "طلایی";
						$total = 20000;
						break;
					case '2':
						$price = "نقره ای";
						$total = 10000;
						break;
					case '3':
						$price = "برنزی";
						$total = 1000;
						break;
					default:
						$price = "اشتراکی وجود ندارد";
						$total = 0;
						break;
				}
				echo $result['user_name']."*".$result['user_email']."*".$price."*".$result['sum_of_buy']."*".$code."*".$total."*".$result['count_of_request'];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	function generatecode(){
		$code = "";

		$arr = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
			"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
			"1","2","3","4","5","6","7","8","9","0");

		$c = rand(0,61);
		$num1 = $arr[$c];

		$c = rand(0,61);
		$num2 = $arr[$c];

		$c = rand(0,61);
		$num3 = $arr[$c];

		$c = rand(0,61);
		$num4 = $arr[$c];

		$c = rand(0,61);
		$num5 = $arr[$c];

		$c = rand(0,61);
		$num6 = $arr[$c];

		$c = rand(0,61);
		$num7 = $arr[$c];

		$c = rand(0,61);
		$num8 = $arr[$c];


		$code = $num1.$num2.$num3.$num4.$num5.$num6.$num7.$num8;

		return $code;
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
