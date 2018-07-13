<?php
require_once("./include/class.class.php");
include_once("./include/class_conf.php");
$nieruchomosc = new nieruchomosc();


$nieruchomosc -> previewNieruchomosc($_POST['typ_ogloszenia'],$_POST['rodzaj_transakcji'],$_POST['pum'],$_POST['klasa_gleby'],$_POST['status'],$_POST['powierzchnia'],$_POST['cena'],$_POST['lokalizacja_1'],$_POST['lokalizacja_2'],$_POST['dzielnica'],$_POST['img_src'],$_POST['nieruchomosc_title'],$_POST['description'],$_POST['pietro'],$_POST['liczba_pieter'],$_POST['rodzaj_budynku'],$_POST['rok_budowy']);

?>

<form id="add-form" class="add-form" method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="typ_ogloszenia" value="<?php echo $_POST['typ_ogloszenia']; ?>">
<input type="hidden" name="rodzaj_transakcji" value="<?php echo $_POST['rodzaj_transakcji']; ?>">
<input type="hidden" name="pum" value="<?php echo $_POST['pum']; ?>">
<input type="hidden" name="klasa_gleby" value="<?php echo $_POST['klasa_gleby']; ?>">
<input type="hidden" name="status" value="<?php echo $_POST['status']; ?>">
<input type="hidden" name="powierzchnia" value="<?php echo $_POST['powierzchnia']; ?>">
<input type="hidden" name="cena" value="<?php echo $_POST['cena']; ?>">
<input type="hidden" name="lokalizacja_1" value="<?php echo $_POST['lokalizacja_1']; ?>">
<input type="hidden" name="lokalizacja_2" value="<?php echo $_POST['lokalizacja_2']; ?>">
<input type="hidden" name="dzielnica" value="<?php echo $_POST['dzielnica']; ?>">
<input type="hidden" name="nieruchomosc_title" value="<?php echo $_POST['nieruchomosc_title']; ?>">
<input type="hidden" name="description" value="<?php echo $_POST['description']; ?>">
<input type="hidden" name="pietro" value="<?php echo $_POST['pietro']; ?>">
<input type="hidden" name="liczba_pieter" value="<?php echo $_POST['liczba_pieter']; ?>">
<input type="hidden" name="rodzaj_budynku" value="<?php echo $_POST['rodzaj_budynku']; ?>">
<input type="hidden" name="rok_budowy" value="<?php echo $_POST['rok_budowy']; ?>">
<div class="row preview">
    <div class="col-sm-12 text-center bg-light">
    <h1><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h1> 
    <p>Lokalizacja: <?php echo ucwords($lokalizacja1[$nieruchomosc -> getNieruchomosc_lokalizacja1()]); ?>, <?php echo $lokalizacja2[$nieruchomosc -> getNieruchomosc_lokalizacja2()]; ?>, <?php echo $dzielnica[$nieruchomosc -> getNieruchomosc_dzielnica()]; ?>
    
    
    </p></div>
           
    <div class="col-sm-3 bg-light text-center">
       
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


?>>
  </div>                                                                                      
    <button style="margin-left: 50px;" class="input-submit" id="previous" onclick="history.back();">wróć</button>
    <input style="margin-right: 50px; height: 30px;" class="input-submit right" name="addNieruchomosc" value="Dodaj ogłoszenie" type="submit">
</form>    