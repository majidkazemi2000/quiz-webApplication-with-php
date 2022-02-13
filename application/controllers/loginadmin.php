<?php

class loginadmin extends Controller {

	function __construct()
	{
		if (isset($_SESSION['admin_username']) && isset($_SESSION['admin_password']) && $_SESSION['admin_username'] != "" && $_SESSION['admin_password'] != ""){
			header("location://localhost/quiz/admin_quiz_bord_va_bakht");
		}
	}

	function index()
	{
		$template = $this->loadView('loginadmin');
		$template->render();
	}
    
}

?>
