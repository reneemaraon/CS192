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

$grid->addColumn('ID', 'ID', 'integer', NULL, false); 
if ($_SESSION['rights']==1){

$grid->addColumn('NAME', 'Name', 'string');
$grid->addColumn('STATUS', 'Status', 'string');
$grid->addColumn('YEAR', 'Year', 'string');
$grid->addColumn('TCTRCODE', 'TCTRCODE', 'string');
$grid->addColumn('TESTCENTER', 'Test Center', 'string');
$grid->addColumn('BUILDING', 'Building', 'string');
$grid->addColumn('ROOM', 'Room', 'string');
$grid->addColumn('ASSG', 'Assignment', 'string');
$grid->addColumn('NYR', 'Number of Years', 'string');
}
else{

$grid->addColumn('NAME', 'Name', 'string', NULL, false);
$grid->addColumn('STATUS', 'Status', 'string', NULL, false);
$grid->addColumn('YEAR', 'Year', 'string', NULL, false);
$grid->addColumn('TCTRCODE', 'TCTRCODE', 'string', NULL, false);
$grid->addColumn('TESTCENTER', 'Test Center', 'string', NULL, false);
$grid->addColumn('BUILDING', 'Building', 'string', NULL, false);
$grid->addColumn('ROOM', 'Room', 'string', NULL, false);
$grid->addColumn('ASSG', 'Assignment', 'string', NULL, false);
$grid->addColumn('NYR', 'Number of Years', 'string', NULL, false);	
}
$mydb_tablename = (isset($_GET['db_tablename'])) ? stripslashes($_GET['db_tablename']) : '`CATDIREC`';
                                                                       
$result = $mysqli->query('SELECT * FROM '.$mydb_tablename );
$mysqli->close();

// send data to the browser
$grid->renderJSON($result);

