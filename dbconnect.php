<?php
$MyUsername = "root";  // enter your username for mysql
$MyPassword = "q1q1q1";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("garage",$dbh);

?>
