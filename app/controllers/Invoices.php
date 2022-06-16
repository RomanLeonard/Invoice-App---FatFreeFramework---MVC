<?php

class Invoices extends Controller{

	function list_invoices(){
		$f3 = Base::instance();
		$model = new Invoices_model;

		$f3->set('invoices', $model->get_invoices());		

		$f3->set('PAGE_TITLE', 'Index/dashboard');
		$f3->set('CSS_PATH', 'assets/css/invoices/invoices.css');
		$f3->set('content','pages/invoice/list_invoices_view.php');
	}

}
