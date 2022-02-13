<?php
class ajax_code extends Controller {

	function generatecode(){
		$code = "";
		$arr = array("1","2","3","4","5","6","7","8","9","0");

		$c = rand(0,9);
		$num1 = $arr[$c];

		$c = rand(0,9);
		$num2 = $arr[$c];

		$c = rand(0,9);
		$num3 = $arr[$c];

		$c = rand(0,9);
		$num4 = $arr[$c];

		$c = rand(0,9);
		$num5 = $arr[$c];

		$sms_code = $num1.$num2.$num3.$num4.$num5;

		return $sms_code;

	}

	function sendcode(){
		$con = new mysqli("localhost","root","","quiz");
		mysqli_set_charset($con,"utf8");

		if (!isset($_POST['email']) || !isset($_POST['api']) || $_POST['api'] != 'api'){
			return false;
		}

		$email = $_POST['email'];
		$email = $this->clear($email,$con);

		$res = $con->query("SELECT * FROM `api` WHERE `user_email`='$email'");
		if ($res != null && $res->num_rows > 0){
			return false;
		}

		if (strlen($email) < 6 || $email == "" || strpos($email,"@") === false || strpos($email,".") === false || substr($email,0,1) === "@" || substr($email,0,1) === "." || substr($email,strlen($email)-1,1) === "@" || substr($email,strlen($email)-1,1) === "." || strlen($email) > 32){
			return false;
		}else{
			//$code = $this->generatecode();
			//mail($email,"مسابقه اینترنتی برد و باخت","کد تایید شما : ".$code);
			$code = "12345";
			return $code;
		}
	}



	function clear($param,$con){
		$p=mysqli_real_escape_string($con,$param);
		$p=htmlspecialchars($p);
		$p=strip_tags($p);
		$p=trim($p);
		return $p;
	}

}

?>
