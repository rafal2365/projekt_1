<?php
require_once('connection.php');
require_once('functions.php');
require_once('class.class.php');
require_once('galeria.php');

if(isset($_POST['filtruj']))
{
  filtruj();
}

?>