<?php
require_once('connection.php');
require_once('functions.php');
require_once('class.class.php');

if(isset($_POST['filtruj']))
{
  filtruj();
}

?>