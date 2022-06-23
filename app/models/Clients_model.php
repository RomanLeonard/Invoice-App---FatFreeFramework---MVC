<?php

class Clients_model extends Model{

	function get_clients($page, $query){
		$f3 = Base::instance();
		$db = $f3->get('db.instance');

		$rs = new DB\SQL\Mapper($db,'clients');
		$clients = $rs->paginate($page-1, 3, array("name LIKE CONCAT('%',:name,'%') OR address LIKE CONCAT('%',:address,'%') OR mobile LIKE CONCAT('%',:mobile,'%') ",
			array(
				':name' => $query,
				':address' => $query,
				':mobile' => $query
			)
		), array());
		
        return $clients;
	} // get clients list

}
