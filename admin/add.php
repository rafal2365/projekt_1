<?php
require_once('./tpl/top.php');
if($_SESSION['login'] == "")
{
include_once('./tpl/login.php');
}
else if($_SESSION['login'] != "" && !isset($_POST['podglad']))
{
  include_once('./tpl/add.php');
} else if(isset($_POST['podglad']))
{
  include_once('./tpl/preview.php');
}





?>