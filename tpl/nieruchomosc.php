<?php
$id = $_GET['id'];

$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);
$source = $nieruchomosc -> getNieruchomosc_imgSrc();

?>



<div class="row">
    <div class="col-sm-12 text-center bg-light">
    <h1><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h1> 
    <p>Lokalizacja: <?php echo ucwords($lokalizacja1[$nieruchomosc -> getNieruchomosc_lokalizacja1()]); ?>, <?php echo $lokalizacja2[$nieruchomosc -> getNieruchomosc_lokalizacja2()]; ?>, <?php echo $dzielnica[$nieruchomosc -> getNieruchomosc_dzielnica()]; ?>
    
    
    </p></div>
           
    <div class="col-sm-3 bg-light text-center">
       <?php include_once('filtr.php'); ?>
     </div>
     
     
    <div class="col-sm-9 bg-light">

   <!-- The slideshow -->
  <?php
  
  $cat = opendir($source);

  $ile = 0;
while($file = readdir($cat))
{
  if($file<>'.' && $file<>'..' && !is_dir($source.$file))
  {       
    
    if($file == "1.jpg")
    {
      $galeria_src[1] = $source."/".$ile;
      $galeria[$ile] = "<div class='carousel-item active'>
      <img class='img-fluid' src='".$nieruchomosc -> getNieruchomosc_imgSrc()."/".$file."' alt='0' class='img-fluid'></div>";
      $ile++;
    }
   else
   { 
    $galeria_src[$ile] = $source."/".$file;  
    $galeria[$ile] = "<div class='carousel-item'><img class='img-fluid' src='".$nieruchomosc -> getNieruchomosc_imgSrc()."/".$file."' alt='0' class='img-fluid'></div>";
    $ile++;
  } 
  }
}
closedir($cat);

  
  ?>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    
     <?php
     for($i=1;$i<=$ile-1;$i++)
     {
      echo "<li data-target='#demo' data-slide-to='".$i."'></li>";
     }
     ?>
     </ul>
     <?php
      foreach($galeria as $v)
      {
        echo $v;
      }
     ?>
     
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
    </div>