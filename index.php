<?php
if(isset($_GET['oferta']) && !empty($_GET['oferta']))
{
  $oferta = $_GET['oferta'];
  
  if($oferta == "1")
  {
    include_once('./lista_ofert/dzialki.php');
  } else if($oferta == "2")
  {
    include_once('./lista_ofert/mieszkania.php');
  } else if($oferta == "3")
  {
    include_once('./lista_ofert/domy.php');
  }                                           
} else if(!isset($_GET['oferta']) || empty($_GET['oferta']))
{
include_once('./tpl/index.php');
}

?>