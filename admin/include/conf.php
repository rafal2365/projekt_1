<?php
require_once('connection.php');
require_once('functions.php');

if(isset($_POST['login-btn']))
{
  $login = $_POST['login'];
  $passwd = $_POST['passwd'];
  if(zaloguj($login, $passwd) == 0)
  {
    echo "<script>loginError();</script>";
  }
  else if(zaloguj($login, $passwd) == 1)
  {
    $_SESSION['login'] = $login;
  }
}


if(isset($_POST['change']))
{
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $user = $_POST['user'];
  
    if(changePassword($user,$current_password,$new_password) == true)
    {
      header('Location: ok.php');
    } else if(changePassword($user,$current_password,$new_password) == false)
    {
      header('Location: error.php');
    }
}

if(isset($_POST['addNieruchomosc']))
{
  addNieruchomosc();
}









?>