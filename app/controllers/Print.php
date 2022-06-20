<?php

use Spipu\Html2Pdf\Html2Pdf;

class Invoices extends Controller{

	// PRINT INVOICE
	function pdf_invoice_render(){
		$f3 = Base::instance();
		$model = new Invoices_model;
			
		$html2pdf = new Html2Pdf();
		$html2pdf->writeHTML('<h1 style="color:pink;">CodeWall PDF</h1> <br/> <p>Convert this HTML to PDF please!</p>');
		$html2pdf->output('myPdf.pdf', 'D');



		// $page['html'] =  \Template::instance()->render('print.htm');
		// echo json_encode($page);
	}

}
