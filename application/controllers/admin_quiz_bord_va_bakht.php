<?php

class admin_quiz_bord_va_bakht extends Controller {

	function __construct()
	{
		if (!isset($_SESSION['admin_username']) || !isset($_SESSION['admin_password'])){
			header("location://localhost/quiz/");
		}
	}

	function index()
	{
		$template = $this->loadView('admin');
		$template->render();
	}
    
}

?>
