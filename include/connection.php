<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'projekt_1';



$mysql_connection = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($base) or die(mysql_error());


?>