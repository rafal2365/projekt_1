<?php
require_once('./tpl/top.php');
if($_SESSION['login'] == "")
{
include_once('./tpl/login.php');
}
else if($_SESSION['login'] != "")
{
  include_once('./tpl/edit.php');
}





?>