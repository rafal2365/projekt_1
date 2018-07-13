<?php

for($i=1;$i<4;$i++)
{

$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($i);

?>

<div class="col-sm-3 bg-light ardiCenter">
  <a id="preview" href="index.php?oferta=<?php echo $i; ?>">
      <div class="fakeimg"><img width="300px" height="200px" src="<?php echo $nieruchomosc -> getNieruchomosc_imgSrc()."/".$i.".jpg"; ?>" /></div>
      <?php echo $nieruchomosc -> getNieruchomosc_title(); ?>
      <p><?php echo $nieruchomosc -> getNieruchomosc_description(); ?></p>
  </a>
    </div>
    
    <?php
    }
    ?>