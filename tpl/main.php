<?php
include_once('top.php');
?>


 <div id="demo" class="carousel slide marshal" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpeg" alt="0">
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
      <img src="img/10.jpg" alt="2">
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
    <div class="col-sm-12 text-center bg-light" style="padding:20px;">
     
    <h2>Krakowskie Inwestycje</h2>      
    <p>Spółka Krakowskie Inwestycje  jest dynamicznie rozwijającą się firmą, oferującą kompleksowe usługi w zakresie pośrednictwa w transakcjach kupna i sprzedaży gruntów oraz budynków mieszkalnych i usługowych. Wyróżnia nas rzetelność, uczciwość i przejrzystość w prowadzeniu powierzonych nam spraw. Zachęcamy Państwa do zapoznania się z naszą szczegółową ofertą oraz do pozostawienia informacji na temat oferowanej lub poszukiwanej nieruchomości.</p>
    </div>
    

  <div class="row ardi">

    <?php 
    for($i=0;$i<3;$i++)
    {
      include("./tpl/podglad.php");
    }
    ?>
    
    <!----------------------------------------------------------------------------------------------->
      

 <?php
 include_once('bottom.php');
 ?>