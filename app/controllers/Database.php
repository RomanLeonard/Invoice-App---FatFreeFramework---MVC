<?php

class Database extends Controller{

	function backup_database_action(){
        $f3 = Base::instance();
		$model = new Backup_model;
        
        $database_response = $model->backup();

        echo json_encode($database_response);

    }

}
