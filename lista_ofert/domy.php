<?php
include_once('./tpl/top.php');

$domy_sql = mysql_query("SELECT * FROM nieruchomosci WHERE typ_nieruchomosci = 'dom'") or die("domy_sql error: ".mysql_error());

$nieruchomosc = new nieruchomosc();

?>
<style>
#typ_wyszukiwania
{
display: none;
}

#rodzaj_id
{
display: initial;
visibility: visible;
}

</style>


<body>

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
    
<?php include_once('./tpl/filtr.php'); ?>  
     
    </div>

    <?php 
    while($r = mysql_fetch_assoc($domy_sql))
    {
      $nieruchomosc -> setNieruchomosc($r['id']);
      ?>
      <div class="col-sm-3 bg-light">
  <a href="./tpl/wynik.php?id=<?php echo $id; ?>">
      <h2><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg"><?php echo $nieruchomosc -> getNieruchomosc_imgSrc(); ?></div>
      <p>Some text..</p>
      <p><?php echo substr($nieruchomosc -> getNieruchomosc_description(),0,150)."..."; ?></p>
  </a>
    </div>
   <?php 
    }
    ?>
    
    <!----------------------------------------------------------------------------------------------->
    
  </div>


 <?php
 include_once('./tpl/bottom.php');
 ?>
