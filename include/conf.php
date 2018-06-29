<?php
require_once('connection.php');
require_once('functions.php');
require_once('class.class.php');
require_once('galeria.php');

if(isset($_POST['filtruj']))
{
  filtruj();
}

$lokalizacja1 = array(
 "n" => "północ",
 "s" => "południe",
 "w" => "zachód",
 "e" => "wschód"
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