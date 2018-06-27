<?php
include_once('../tpl/top.php');
require_once('../include/conf.php');
$id = $_GET['id'];

$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);
?>

<div id="container">
  <div id="title">
    <?php echo $nieruchomosc -> getNieruchomosc_title(); ?>
  </div>
  <div id="description">
   <?php echo $nieruchomosc -> getNieruchomosc_description(); ?>
   <br />
  <label id="cena"><?php echo $nieruchomosc -> getNieruchomosc_cena(); ?></label> 
  </div>
</div>


