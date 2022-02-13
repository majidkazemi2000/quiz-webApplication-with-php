<?php

class ajax_pay extends Controller {
	private $con;
	function pay(){
		if (isset($_POST['pay']) && $_POST['pay'] == 'pay' && isset($_POST['type']) && isset($_POST['count'])){
			$connection = $this->get_connection();
			$user_id = $_SESSION['user_id'];
			$type = $this->clear($connection,$_POST['type']);
			$count = $this->clear($connection,$_POST['count']);
			$u = $connection->query("SELECT * FROM `user` WHERE `id`='$user_id'");
			$user = array();
			if ($u != null && $u->num_rows > 0){
				$user = $u->fetch_assoc();
			}else{
				return '1';
			}

			if ($type != "coin" && $type != "heart"){
				return '2';
			}
			if (!is_numeric($count) || $count == ""){
				return '3';
			}

			$sett = $connection->query("SELECT * FROM `setting` WHERE `id`='1'");
			if ($sett != null && $sett->num_rows > 0){
				$setting = $sett->fetch_assoc();
				$index = $type."_".$count;
				$price = $setting[$index];

				$sum_buy = (int)$user['sum_buy'];
				$new_sum_buy = (int)$sum_buy + (int)$price;

				if ($price != ""){

					$MerchantID = '5e110a56-ada0-11ea-8e3e-000c295eb8fc'; //Required
					$Amount = $price; //Amount will be based on Toman - Required
					$Description = "پرداخت پول"; // Required
					$Email = ''; // Optional
					$Mobile = ''; // Optional
					$CallbackURL = 'http://bordvbakht.ir/user'; // Required

					$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

					$result = $client->PaymentRequest(
						[
							'MerchantID' => $MerchantID,
							'Amount' => $Amount,
							'Description' => $Description,
							'Email' => $Email,
							'Mobile' => $Mobile,
							'CallbackURL' => $CallbackURL,
						]
					);
					if ($result->Status == 100) {
						Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
					} else {
						return '4';
					}


					$MerchantID = '5e110a56-ada0-11ea-8e3e-000c295eb8fc';
					$Amount = $price; //Amount will be based on Toman
					$Authority = $_GET['Authority'];

					if ($_GET['Status'] == 'OK') {

						$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

						$result = $client->PaymentVerification(
							[
								'MerchantID' => $MerchantID,
								'Authority' => $Authority,
								'Amount' => $Amount,
							]
						);

						if ($result->Status == 100) {
							if ($type == "coin"){
								$old_coin = $user['coin'];
								$new_coin = (int)$old_coin + (int)$count;
								if ($connection->query("UPDATE `user` SET `coin`='$new_coin',`sum_buy`='$new_sum_buy' WHERE `id`='$user_id'")){
									$cause = $type."-".$count."/";
									$time = $this->get_time();
									if ($connection->query("INSERT INTO `pay` (`user_id`,`amount_pay`,`time`,`cause`) VALUES ('$user_id','$price','$time','$cause')")){
										return true;
									}else{
										return '5';
									}
								}else{
									return '6';
								}
							}elseif ($type == "heart"){

								$old_heart = $user['heart'];
								$new_heart = (int)$old_heart + (int)$count;
								if ($connection->query("UPDATE `user` SET `heart`='$new_heart',`sum_buy`='$new_sum_buy' WHERE `id`='$user_id'")){
									$cause = $type."-".$count."/";
									$time = $this->get_time();
									if ($connection->query("INSERT INTO `pay` (`user_id`,`amount_pay`,`time`,`cause`) VALUES ('$user_id','$price','$time','$cause')")){
										return '7';
									}else{
										return '8';
									}
								}else{
									return '9';
								}
							}else{
								return '10';
							}
						} else {
							echo 'Transaction failed. Status:'.$result->Status;
						}
					} else {
						echo 'Transaction canceled by user';
					}

				}else{
					return '11';
				}
			}else{
				return '12';
			}
		}else{
			return '13';
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
