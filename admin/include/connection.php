<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

  /*
	$host = 'localhost';
	$user = '27983914_krakowskieinwestycje';
	$pass = 'jotpena100prO';
	$base = '27983914_krakowskieinwestycje';
  */
    
  
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'projekt_1';
  

$mysql_connection = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($base) or die(mysql_error());
mysql_query("SET NAMES utf-8");


?>