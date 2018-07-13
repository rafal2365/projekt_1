<div class="container-fluid marshal">
  <div class="row">
<?php
if(isset($_GET['id']))
{

include_once("nieruchomosc.php");  

} else if(!isset($_GET['id']))
{
  include_once('search.php');
}
include('bottom.php');
 ?>

