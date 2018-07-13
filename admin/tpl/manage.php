<?php

require_once("./include/functions.php");
require_once("./include/class.class.php");
require_once("./include/class_conf.php");
$get_array = getNieruchomosci();
?>
<div class="container">
  <div id="columns">
    <div id="meta" class="naglowek">
      Moje ogłoszenia
    </div>
    <div id="actions" class="naglowek">
      Opcje
    </div>
  </div><br />

<?php
  foreach($get_array as $value)
  {
$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($value);

?>


   <div id="commercial">
     <div id="photo">
     <a href="edit.php?id=<?php echo $nieruchomosc -> getId(); ?>">
      <img src="../<?php echo $nieruchomosc -> getNieruchomosc_imgSrc(); ?>/1.jpg">
     </a>
     </div>
     <div id="else">
      <div id="else_title">
      <a href="edit.php?id=<?php echo $nieruchomosc -> getId(); ?>"><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></a>
      </div>
      <div id="lokalizacja">
        Lokalizacja: <?php echo ucwords($lokalizacja1[$nieruchomosc -> getNieruchomosc_lokalizacja1()]).", ".$lokalizacja2[$nieruchomosc -> getNieruchomosc_lokalizacja2()]."".$dzielnica[$nieruchomosc -> getNieruchomosc_dzielnica()]; ?>
      </div>
     </div>
     <div id="actions_buttons">
     <a class="input-submit" href="edit.php?id=<?php echo $nieruchomosc -> getId(); ?>">Edytuj</a> 
     <a class="input-submit" href="delete.php?id=<?php echo $nieruchomosc -> getId(); ?>">Usuń</a>
     </div>
   </div>



<?php
}
?>
</div>