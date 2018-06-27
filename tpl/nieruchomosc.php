<?php
include_once('../tpl/top.php');
require_once('../include/conf.php');
$id = $_GET['id'];

//ustawiamy foto_id dla zdjecia;
        if(isset($_GET['foto_id']))
        $foto_id = $_GET['foto_id'];
        else $foto_id = 0;

if(isset($_GET['display']))
$display_php = $_GET['display'];
else if(!isset($_GET['display']))
$display_php = 0;
?>        
                   <script>
    <?php echo "var display_js = $display_php;\n" ?>
function display(){
        if(display_js == 1)
        {        
          document.getElementById("id01").style.display = "block";
        } 
         else if(display_js == 0)
         {
         document.getElementById("id01").style.display = "none";
         }
}
         </script>
        
        

<body onload='display()'>

<?php
$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);

$imgSrc = "../img/".$id."/";
?>

<div id="container">
  <div id="title">
    <?php echo $nieruchomosc -> getNieruchomosc_title(); ?>
  </div>
  <div id="galeria">
    <?php galeria();?>
  </div>
  <div id="id01" style="z-index:3; padding-top:10%; position:fixed; left:0; top:0; width:100%; height:100%; overflow:auto;background-color:rgb(0,0,0); background-color:rgba(0,0,0,0.4);"> 
              <div style="margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:650px;">
      <div>
        <span onclick="document.getElementById('id01').style.display='none'" style="float: right; color: gray; cursor: pointer; margin-right: 1%;">&times;</span><br />
        <?php
       //wywołujemy main_foto dla ustawionego $foto_id; 
        main_foto($foto_id);
        ?> 
      </div>
    </div>
    </div>
  <div id="description">
   <?php echo $nieruchomosc -> getNieruchomosc_description(); ?>
   <br />
  <label id="cena"><?php echo $nieruchomosc -> getNieruchomosc_cena(); ?></label> 
  </div>
</div>


