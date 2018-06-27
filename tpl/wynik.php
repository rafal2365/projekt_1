<?php
include_once('../tpl/top.php');
require_once('../include/conf.php');
$query = $_SESSION['query'];

  echo $query."<br />";
  $select_sql = mysql_query($query) or die("select_sql error: ".mysql_error());
  $nieruchomosc = new nieruchomosc();
  if(mysql_num_rows($select_sql) > 0)
  {
    while($r = mysql_fetch_assoc($select_sql))
    {
     $id = $r['id'];
     $nieruchomosc -> setNieruchomosc($id);

?>
<meta charset="utf-8">
<div id="container">
<?php

?>
 <div id="underContainer"> 
  <div id="title">
  <?php
  echo "id: ".$nieruchomosc -> getId()."<br />"; 
  echo "title: ".$nieruchomosc -> getNieruchomosc_title()."<br />"; 
  echo "typ nieruchomosci: ".$nieruchomosc -> getNieruchomosc_typNieruchomosci()."<br />";
  echo "rodzaj transakcji: ".$nieruchomosc -> getNieruchomosc_rodzajTransakcji()."<br />";
  echo "pum: ".$nieruchomosc -> getNieruchomosc_pum()."<br />";
  echo "klasa gleby: ".$nieruchomosc -> getNieruchomosc_klasaGleby()."<br />";
  echo "status: ".$nieruchomosc -> getNieruchomosc_status()."<br />";
  echo "powierzchnia: ".$nieruchomosc -> getNieruchomosc_powierzchnia()."<br />";
  echo "cena: ".$nieruchomosc -> getNieruchomosc_cena()."<br />";
  echo "loaklizacja_1: ".$nieruchomosc -> getNieruchomosc_lokalizacja1()."<br />";
  echo "lokalizacja_2: ".$nieruchomosc -> getNieruchomosc_lokalizacja2()."<br />";
  echo "dzielnica: ".$nieruchomosc -> getNieruchomosc_dzielnica()."<br />";
  echo "description: ".$nieruchomosc -> getNieruchomosc_description()."<br />";
  echo "img_src: ".$nieruchomosc -> getNieruchomosc_imgSrc()."<br />";
  echo "<hr><br /><br /><br />";
  ?>
  </div>
  
  <div id="img">
  
  </div>
  
  <div id="description">
  
  </div>
 </div>
 <?php
    }
  }
 ?>
</div>