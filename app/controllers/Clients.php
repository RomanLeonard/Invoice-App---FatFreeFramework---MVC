<?php

class Clients extends Controller{

	function list_clients_render(){
		$f3 = Base::instance();
		$model = new Clients_model;

		if($f3->get('GET.page')){
			$page = $f3->get('GET.page');
		} else { $page = 1; }

		if($f3->get('GET.query')){
			$query = $f3->get('GET.query');
		} else { $query = ''; }

		$f3->set('clients', $model->get_clients($page, $query));
		$f3->set('current_page', $page);
		$f3->set('query', $query);	

		$f3->set('PAGE_TITLE', 'Clients list');
		// $f3->set('CSS_PATH', 'assets/css/clients/clients.css');
		$f3->set('JS_PATH', 'assets/js/pages/clients/list-clients.js');
		$f3->set('ACTIVE_PAGE', 'clients');

		$f3->set('title_utility','page-utility/invoice/util_list_clients_view.php');
		$f3->set('content','pages/clients/list_clients_view.php');
	}

}
