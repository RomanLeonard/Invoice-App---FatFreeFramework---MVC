<?php

class Clients_model extends Model{

	function get_clients($page){
		$f3 = Base::instance();
		$db = $f3->get('db.instance');
		$rs = new DB\SQL\Mapper($db,'clients');
		$clients = $rs->paginate($page-1, 20, array(), array());
		
        return $clients;
	} // get clients list

}
