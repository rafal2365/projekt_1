<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
require_once('./include/conf.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krakowskie Inwestycje (alpha)</title>
        
        <!----- CSS ----------------------------------------->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/nieruchomosc.css">
        <link rel="stylesheet" href="./css/style.css">
        
        <!------- JS ---------------------------------------------->
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/scripts.js"></script>
    </head>
    <body>
    <div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-white fixed-top ">
  <!-- Brand -->
  <a class="navbar-brand" href="./index.php"><img src="img/logo.png" alt="Logo" style="height: 120px; width: 120px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- Links -->
   <ul class="navbar-nav ml-auto" >
       <li class="nav-item">
           <a class="nav-link text-dark" href="index.php?oferta=1">Działki budowlane i rolne</a></li>
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark " data-toggle="dropdown" href="#">Wynajem i sprzedaż</a>
            <div class="dropdown-menu">
                <a class="dropdown-item bg-white" href="index.php?oferta=3">Domy</a>
                <a class="dropdown-item bg-white" href="index.php?oferta=2">Mieszkania</a>
            </div>
        </li> 
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Nasz zespół</a>
       </li>
       <li class="nav-item">
            <a class="nav-link text-dark" href="#kontakt">Kontakt - <b>666 777 999</b></a>
       </li>
     </ul>      
</nav> 
    </div>