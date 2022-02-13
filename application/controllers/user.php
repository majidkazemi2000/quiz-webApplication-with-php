<?php

class user extends Controller {

	function __construct()
	{
		if (!isset($_SESSION['user_name']) || !isset($_SESSION['user_id']) || !isset($_SESSION['user_ip'])){
			header("location://localhost/quiz/");
		}
	}

	function index()
	{
		$template = $this->loadView('user');
		$template->render();
	}
    
}

?>
