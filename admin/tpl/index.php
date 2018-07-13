<?php
require_once('top.php');
if($_SESSION['login'] == "")
{
include_once('./tpl/login.php');
}
else if($_SESSION['login'] != "")
{
  include_once('./tpl/main.php');
}
?>