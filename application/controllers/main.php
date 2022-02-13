<?php

class main extends Controller {

	function index()
	{
		$template = $this->loadView('index');
		$model = $this->loadModel('main_model');
		$model->increase_view();
		$template->render();
	}
    
}

?>
