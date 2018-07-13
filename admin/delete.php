<?php
include('./include/conf.php');
if(isset($_GET['id']))
{
$del_id = $_GET['id'];
mysql_query("DELETE FROM nieruchomosci WHERE id = '$del_id'") or die("delete error: ".mysql_error());
header('Location: manage.php');
}
else
header('Location: manage.php');
?>