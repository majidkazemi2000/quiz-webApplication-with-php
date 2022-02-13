<?php

class ajax_register extends Controller {
	private $con;
	function get_setting(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `setting` WHERE `id`='1'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				echo $result['delete_one_choose']."*".$result['delete_two_choose']."*".$result['go_to_next_level']."*".$result['coin_100']."*".$result['coin_500']."*".$result['coin_1000']."*".$result['coin_2000']."*".$result['heart_3']."*".$result['heart_5']."*".$result['heart_10']."*".$result['heart_20'];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function sign_in(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_POST['username']) && isset($_POST['password'])){
			$connection = $this->get_connection();

			$username = $_POST['username'];
			$username = $this->clear($connection,$username);

			$password = $_POST['password'];
			$password = $this->clear($connection,$password);

			$email = "";
			$phone = "";


			if (is_numeric($username)){
				if (strlen($username) != 11 || $username == "" || substr( $username, 0, 2 ) != "09" || strlen($username) > 32){
					return "تلفن وارد شده نامعتبر است";
				}else{
					$phone = $username;
				}
			}elseif (!is_numeric($username)){
				if (strlen($username) < 6 || $username == "" || strpos($username,"@") === false || strpos($username,".") === false || substr($username,0,1) === "@" || substr($username,0,1) === "." || substr($username,strlen($username)-1,1) === "@" || substr($username,strlen($username)-1,1) === "." || strlen($username) > 32){
					return "ایمیل وارد شده نامعتبر است";
				}else{
					$email = $username;
				}

			}

			if (strlen($password) < 4 || $password == ""){
				return "رمز عبور نامعتبر است";
			}

			$password = md5($password);

			if ($email != "" && $phone == ""){
				$res = $connection->query("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");
				if ($res != null && $res->num_rows > 0){
					$result = $res->fetch_assoc();
					$_SESSION['user_name'] = $result['name'];
					$_SESSION['user_id'] = $result['id'];
					$_SESSION['user_ip'] = $result['ip'];
					return false;
				}else{
					return "شما در سایت ثبت نام نکرده اید";
				}
			}elseif ($phone != "" && $email == ""){
				$res = $connection->query("SELECT * FROM `user` WHERE `phone`='$phone' AND `password`='$password'");
				if ($res != null && $res->num_rows > 0){
					$result = $res->fetch_assoc();
					$_SESSION['user_name'] = $result['name'];
					$_SESSION['user_id'] = $result['id'];
					$_SESSION['user_ip'] = $result['ip'];
					return false;
				}else{
					return "شما در سایت ثبت نام نکرده اید";
				}
			}else{
				return "خطایی رخ داده است";
			}

		}else{
			return "اطلاعات وارد شده اشتباه است";
		}
	}
	function sign_up(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && $_POST['password']){
			$connection = $this->get_connection();

			$name = $_POST['name'];
			$name = $this->clear($connection,$name);

			$email = $_POST['email'];
			$email = $this->clear($connection,$email);

			$password = $_POST['password'];
			$password = $this->clear($connection,$password);

			$phone = $_POST['phone'];
			$phone = $this->clear($connection,$phone);

			$ip = $_SERVER['REMOTE_ADDR'];

			$res5 = $connection->query("SELECT * FROM `user` WHERE `email`='$email' OR `phone`='$phone'");
			if ($res5 != null && $res5->num_rows > 0){
				return "شما قبلا در سایت ثبت نام کرده اید";
			}

			if (strlen($email) < 6 || $email == "" || strpos($email,"@") === false || strpos($email,".") === false || substr($email,0,1) === "@" || substr($email,0,1) === "." || substr($email,strlen($email)-1,1) === "@" || substr($email,strlen($email)-1,1) === "."){
				return "ایمیل شما نامعتبر می باشد";
			}
			if (strlen($phone) != 11 || $phone == "" || !is_numeric($phone) || strlen($phone) > 11 || substr( $phone, 0, 2 ) != "09"){
				return "شماره تلفن شما صحیح نمی باشد";
			}

			if (strlen($password) < 4 || $password == "" || strlen($password) > 16){
				return "حداقل رمز عبور 4 کاراکتر می باشد و از حروف فارسی استفاده نشود";
			}

			$password = md5($password);
			$time = $this->get_time();

			$res = $connection->query("SELECT * FROM `user` WHERE `name`='$name' AND `phone`='$phone' AND `email`='$email' AND `password`='$password'");

			if ($res != null && $res->num_rows > 0){
				return "شما قبلا در سایت ثبت نام کرده اید";
			}else{
				if ($connection->query("INSERT INTO `user` (`name`,`email`,`phone`,`password`,`ip`,`time_register`) VALUES ('$name','$email','$phone','$password','$ip','$time')")){

					$res = $connection->query("SELECT * FROM `user` WHERE `name`='$name' AND `phone`='$phone' AND `email`='$email' AND `password`='$password'");
					if ($res != null && $res->num_rows > 0){
						$result = $res->fetch_assoc();
						$_SESSION['user_name'] = $name;
						$_SESSION['user_id'] = $result['id'];
						$_SESSION['user_ip'] = $ip;
						return false;
					}else{
						return "لطفا اطلاعات خود را دوباره کنترل کنید";
					}
				}else{
					return "لطفا اطلاعات خود را دوباره کنترل کنید";
				}
			}
		}else{
			return "لطفا اطلاعات خود را دوباره کنترل کنید";
		}
	}
	function logout(){
		if (isset($_POST['user']) && $_POST['user'] == 'user'){
			unset($_SESSION['user_name']);
			unset($_SESSION['user_id']);
			unset($_SESSION['user_ip']);
			return true;
		}else{
			return false;
		}

	}
	function get_user_info(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip'])){
			$connection = $this->get_connection();

			$id = $_SESSION['user_id'];
			$res = $connection->query("SELECT * FROM `user` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){

				$res1 = $connection->query("SELECT * FROM `user` ORDER BY `level` DESC");
				$res3 = $connection->query("SELECT COUNT(*) FROM `user`");
				$m = 1;
				if ($res1 != null && $res1->num_rows > 0 && $res3 != null && $res3->num_rows > 0){
					foreach ($res1 as $val){
						if ($val['id'] == $id){
							$level = $m;
							$result = $val;
						}else{
							$m++;
						}
					}
					$result3 = $res3->fetch_assoc();
					$all_user = $result3['COUNT(*)'];
					echo $result['level']."*".$result['coin']."*".$result['heart']."*".$result['correct_answer']."*".$result['mistake_answer']."*".$result['phone']."*".$result['email']."*".$all_user."*".$level;
				}else{
					return false;
				}
			}else{
				return false;
			}
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
	function get_time(){
		include_once 'calender.php';
		$dat = new persian_calendar();
		$date = $dat->date("Y/m/d");
		$tim=new DateTime("now",new DateTimeZone('Asia/Tehran'));
		$time=$tim->format('H:i:s');
		return $date." _ ".$time;
	}
	function get_date(){
		include_once 'calender.php';
		$dat = new persian_calendar();
		$date = $dat->date("Y/m/d");
		return $date;
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
