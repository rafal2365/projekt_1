<?php
include_once('../tpl/top.php');
require_once('../include/conf.php');
$id = $_GET['id'];

?>        
                  

<body>

<?php
$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);



$imgSrc = "../img/".$id."/";
?>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krakowskie Inwestycje (alpha)</title>
        
        <!----- CSS ----------------------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
        
        <!------- JS ---------------------------------------------->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
<div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-light fixed-top ">
  <!-- Brand -->
     <a class="navbar-brand" href=""><img src="#" alt="Logo"></a>
  <!-- Links -->
   <ul class="navbar-nav ml-auto" >
 
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Mieszkania i lokale użytkowe</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Wynajem</a>
                <a class="dropdown-item" href="#">Sprzedaż</a>
            </div>
        </li> 
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Grunty inwestycyjne</a>
            <div class="dropdown-menu ">
            <a class="dropdown-item" href="#">Działki budowlane</a>
            <a class="dropdown-item" href="#">Działki rolne</a>
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
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 text-center bg-light">
    <h1><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h1> 
    <p>Lokalizacja: <?php echo ucwords($lokalizacja1[$nieruchomosc -> getNieruchomosc_lokalizacja1()]); ?>, <?php echo $lokalizacja2[$nieruchomosc -> getNieruchomosc_lokalizacja2()]; ?>, <?php echo $dzielnica[$nieruchomosc -> getNieruchomosc_dzielnica()]; ?>
    
    
    </p></div>
    <div class="col-sm-3 bg-light text-center">
        <?php 
            include_once('filtr.php');
        ?>
    </div>
    <div class="col-sm-9 bg-light">
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
      <img src="../img/1.jpg" alt="0" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="../img/2.jpg" alt="1" class="img-fluid">
    </div>    
    <div class="carousel-item">
      <img src="../img/3.jpg" alt="2" class="img-fluid">
        

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
    <div class="col-sm-3 bg-light"></div>
    <div class="col-sm-6 bg-light" style="text-align: justify; padding-top: 20px;">
    <?php
    echo $nieruchomosc -> getNieruchomosc_description();
    ?>
    </div>
<?php

if($nieruchomosc -> getNieruchomosc_typNieruchomosci() == "działka")
{
  include_once('dzialka.php');
}
else
{
  include_once('budynek.php');  
}


?>
    </div>
<div class="row">
    <div class="col-sm-12 text-center bg-light">
    <h1>FOOTER</h1>
<a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
    </div>
</div>
    </div>
    </body>
