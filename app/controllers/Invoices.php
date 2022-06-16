<?php

class Invoices extends \Controller{

	function list_invoices(){
		$f3 = Base::instance();
		$model = new \Model\Invoices_model;
		
		$db = $f3->get('db.instance');

		$invoices_rs = new \DB\SQL\Mapper($db,'invoices');

		$invoices = $invoices_rs->paginate(0, 10, array());



		$f3->set('PAGE_TITLE', 'Index/dashboard');
		$f3->set('CSS_PATH', 'assets/css/invoices/invoices.css');
		$f3->set('content','pages/invoice/list_invoices_view.php');
	}

}
