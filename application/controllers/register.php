<?php

class register extends Controller {

	function __construct()
	{
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_id']) && isset($_SESSION['user_ip']) && $_SESSION['user_name'] != "" && $_SESSION['user_id'] != "" && $_SESSION['user_ip'] != ""){
			header("location://localhost/quiz/");
		}
	}

	function index()
	{
		$temp = $this->loadView('register');
		$temp->render();
	}
    
}

?>
