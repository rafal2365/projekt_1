<?php
include_once('top.php');
?>

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

<div class="jumbotron jumbotron-fluid text-center bg-light">
  <div class="container">
    <h1>Krakowskie Inwestycje</h1>      
    <p>Funt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>
    

  <div class="row">
    <div class="col-sm-3 bg-light text-center">
    
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

    <?php 
    for($i=0;$i<3;$i++)
    {
      include("./tpl/podglad.php");
    }
    ?>
    
    <!----------------------------------------------------------------------------------------------->
    
  </div>


<div class="row">
    <div class="col-sm-12 text-center bg-light">
    <h1>FOOTER</h1>
<a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
    </div>
</div>
 <?php
 include_once('bottom.php');
 ?>
