<?php
require_once('connection.php');
require_once('functions.php');
require_once('class.class.php');
require_once('galeria.php');

if(isset($_POST['kontakt']))
{
  $nadawca_mail = $_POST['nadawca_mail'];
  $imie_nazwisko = $_POST['imie_nazwisko'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  sendMail($nadawca_mail,$imie_nazwisko,$subject,$message);
}


if(isset($_POST['filtruj']))
{
  $typ_nieruchomosci = array(
    "1" => "działka",
    "2" => "mieszkanie",
    "3" => "dom"
  );
  if(isset($_GET['oferta']))
  {
  $typ = $typ_nieruchomosci[$_GET['oferta']];
  $_SESSION['query'] = filtruj($typ);
  } else if(!isset($_GET['oferta']))
  {
    $typ = $_POST['typ_wyszukiwania'];
    $_SESSION['query'] = filtruj($typ);
  }
  header("Location: wynik.php");
}

$lokalizacja1 = array(
 "N" => "północ",
 "S" => "południe",
 "W" => "zachód",
 "E" => "wschód"
);

$lokalizacja2 = array(
  "centrum" => "Centrum Krakowa",
  "obrzeża" => "Obrzeża Krakowa"
);

$dzielnica = array(
 "0" => "",
 "1" => "Stare Miasto",
 "2" => "Grzegórzki",
 "3" => "Prądnik Czerwony",
 "4" => "Prądnik Biały",
 "5" => "Krowodzrza",
 "6" => "Bronowice",
 "7" => "Zwierzyniec",
 "8" => "Dębniki",
 "9" => "Łahiewniki-Borek Fałęcki",
 "10" => "Swoszowice",
 "11" => "Podgórze Duchackie",
 "12" => "Bieżanów-Prokocim",
 "13" => "Podgórze",
 "14" => "Czyżyny",
 "15" => "Mistrzejowice",
 "16" => "Bieńczyce",
 "17" => "Wzgórza Krzesławickie",
 "18" => "Nowa Huta"
);

$rodzaj_budynku = array(
  "0" => "-",
  "1" => "Kamienica",
  "2" => "Budynek wolnostojący",
  "3" => "Blok"
);



?>