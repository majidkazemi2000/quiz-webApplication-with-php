<?php

class ajax_quiz extends Controller {
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
	function get_question(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip']) && isset($_SESSION['category'])){
			$connection = $this->get_connection();
			$category = $_SESSION['category'];
			$user_id = $_SESSION['user_id'];
			$results = array();
			$anss = array();


			$res1 = $connection->query("SELECT * FROM `question` WHERE `category`='$category' AND `level`='1' AND `status`='1'");
			$res2 = $connection->query("SELECT * FROM `question` WHERE `category`='$category' AND `level`='2' AND `status`='1'");
			$res3 = $connection->query("SELECT * FROM `question` WHERE `category`='$category' AND `level`='3' AND `status`='1'");


			$ans = $connection->query("SELECT * FROM `answers` WHERE `user_id`='$user_id'");
			if ($ans != null && $ans->num_rows > 0){
				$an = $ans->fetch_assoc();
				$str_ans = $an['answers'];
				$anss = explode(",",$str_ans);
			}else{
				$anss = array();
			}

			$arr_id1 = array();
			$m = 0;
			foreach ($res1 as $val){
				$arr_id1[$m] = $val['id'];
				 $m++;
			}

			$end = 0;
			if (sizeof($anss) > 0){
				$random_number5 = rand(0,(sizeof($arr_id1)-1));
				while (array_search($arr_id1[$random_number5],$anss)){
					$random_number5 = rand(0,(sizeof($arr_id1)-1));
					$end++;
					if ($end == sizeof($arr_id1)){
						return false;
					}
				}
				$id1 = $arr_id1[$random_number5];
			}else{
				$random_number5 = rand(0,sizeof($arr_id1)-1);
				$id1 = $arr_id1[$random_number5];
			}

			$arr_id2 = array();
			$m = 0;
			foreach ($res2 as $val){
				$arr_id2[$m] = $val['id'];
				$m++;
			}

			$random_number1 = 0;
			$random_number2 = 0;
			$end1 = 0;
			$end2 = 0;
			if (sizeof($anss) > 0){
				$random_number1 = rand(0,(floor(sizeof($arr_id2)/2)-1));
				while (array_search($arr_id2[$random_number1],$anss)){
					$random_number1 = rand(0,(floor(sizeof($arr_id2)/2)-1));
					$end1++;
					if ($end1 == sizeof($arr_id2)){
						return false;
					}
				}

				$random_number2 = rand(floor(sizeof($arr_id2)/2),(sizeof($arr_id2)-1));
				while (array_search($arr_id2[$random_number2],$anss)){
					$random_number2 = rand(floor(sizeof($arr_id2)/2),(sizeof($arr_id2)-1));
					$end2++;
					if ($end2 == sizeof($arr_id2)){
						return false;
					}
				}
				$id2 = $arr_id2[$random_number1];
				$id3 = $arr_id2[$random_number2];
			}else{
				$random_number1 = rand(0,(floor(sizeof($arr_id2)/2)-1));
				$random_number2 = rand(floor(sizeof($arr_id2)/2),(sizeof($arr_id2)-1));
				$id2 = $arr_id2[$random_number1];
				$id3 = $arr_id2[$random_number2];
			}

			$arr_id3 = array();
			$m = 0;
			foreach ($res3 as $val){
				$arr_id3[$m] = $val['id'];
				$m++;
			}

			$end3 = 0;
			if (sizeof($anss) > 0){
				$random_number = rand(0,(sizeof($arr_id3)-1));
				while (array_search($arr_id3[$random_number],$anss)){
					$random_number = rand(0,(sizeof($arr_id3)-1));
					$end3++;
					if ($end3 == sizeof($arr_id3)){
						return false;
					}
				}
				$id4 = $arr_id3[$random_number];
			}else{
				$random_number = rand(0,sizeof($arr_id3)-1);
				$id4 = $arr_id3[$random_number];
			}
			$ans1 = $connection->query("SELECT * FROM `question` WHERE `id`='$id1'");
			$ans2 = $connection->query("SELECT * FROM `question` WHERE `id`='$id2'");
			$ans3 = $connection->query("SELECT * FROM `question` WHERE `id`='$id3'");
			$ans4 = $connection->query("SELECT * FROM `question` WHERE `id`='$id4'");

			if ($ans1 != null && $ans1->num_rows > 0 && $ans2 != null && $ans2->num_rows > 0 && $ans3 != null && $ans3->num_rows > 0 && $ans4 != null && $ans4->num_rows > 0){
				$result1 = $ans1->fetch_assoc();
				$result2 = $ans2->fetch_assoc();
				$result3 = $ans3->fetch_assoc();
				$result4 = $ans4->fetch_assoc();

				$answers = array();
				$answers[0] = $result1;
				$answers[1] = $result2;
				$answers[2] = $result3;
				$answers[3] = $result4;

				echo json_encode($answers);

			}else{
				return false;
			}
		}
	}
	function complete(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip']) && isset($_SESSION['category'])) {
			$connection = $this->get_connection();
			$user_id = $_SESSION['user_id'];
			$res = $connection->query("SELECT * FROM `user` WHERE `id`='$user_id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				$old_level = (int)$result['level'];
				$new_level = $old_level + 1;
				if ($connection->query("UPDATE `user` SET `level`='$new_level' WHERE `id`='$user_id'")){
					$res1 = $connection->query("SELECT * FROM `user` ORDER BY `level` DESC");
					$m = 1;
					if ($res1 != null && $res1->num_rows > 0){
						foreach ($res1 as $val){
							if ($val['id'] == $user_id){
								$place = $m;
							}else{
								$m++;
							}
						}
						return $new_level."/".$place;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
			return true;
		}else{
			return false;
		}
	}
	function help(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip']) && isset($_SESSION['category']) && isset($_POST['type']) && isset($_POST['question']) && isset($_POST['ans'])){
		 	$connection = $this->get_connection();
		 	$question_id = $_POST['question'];
		 	$correct_choose = $_POST['ans'];
			$user_id = $_SESSION['user_id'];
			$numbers = array('1','2','3','4');

		 	$res2 = $connection->query("SELECT * FROM `question` WHERE `id`='$question_id'");
		 	if ($res2 != null && $res2->num_rows > 0){
		 		$question = $res2->fetch_assoc();
			}else{
		 		return false;
			}

		 	$correct_ans = $question['correct_choose'];

			switch ($_POST['type']){
				case '1':
					$type = 'delete_one';
					break;
				case '2':
					$type = 'delete_two';
					break;
				case '3':
					$type = 'next_level';
					break;
				default:
					$type = '';
			}

			$res = $connection->query("SELECT * FROM `user` WHERE `id`='$user_id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				$coin = $result['coin'];
				$heart = $result['heart'];
				$level = $result['level'];

				$res1 = $connection->query("SELECT * FROM `setting` WHERE `id`='1'");
				$result1 = $res1->fetch_assoc();
				if ($type == "delete_one"){
					if ((int)$coin >= (int)$result1['delete_one_choose']){
						$new_coin = (int)$coin - (int)$result1['delete_one_choose'];
						if ($connection->query("UPDATE `user` SET `coin`='$new_coin' WHERE `id`='$user_id'")){
							$return_choose = '';
							switch ($correct_ans){
								case '1':
									$return_choose = '3';
									break;
								case '2':
									$return_choose = '4';
									break;
								case '3':
									$return_choose = '1';
									break;
								case '4':
									$return_choose = '2';
									break;
								default:
									$return_choose = '';
							}
							echo $return_choose;
						}else{
							return false;
						}
					}else{
						return false;
					}
				}elseif ($type == "delete_two"){
					if ((int)$coin >= $result1['delete_two_choose']){
						$new_coin = (int)$coin - (int)$result1['delete_two_choose'];
						if ($connection->query("UPDATE `user` SET `coin`='$new_coin' WHERE `id`='$user_id'")){
							$return_choose1 = '';
							$return_choose2 = '';
							switch ($correct_ans){
								case '1':
									$return_choose1 = '2';
									$return_choose2 = '4';
									break;
								case '2':
									$return_choose1 = '1';
									$return_choose2 = '3';
									break;
								case '3':
									$return_choose1 = '2';
									$return_choose2 = '4';
									break;
								case '4':
									$return_choose1 = '1';
									$return_choose2 = '3';
									break;
								default:
									$return_choose1 = '';
									$return_choose2 = '';
									break;
							}
							echo $return_choose1."/".$return_choose2;
						}else{
							return false;
						}
					}else{
						return false;
					}
				}elseif ($type == "next_level"){
					if ($result1['go_to_next_level'] <= $heart){
						$new_heart = (int)$heart - (int)$result1['go_to_next_level'];
						if ($connection->query("UPDATE `user` SET `heart`='$new_heart' WHERE `id`='$user_id'")){
							return true;
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
	function retry(){
		if (isset($_POST['user']) && $_POST['user'] == 'user'){
			unset($_SESSION['category']);
			return true;
		}else{
			return false;
		}
	}
	function update_answer(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_ip']) && isset($_SESSION['user_name']) && isset($_SESSION['category']) && isset($_POST['question']) && isset($_POST['type'])){
			$connection = $this->get_connection();
			$user_id = $_SESSION['user_id'];
			$question = $_POST['question'];
			$type = $_POST['type'];

			if ($type == '0'){
				//update mistake
				$res1 = $connection->query("SELECT * FROM `question` WHERE `id`='$question'");
				$res2 =	$connection->query("SELECT * FROM `user` WHERE `id`='$user_id'");
				if ($res1 != null && $res1->num_rows > 0 && $res2 != null && $res2->num_rows > 0){
					$user = $res2->fetch_assoc();
					$qu = $res1->fetch_assoc();
					$old_question = (int)$qu['mistake_answer'];
					++$old_question;

					$old_user = (int)$user['mistake_answer'];
					++$old_user;

					if ($connection->query("UPDATE `user` SET `mistake_answer`='$old_user' WHERE `id`='$user_id'")){
						if ($connection->query("UPDATE `question` SET `mistake_answer`='$old_question' WHERE `id`='$question'")){
							return true;
						}else{
							return false;
						}
					}else{
						return false;
					}
				}else{
					return false;
				}
			}elseif ($type == '1'){
				//update correct
				$res1 = $connection->query("SELECT * FROM `question` WHERE `id`='$question'");
				$res2 =	$connection->query("SELECT * FROM `user` WHERE `id`='$user_id'");
				if ($res1 != null && $res1->num_rows > 0 && $res2 != null && $res2->num_rows > 0){
					$user = $res2->fetch_assoc();
					$qu = $res1->fetch_assoc();
					$old_question = (int)$qu['correct_answer'];
					++$old_question;

					$old_user = (int)$user['correct_answer'];
					++$old_user;

					if ($connection->query("UPDATE `user` SET `correct_answer`='$old_user' WHERE `id`='$user_id'")){
						if ($connection->query("UPDATE `question` SET `correct_answer`='$old_question' WHERE `id`='$question'")){

							$ans = $connection->query("SELECT * FROM `answers` WHERE `user_id`='$user_id'");
							if ($ans != null && $ans->num_rows > 0){
								//update
								$anss = $ans->fetch_assoc();
								$quess = $anss['answers'];
								$quess .= $question.",";
								if ($connection->query("UPDATE `answers` SET `answers`='$quess' WHERE `user_id`='$user_id'")){
									return true;
								}else{
									return false;
								}

							}else{
								$quess = $question.",";
								if ($connection->query("INSERT INTO `answers` (`user_id`,`answers`) VALUES ('$user_id','$quess')")){
									return true;
								}else{
									return false;
								}
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
	function get_user_info(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_ip']) && isset($_SESSION['category'])){
			$connection = $this->get_connection();

			$id = $_SESSION['user_id'];
			$res = $connection->query("SELECT * FROM `user` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				$coin = ($result['coin'] != '0') ? $result['coin'] : '0';
				$heart = ($result['heart'] != '0') ? $result['heart'] : '0';
				$level = ($result['level'] != '0') ? $result['level'] : '0';
				echo $level."*".$coin."*".$heart;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function start_match(){
		if (isset($_POST['user']) && $_POST['user'] == 'user' && isset($_SESSION['user_name']) && isset($_SESSION['user_id']) && isset($_SESSION['user_ip']) && isset($_POST['category']) && is_numeric($_POST['category']) && strlen($_POST['category']) > 0 && strlen($_POST['category']) < 6){
			$connection = $this->get_connection();
			$category = $this->clear($connection,$_POST['category']);
			$res = $connection->query("SELECT * FROM `category` WHERE `id`='$category'");
			if ($res != null && $res->num_rows > 0){
				$_SESSION['category'] = $category;
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_category(){
		if (isset($_POST['user']) && $_POST['user'] == 'user'){
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `category`");
			if ($res != null && $res->num_rows > 0){
				foreach ($res as $val){
					$name = $val['name'];
					$img = $val['img'];
					$id = $val['id'];

					$img_address = "";
					if ($img != ""){
						$img_address = "static/images/category/".$img;
					}else{
						$img_address = "static/images/not-found.jpg";
 					}

					$red = rand(0,150);
					$green = rand(0,150);
					$blue = rand(0,150);

					echo "<div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center\">
							<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center match_item\" href=\"$id\" style=\"background: rgb($red,$green,$blue);\">
								<p style='color: white;'>$name</p>
								<img src=\"$img_address\" alt=\"NOT FOUND\">
							</div>
                		</div>";
				}
			}else{
				return false;
			}
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
