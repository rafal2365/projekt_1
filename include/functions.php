<?php
session_start();

function filtruj(){

  $wh = array();
  
  if(!empty($_POST['typ_wyszukiwania']))
  {
    $wh[] = 'typ_nieruchomosci = '.'"'.$_POST['typ_wyszukiwania'].'"';
  }
  
  if(!empty($_POST['rodzaj']))
  {
    $wh[] = 'rodzaj = '.'"'.$_POST['rodzaj'].'"';
  }
  
  if(!empty($_POST['pum']))
  {
    $wh[] = 'pum = '.'"'.$_POST['pum'].'"';
  }
  
  if(!empty($_POST['klasa_gleby']))
  {
    $wh[] = 'klasa_gleby = '.'"'.$_POST['klasa_gleby'].'"';
  }
  
  if(!empty($_POST['status']))
  {
    $wh[] = 'status = '.'"'.$_POST['status'].'"';
  }
  
  if(!empty($_POST['powierzchnia_od']))
  {
    $wh[] = 'powierzchnia > '.'"'.$_POST['powierzchnia_od'].'"';
  }
  
  if(!empty($_POST['powierzchnia_do']))
  {
    $wh[] = 'powierzchnia < '.'"'.$_POST['powierzchnia_do'].'"';
  }
  
  if(!empty($_POST['cena_od']))
  {
    $wh[] = 'cena > '.'"'.$_POST['cena_od'].'"';
  }
  
  if(!empty($_POST['cena_do']))
  {
    $wh[] = 'cena < '.'"'.$_POST['cena_do'].'"';
  }
  
  if(!empty($_POST['lokalizacja_1']))
  {
    $wh[] = 'lokalizacja_1 = '.'"'.$_POST['lokalizacja_1'].'"';
  }
  
  if(!empty($_POST['lokalizacja_2']))
  {
    $wh[] = 'lokalizacja_2 = '.'"'.$_POST['lokalizacja_2'].'"';
  }
  
  if(!empty($_POST['dzielnica']))
  {
    $wh[] = 'dzielnica = '.'"'.$_POST['dzielnica'].'"';
  }
  
  if (!empty($wh)) {
   $where = 'WHERE '.implode(' and ', $wh);
   $_SESSION['query'] = 'SELECT * FROM nieruchomosci '.$where.' ORDER BY id DESC';
   } else {
    $_SESSION['query'] = 'SELECT * FROM nieruchmosci ORDER BY id DESC';
   }
   header('Location: ./tpl/wynik.php');    
}





?>