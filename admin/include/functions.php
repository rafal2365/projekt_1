<?php

function zaloguj($login, $passwd){

$return = null;
$pass = md5($passwd);

$login_sql = mysql_query("SELECT * FROM `user` WHERE login = '$login' AND pass = '$pass'") or die("Nieudane logowanie. ".mysql_error());

$return = mysql_fetch_assoc($login_sql);

if(mysql_num_rows($login_sql) <= 0)
{
  return 0;
}

else if(mysql_num_rows($login_sql) > 0)
{
  $_SESSION['login'] = $return['login'];
  return 1;
}

}

function changePassword($user,$current_password,$new_password){
   $current_password_md5 = md5($current_password);
   $new_password_2 = md5($new_password);
  $check_current_password_sql = mysql_query("SELECT * FROM user WHERE pass='$current_password_md5'");
  $return_sql = mysql_fetch_assoc($check_current_password_sql);
  if($return_sql['login'] == $user)
  {
    mysql_query("UPDATE user SET pass='$new_password_2'");
    return true;
  } else if($return_mysql['login'] != $user)
  {
    return false;
  }
}

function addNieruchomosc(){
  
  $dzialka = array();
  $budynek = array();
  
  /*-----OGÓLNE -------------------------------------------------------------------*/
  $typ_nieruchomosci = $_POST['typ_ogloszenia'];
  $title = $_POST['nieruchomosc_title'];
  $description = $_POST['description'];
  $rodzaj_transakcji = $_POST['rodzaj_transakcji'];
  $powierzchnia = $_POST['powierzchnia'];
  $cena = $_POST['cena'];
  
  /*----- LOKALIZACJA -------------------------------------------------------------*/
  $lokalizacja_1 = $_POST['lokalizacja_1'];
  $lokalizacja_2 = $_POST['lokalizacja_2'];
  $dzielnica = $_POST['dzielnica'];
  
  /*--- DZIAŁKA ----------------------------------------------------------------------------*/
  if(!empty($_POST['pum']))
  {
    $dzialka[] = 'pum = '.'"'.$_POST['pum'].'"'; 
  }
  
  if(!empty($_POST['klasa_gleby']))
  {
    $dzialka[] = 'klasa_gleby = '.'"'.$_POST['klasa_gleby'].'"';
  }
  
  if(!empty($_POST['status']))
  {
    $dzialka[] = 'status = '.'"'.$_POST['status'].'"';
  }
  
  /*----BUDYNEK----------------------------------------------------------------------------*/
  if(!empty($_POST['pietro']))
  {
    $budynek[] = 'pietro = '.'"'.$_POST['pietro'].'"';
  }
  
  if(!empty($_POST['liczba_pieter']))
  {
    $budynek[] = 'liczba_pieter = '.'"'.$_POST['liczba_pieter'].'"';
  }
  
  if(!empty($_POST['rodzaj_budynku']))
  {
    $budynek[] = 'rodzaj_budynku = '.'"'.$_POST['rodzaj_budynku'].'"';
  }
  
  if(!empty($_POST['rok_budowy']))
  {
    $budynek[] = 'rok_budowy = '.'"'.$_POST['rok_budowy'].'"';
  }
  
  $katalog = time();
  $dir = '../img/uploads/'.$katalog;
  $dir_baza = 'img/uploads/'.$katalog;
  mkdir("../img/uploads/".$katalog,0777);
  for($q=0;$q<count($_FILES['file']['size']);$q++)
  { 
    if(strstr($_FILES['file']['type'][$q], 'image')!==false)
    { 
    
      $file = $dir."/".strtolower($_FILES['file']['name'][$q]); 
      move_uploaded_file($_FILES['file']['tmp_name'][$q],$file); 
    } 
  } 
  
  if(!empty($dzialka) && empty($budynek))
  {
    $dzialka_set = "SET ".implode(', ', $dzialka);
    
    mysql_query("INSERT INTO nieruchomosci ".$dzialka_set.", typ_nieruchomosci = '$typ_nieruchomosci', description = '$description', title = '$title', rodzaj = '$rodzaj_transakcji', cena = '$cena', powierzchnia = '$powierzchnia', lokalizacja_1 = '$lokalizacja_1', lokalizacja_2 = '$lokalizacja_2', dzielnica = '$dzielnica', img_src='$dir_baza'") or die("Dodaj ogłoszenie (działka) error: ".mysql_error());
    header('Location: ok.php'); 
  } else if(!empty($budynek) && empty($dzialka))
  {
    $budynek_set = "SET ".implode(', ',$budynek);
    
    mysql_query("INSERT INTO nieruchomosci ".$budynek_set.", typ_nieruchomosci = '$typ_nieruchomosci', description = '$description', title = '$title', rodzaj = '$rodzaj_transakcji', cena = '$cena', powierzchnia = '$powierzchnia', lokalizacja_1 = '$lokalizacja_1', lokalizacja_2 = '$lokalizacja_2', dzielnica = '$dzielnica', img_src='$dir_baza'") or die("Dodaj ogłoszenie (dom/mieszkanie) error: ".mysql_error());
    header('Location: ok.php');
  }
  else if(empty($dzialka) && empty($budynek))
  {
    header('Location: error.php');
  }
}

function preview(){
  $dzialka = array();
  $budynek = array();
  
  /*-----OGÓLNE -------------------------------------------------------------------*/
  $typ_nieruchomosci = $_POST['typ_ogloszenia'];
  $title = $_POST['nieruchomosc_title'];
  $description = $_POST['description'];
  $rodzaj_transakcji = $_POST['rodzaj_transakcji'];
  $powierzchnia = $_POST['powierzchnia'];
  $cena = $_POST['cena'];
  
  /*----- LOKALIZACJA -------------------------------------------------------------*/
  $lokalizacja_1 = $_POST['lokalizacja_1'];
  $lokalizacja_2 = $_POST['lokalizacja_2'];
  $dzielnica = $_POST['dzielnica'];
  
  /*--- DZIAŁKA ----------------------------------------------------------------------------*/
  if(!empty($_POST['pum']))
  {
    $dzialka[] = 'pum = '.'"'.$_POST['pum'].'"'; 
  }
  
  if(!empty($_POST['klasa_gleby']))
  {
    $dzialka[] = 'klasa_gleby = '.'"'.$_POST['klasa_gleby'].'"';
  }
  
  if(!empty($_POST['status']))
  {
    $dzialka[] = 'status = '.'"'.$_POST['status'].'"';
  }
  
  /*----BUDYNEK----------------------------------------------------------------------------*/
  if(!empty($_POST['pietro']))
  {
    $budynek[] = 'pietro = '.'"'.$_POST['pietro'].'"';
  }
  
  if(!empty($_POST['liczba_pieter']))
  {
    $budynek[] = 'liczba_pieter = '.'"'.$_POST['liczba_pieter'].'"';
  }
  
  if(!empty($_POST['rodzaj_budynku']))
  {
    $budynek[] = 'rodzaj_budynku = '.'"'.$_POST['rodzaj_budynku'].'"';
  }
  
  if(!empty($_POST['rok_budowy']))
  {
    $budynek[] = 'rok_budowy = '.'"'.$_POST['rok_budowy'].'"';
  }
}

function getNieruchomosci(){
  $i = 0;
  $get_sql = mysql_query("SELECT * FROM nieruchomosci WHERE id > 4") or die("get_sql error: ".mysql_error());
  $nieruchomosci_id = array();
  if(mysql_num_rows($get_sql) > 0)
  {
    while($r = mysql_fetch_assoc($get_sql))
    {
       $nieruchomosci_id[$i] = $r['id'];
       $i++;
    }
  }
  return $nieruchomosci_id; 
}



?>