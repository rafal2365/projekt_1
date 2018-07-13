<?php
$query = $_SESSION['query'];
  $select_sql = mysql_query($query) or die("select_sql error: ".mysql_error());
  $nieruchomosc = new nieruchomosc();
  if(mysql_num_rows($select_sql) > 0)
  {
    while($r = mysql_fetch_assoc($select_sql))
    {
     $id = $r['id'];
     $nieruchomosc -> setNieruchomosc($id);
$source = $nieruchomosc -> getNieruchomosc_imgSrc();
?>
<div class="col-sm-3 bg-light text-center">
    
<?php include_once('./tpl/filtr.php'); ?>  
     
    </div>
<div class="col-sm-3 bg-light">
  <a class="link" href="wynik.php?id=<?php echo $id; ?>">
      <h2><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h2>
    
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
      <img style='height: auto; width: 300px; max-width: 300px;max-height: 220px !important;' src='".$nieruchomosc -> getNieruchomosc_imgSrc()."/".$file."' alt='0' class='img-fluid'></div>";
      $ile++;
    }
   else
   { 
    $galeria_src[$ile] = $source."/".$file;  
    $galeria[$ile] = "<div class='carousel-item'><img style='height: auto; width: 300px; max-width: 300px;max-height: 220px !important;' src='".$nieruchomosc -> getNieruchomosc_imgSrc()."/".$file."' alt='0' class='img-fluid'></div>";
    $ile++;
  } 
  }
}
closedir($cat);

  
  ?>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
     <?php
      foreach($galeria as $v)
      {
        echo $v;
      }
     ?>
  

</div>
      
      
      <p><?php echo substr($nieruchomosc -> getNieruchomosc_description(),0,150)."..."; ?></p>
  
  
      </div>
    </a>
      </div>
 <?php
    }
    ?>
    </div>
    <?php
  }
 ?>