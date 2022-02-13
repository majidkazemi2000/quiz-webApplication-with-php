<?php

class api extends Controller {

	function register(){
		if (isset($_SESSION['api_user_key']) && $_SESSION['api_user_key'] != "" && strlen($_SESSION['api_user_key']) == 8){
			header("location://localhost/quiz/api/user");
		}else{
			$temp = $this->loadView('register_api');
			$temp->render();
		}
	}
	function user(){
		if (isset($_SESSION['api_user_key']) && $_SESSION['api_user_key'] != "" && strlen($_SESSION['api_user_key']) == 8){
			$temp = $this->loadView('api_user');
			$temp->render();
		}else{
			header("location://localhost/quiz/api/register");
		}
	}
	function question($category='',$level='',$page='',$api_key='')
	{
		if ($page != "" && is_numeric($page) && strlen($page) > 0 && strlen($page) < 12 && ($level == "1" || $level == "2" || $level == "3") && $category != "" && is_numeric($category) && strlen($category) > 0 && strlen($category) < 12 && $api_key != "" && strlen($api_key) > 0 && strlen($api_key) < 64){
			$model = $this->loadModel('api_model');
			$questions = $model->get_all_question($category,$level,$page,$api_key);
			if ($questions != false){
				$arr = array();
				$i = 0;
				foreach ($questions as $val){
					$arr[$i] = $val;
					++$i;
				}
				$result = json_encode($arr);
				echo $result;
			}else{
				//header("location://localhost/quiz/");
				echo "you may buy a service for api";
			}
		}else{
			//header("location://localhost/quiz/");
			echo "you may sign up to access api";
		}
	}
	function category($api_key=''){
		if ($api_key != "" && strlen($api_key) > 0 && strlen($api_key) < 64){
			$model = $this->loadModel('api_model');
			$categorys = $model->get_category($api_key);
			$i = 0;
			if ($categorys != false){
				$arr = array();
				foreach ($categorys as $val){
					$arr[$i] = $val;
					++$i;
				}
				$result = json_encode($arr);
				echo $result;
			}else{
				header("location://localhost/quiz/");
			}
		}else{
			header("location://localhost/quiz/");
		}
	}
}
?>
