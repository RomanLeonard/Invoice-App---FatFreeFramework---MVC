<?php

class Controller {

	function beforeroute(){
		
	}

	function afterroute(){
		$f3 = Base::instance();
		if ($f3->get('AJAX') == false){
			$template = new Template;
			echo $template->render('template.htm');
		}
	}
}