<?php
session_start();
require_once('./phpmailer/PHPMailerAutoload.php');

function sendMail($nadawca_mail,$imie_nazwisko,$subject,$message){

$mail = new PHPMailer();

$mail -> From = "admin@krakowskim-targiem.pl";
$mail -> FromName = "X Project dla Krakowskie Inwestycje - Test";
$mail -> Host = "krakowskim-targiem.pl";
$mail -> Mailer = "smtp";
$mail -> Username = "admin@krakowskim-targiem.pl";
$mail -> Password = "jotpena100prO";
$mail -> SMTPAuth = true;
$mail -> Port = 587;
$mail -> AddReplyTo($nadawca_mail, $imie_nazwisko);
$mail -> SetLanguage("pl", "/language/");

$mail -> Subject = $subject;
$mail -> Body = $message;

$mail -> AddAddress("admin@krakowskim-targiem.pl", "Wiadomość ze strony krakowskie-inwestycje.pl: ".$subject);

$mail->Send();

}


function filtruj($typ_nieruchomosci){

  $wh = array();
  
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
   
   $query = "SELECT * FROM nieruchomosci ".$where." AND id > 4 AND typ_nieruchomosci = '".$typ_nieruchomosci."' ORDER BY id DESC" or die("filtruj error: ".mysql_error());
   } else {
    $query = "SELECT * FROM nieruchomosci WHERE id > 4 AND typ_nieruchomosci = '".$typ_nieruchomosci."' ORDER BY id DESC" or die("filtruj error: ".mysql_error());
   }
   return $query;    
}





?>