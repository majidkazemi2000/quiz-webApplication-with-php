<?php

class api_model extends Model {
	private $con;
	private $item_per_page = 12;

	function get_all_question($category,$level,$page,$api_key){
		if ($page != "" && is_numeric($page) && strlen($page) > 0 && strlen($page) < 12 && ($level == "1" || $level == "2" || $level == "3") && $category != "" && is_numeric($category) && strlen($category) > 0 && strlen($category) < 12 &&  $api_key != "" && strlen($api_key) > 0 && strlen($api_key) < 64){
			$connection = $this->get_connection();
			$user_ip = $_SERVER['REMOTE_ADDR'];

			$res1 = $connection->query("SELECT * FROM `api` WHERE `user_key`='$api_key' AND `user_ip`='$user_ip' AND `status`='1'");
			if ($res1 != null && $res1->num_rows > 0){
				$user = $res1->fetch_assoc();
				$pricing_type = $user['price_type'];
				$count_of_request = (int)$user['count_of_request'];
				$all_of_request = 0;
				switch ($pricing_type){
					case '1':
						$all_of_request = 1000;
						break;
					case '1':
						$all_of_request = 5000;
						break;
					case '1':
						$all_of_request = 15000;
						break;
					default:
						$all_of_request = 0;
				}
				if ($all_of_request != 0 && $count_of_request <= $all_of_request){

					$res = $connection->query("SELECT * FROM `question` WHERE `category`='$category' AND `level`='$level' AND `status`='1'");
					if ($res != null && $res->num_rows > 0){
						$all_question_number = $res->num_rows;
						$all_pages = ceil($all_question_number/$this->item_per_page);
						if ($page <= $all_pages){
							$start = ($page-1)*$this->item_per_page;

							$res2 = $connection->query("SELECT * FROM `question` WHERE `category`='$category' AND `level`='$level' AND `status`='1' LIMIT ".$start." , ".$this->item_per_page);
							if ($res2 != null && $res2->num_rows > 0){
								$new_request = ++$count_of_request;
								if ($connection->query("UPDATE `api` SET `count_of_request`='$new_request' WHERE `user_key`='$api_key'")){
									return $res2;
								}else{
									return false;
								}
							}else{
								return false;
							}
						}else{
							return false;
						}
					}else{
						return false;
					}


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
	function get_category($api_key){
		if ($api_key != "" && strlen($api_key) > 0 && strlen($api_key) < 64){
			$connection = $this->get_connection();

			$user_ip = $_SERVER['REMOTE_ADDR'];

			$res1 = $connection->query("SELECT * FROM `api` WHERE `user_ip`='$user_ip' AND `user_key`='$api_key' AND `status`='1'");
			if ($res1 != null && $res1->num_rows > 0){
				$user = $res1->fetch_assoc();
				$pricing_type = $user['price_type'];
				$count_of_request = (int)$user['count_of_request'];
				$all_of_request = 0;
				switch ($pricing_type){
					case '1':
						$all_of_request = 1000;
						break;
					case '1':
						$all_of_request = 5000;
						break;
					case '1':
						$all_of_request = 15000;
						break;
					default:
						$all_of_request = 0;
				}
				if ($all_of_request != 0 && $count_of_request <= $all_of_request){
					$res = $connection->query("SELECT * FROM `category`");
					if ($res != null && $res->num_rows > 0){
						$new_request = ++$count_of_request;
						if ($connection->query("UPDATE `api` SET `count_of_request`='$new_request' WHERE `user_key`='$api_key'")){
							return $res;
						}else{
							return false;
						}
					}else{
						return false;
					}
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
