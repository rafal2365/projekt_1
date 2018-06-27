<?php
include_once('top.php');
?>

<body>
 <nav class="navbar navbar-expand-sm bg-light fixed-top ">
  <!-- Brand -->
  <a class="navbar-brand" href=""></a>
     <img src="img/logo-test.png" alt="Logo" class="logo"/>
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
            <div class="dropdown-menu bg-light">
            <a class="dropdown-item" href="#">Wynajem</a>
            <a class="dropdown-item" href="#">Sprzedaż</a>
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
 <div class="row">
    <div class="col-sm-12">   
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="0">
        <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="1">
         <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>       
        </div>
    </div>    
    <div class="carousel-item">
      <img src="img/3.jpg" alt="2">
        <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>        
    </div>
        

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
        </div>
     </div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
</div>
    
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    
    <!-------------  TU BYM WSADZIŁ FILTR WYSZUKIWANIA - wrzuciłem twoje w komenta i wszadiłem filtr, żebyś mniej więcej widział o co mi chodzi ---------------------------------------->
      <!--
      <h2>Działki inwestycyjne</h2>
      <h5>Photo of me:</h5>
      <img src="img/3.jpg" class="rounded" alt="Cinque Terre" > 

      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>


      <hr class="d-sm-none">
     ----->
     <?php include_once('./tpl/filtr.php'); ?>
     
    </div>
    <!------------- PĘTLĄ WYPISUJEMY POGLĄDOWE NIERUCHOMOŚCI Z TEGO WZGLĘDU, ŻE PHP UZUPEŁNIA TO Z BAZY I PO PROSTU ILOŚĆ KODU KTÓRY MUSIOAŁBY SIĘ TUT ZNALEŹĆ BYŁABY ZBYT DUŻA. POZA TYM BEZ SENSU JEST KILKA RAZY TO SAMO WSTAWIAĆ JAK FOR ZROBI TO ZA NAS. NO I DOCHODZI JESZCZE PROSTOTA. MOŻNA NP. ZROBIĆ ZMIENNĄ j, KTÓRA BĘDZIE PRZECHOWYWAĆ ILOŚĆ WYŚWIETLANYCH POZYCJI. WARTOŚĆ ZMIENNEJ j  POBIERANA JEST Z BAZY, Z TABELI NP. KONFIGURACJA. POTEM W PANELU ADMINISTRACYJNYM STRONY TYLKO USTAWIASZ ILOŚĆ PODGLĄDÓW I SKRYPT ZAPISUJE TO W BAZIE. ;d ------------------------------------------------>
    <?php 
    for($i=0;$i<3;$i++)
    {
      include("./tpl/podglad.php");
    }
    ?>
    
    <!----------------------------------------------------------------------------------------------->
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
    
</div>
 <?php
 include_once('bottom.php');
 ?>
