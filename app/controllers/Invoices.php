<?php

class Invoices extends Controller{

	function list_invoices(){
		$f3 = Base::instance();
		$model = new Invoices_model;

		$f3->set('invoices', $model->get_invoices());		

		$f3->set('PAGE_TITLE', 'Invoices list');
		$f3->set('CSS_PATH', 'assets/css/invoices/invoices.css');
		$f3->set('JS_PATH', 'assets/js/pages/invoice/list-invoices.js');

		$f3->set('title_utility','page-utility/invoice/util_list_invoice_view.php');
		$f3->set('content','pages/invoice/list_invoices_view.php');
	}


	// CREATE INVOICE
	// create invoice page-view renderer
	function create_invoice_render(){
		$f3 = Base::instance();
		$model = new Invoices_model;

		$f3->set('last_invoice_number', $model->get_last_invoice_number());
		$f3->set('current_date', date('d-m-Y'));

		$f3->set('PAGE_TITLE', 'New invoice');
		$f3->set('CSS_PATH', 'assets/css/invoices/invoices.css');
		$f3->set('JS_PATH', 'assets/js/pages/invoice/create-invoice.js');
		
		$f3->set('title_utility','page-utility/invoice/util_create_invoice_view.php');
		$f3->set('content','pages/invoice/create_invoice_view.php');
		
	}
	// create invioce action
	function create_invoice_action(){
		$f3 = Base::instance();
		

		if($f3->get("POST.client_name") && $f3->get("POST.client_address")){
			$model = new Invoices_model;

			// client details
			$client_name 	= $f3->get("POST.client_name");
			$client_address = $f3->get("POST.client_address");
			$client_cui 	= $f3->get("POST.client_cui");
			$client_onrc 	= $f3->get("POST.client_onrc");
			$client_phone 	= $f3->get("POST.client_phone");
			$client_iban 	= $f3->get("POST.client_iban");
			$client_bank 	= $f3->get("POST.client_bank");
			$client_email 	= $f3->get("POST.client_email");

			// invoice details
			$invoice_number		    = $f3->get("POST.invoice_number");
			$invoice_shipping_price = $f3->get("POST.invoice_shipping_price");
			$invoice_items		    = $f3->get("POST.invoice_items");
			$invoices_total_price	= $f3->get("POST.invoices_total_price");

			$new_invoice = $model->add_invoice_action(
				$client_name,
				$client_address,
				$client_cui,
				$client_onrc,
				$client_phone,
				$client_iban,
				$client_bank,
				$client_email,

				$invoice_number,
				$invoice_shipping_price,
				$invoice_items,
				$invoices_total_price
			);

			echo json_encode($new_invoice);
		}
		else{
			echo json_encode('error');
		}

		
	}

	// PRINT INVOICE
	function pdf_invoice_render(){
		$f3 = Base::instance();
		$model = new Invoices_model;
		$id = $f3->get('GET.invoice_id');
		$invoice = $model->get_invoice_details_by_id($id);
		$f3->set('invoice', $invoice);
		$page['html'] =  \Template::instance()->render('print.htm');
		echo json_encode($page);
	}

}
