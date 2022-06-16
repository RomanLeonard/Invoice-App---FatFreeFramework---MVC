<?php

class Controller {

	function beforeroute(){
	}

	function afterroute(){
		
		$template = new Template;
		echo $template->render('template.htm');
	}
}