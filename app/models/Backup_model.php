<?php

class Backup_model extends Model{

	function backup(){
		$f3 = Base::instance();
		$db = $f3->get('db.instance');

        $mysqlUserName      = "root";
        $mysqlPassword      = "";
        $mysqlHostName      = "localhost";
        $DbName             = "invoices_db";

        function Export_Database($host,$user,$pass,$name){
            $mysqli = new mysqli($host,$user,$pass,$name); 
            $mysqli->select_db($name); 
            $mysqli->query("SET NAMES 'utf8'");

            $queryTables    = $mysqli->query('SHOW TABLES'); 
            while($row = $queryTables->fetch_row()) 
            { 
                $target_tables[] = $row[0]; 
            }   
            
            foreach($target_tables as $table)
            {
                $result         =   $mysqli->query('SELECT * FROM '.$table);  
                $fields_amount  =   $result->field_count;  
                $rows_num=$mysqli->affected_rows;     
                $res            =   $mysqli->query('SHOW CREATE TABLE '.$table); 
                $TableMLine     =   $res->fetch_row();
                $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

                for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) 
                {
                    while($row = $result->fetch_row())  
                    { //when started (and every after 100 command cycle):
                        if ($st_counter%100 == 0 || $st_counter == 0 )  
                        {
                                $content .= "\nINSERT INTO ".$table." VALUES";
                        }
                        $content .= "\n(";
                        for($j=0; $j<$fields_amount; $j++)  
                        { 
                            $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); 
                            if (isset($row[$j]))
                            {
                                $content .= '"'.$row[$j].'"' ; 
                            }
                            else 
                            {   
                                $content .= '""';
                            }     
                            if ($j<($fields_amount-1))
                            {
                                    $content.= ',';
                            }      
                        }
                        $content .=")";
                        //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                        if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) 
                        {   
                            $content .= ";";
                        } 
                        else 
                        {
                            $content .= ",";
                        } 
                        $st_counter=$st_counter+1;
                    }
                } $content .="\n\n\n";
            }
            $backup_name = "backups/".$name."_".date('Y-m-d').".sql";
            // header('Content-Type: application/octet-stream');   
            // header("Content-Transfer-Encoding: Binary"); 
            // header("Content-disposition: attachment; filename=\"".$backup_name."\"");  


            $handle = fopen($backup_name,'w+');
            fwrite($handle,$content);
            fclose($handle);
        }

        Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables=false, $backup_name=false );

		return 'success';
	} 

}