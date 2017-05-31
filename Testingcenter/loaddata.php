<?php     

    session_start();
    if($_SESSION['user']){
    }
    else{
      header('location: login.php');
    }
    $user = $_SESSION['user'];
/*
 * examples/mysql/loaddata.php
 * 
 * This file is part of EditableGrid.
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
                              


/**
 * This script loads data from the database and returns it to the js
 *
 */
       
require_once('config.php');      
require_once('EditableGrid.php');            

/**
 * fetch_pairs is a simple method that transforms a mysqli_result object in an array.
 * It will be used to generate possible values for some columns.
*/
function fetch_pairs($mysqli,$query){
	if (!($res = $mysqli->query($query)))return FALSE;
	$rows = array();
	while ($row = $res->fetch_assoc()) {
		$first = true;
		$key = $value = null;
		foreach ($row as $val) {
			if ($first) { $key = $val; $first = false; }
			else { $value = $val; break; } 
		}
		$rows[$key] = $value;
	}
	return $rows;
}


// Database connection
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 
                    
// create a new EditableGrid object
$grid = new EditableGrid();

/* 
*  Add columns. The first argument of addColumn is the name of the field in the databse. 
*  The second argument is the label that will be displayed in the header
*/

if ($_SESSION['rights']==1){
$grid->addColumn('TctrCode', 'TctrCode', 'integer');
$grid->addColumn('tctr_tag', 'tctr_tag', 'string');
$grid->addColumn('LVM_tag', 'LVM_tag', 'string');
$grid->addColumn('cluster', 'cluster', 'string');
$grid->addColumn('Reg_tag', 'Reg_tag', 'string');
$grid->addColumn('BLDG', 'BLDG', 'string');
$grid->addColumn('BLDG_desc', 'BLDG_desc', 'string');
$grid->addColumn('Room', 'Room', 'string');  
$grid->addColumn('Cap', 'Cap', 'string');
$grid->addColumn('active', 'active', 'integer');
$grid->addColumn('Remarks', 'Remarks', 'string');
$grid->addColumn('N_E', 'N_E', 'string');
$grid->addColumn('Min_P', 'Min_P', 'string');
$grid->addColumn('Max_P', 'Min_P', 'string');
$grid->addColumn('Total_N', 'Total_N', 'integer');
$grid->addColumn('tag', 'tag', 'string');
$grid->addColumn('action', 'Action', 'html', NULL, false, 'id'); 
}
else{
$grid->addColumn('TctrCode', 'TctrCode', 'integer', NULL, false);
$grid->addColumn('tctr_tag', 'tctr_tag', 'string', NULL, false);
$grid->addColumn('LVM_tag', 'LVM_tag', 'string', NULL, false);
$grid->addColumn('cluster', 'cluster', 'string', NULL, false);
$grid->addColumn('Reg_tag', 'Reg_tag', 'string', NULL, false);
$grid->addColumn('BLDG', 'BLDG', 'string', NULL, false);
$grid->addColumn('BLDG_desc', 'BLDG_desc', 'string', NULL, false);
$grid->addColumn('Room', 'Room', 'string', NULL, false);  
$grid->addColumn('Cap', 'Cap', 'string', NULL, false);
$grid->addColumn('active', 'active', 'integer', NULL, false);
$grid->addColumn('Remarks', 'Remarks', 'string', NULL, false);
$grid->addColumn('N_E', 'N_E', 'string', NULL, false);
$grid->addColumn('Min_P', 'Min_P', 'string', NULL, false);
$grid->addColumn('Max_P', 'Min_P', 'string', NULL, false);
$grid->addColumn('Total_N', 'Total_N', 'integer', NULL, false);
$grid->addColumn('tag', 'tag', 'string', NULL, false);
	
}

$mydb_tablename = (isset($_GET['db_tablename'])) ? stripslashes($_GET['db_tablename']) : 'TestCenters';
                                                                       
$result = $mysqli->query('SELECT * FROM '.$mydb_tablename );
$mysqli->close();

// send data to the browser
$grid->renderJSON($result);

