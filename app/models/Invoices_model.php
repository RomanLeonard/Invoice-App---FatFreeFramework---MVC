<?php

class Invoices_model extends Model{

	function get_invoices(){
		$f3 = Base::instance();
		$db = $f3->get('db.instance');


		$invoices_rs = new DB\SQL\Mapper($db,'invoices');
		$invoices = $invoices_rs->paginate(0, 10, array());

        return $invoices;
	}

}
