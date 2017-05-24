<?php
  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = "UPDATE `flight_sched` SET `".$_POST['colname']."`=".$_POST['val']." WHERE `tctrcode`=".$_POST['tcc'];
  mysql_query($query);
?>