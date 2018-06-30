<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
include_once('./include/conf.php');
include_once('../include/conf.php');
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
        <script src="../js/scripts.js"></script>
    </head>
    <body>
    <div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-light fixed-top ">
  <!-- Brand -->
  <a class="navbar-brand" href="./index.php"><img src="#" alt="Logo"></a>
    
  <!-- Links -->
   <ul class="navbar-nav ml-auto" >
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Grunty inwestycyjne</a>
            <div class="dropdown-menu ">
            <a class="dropdown-item" href="#">Działki budowlane</a>
            <a class="dropdown-item" href="#">Działki rolne</a>
            </div>
        </li> 
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Mieszkania i lokale użytkowe</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Mieszkania: wynajem</a>
                <a class="dropdown-item" href="#">Mieszkania: sprzedaż</a>
                <a class="dropdown-item" href="#">Dom: wynajem</a>
                <a class="dropdown-item" href="#">Dom: sprzedaż</a>
                <a class="dropdown-item" href="#">Lokale usługowe: wynajem</a>
                <a class="dropdown-item" href="#">Lokale usługowe: sprzedaż</a>
            </div>
        </li> 
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Zapytania</a>
       </li>
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Nasz zespół</a>
       </li>
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Kontakt</a>
       </li>
     </ul>      
</nav> 
    </div>