<?php

$id = rand(1,6);

$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);

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