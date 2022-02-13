<?php

class contest extends Controller {

	function __construct()
	{
		if (!isset($_SESSION['user_name']) || !isset($_SESSION['user_id']) || !isset($_SESSION['user_ip']) || !isset($_SESSION['category'])){
			header("location://localhost/quiz/");
		}
	}

	function index()
	{
		$template = $this->loadView('quiz');
		$template->render();
	}
    
}

?>
