<?php
//include('../modals/gallery.php');
/*
tablica ze zdjęciami w js, plus buttony do przewijania


*/
$galeria[] = 0;
global $galeria_src;
function galeria()
{

$id = $_GET['id'];
$source = "../img/".$id;
$ile = 0;

$width_mini = 70;
$height_mini = 70;

$width_main = 300;
$height_main = 300;


$cat = opendir($source);

while($file = readdir($cat))
{
  if($file<>'.' && $file<>'..' && !is_dir($source.$file))
  {
    $galeria_src[$ile] = $source."/".$file;  
    $galeria[$ile] = "
    <a href=nieruchomosc.php?id=".$id."&foto_id=".$ile."><img width='".$width_mini."px' height='".$height_mini."px' src='$source/$file'></a>
    ";
    $ile++;
  } 
}
closedir($cat);
   

if(isset($_GET['foto_id']))
    {
      echo "<div id='mini_main_foto'><img onclick=\"document.getElementById('id01').style.display='block'\"  width='".$width_main."px' height='".$height_main."px' src='".$galeria_src[$_GET['foto_id']]."'></div><br>";
    } 
   else if(!isset($_GET['foto_id']))
          {
            echo "<img onclick=\"document.getElementById('id01').style.display='block'\" width='".$width_main."px' height='".$height_main."px' src='".$galeria_src[0]."'><br>";
          }  
   
foreach($galeria as $i)
{
echo $i;
}

}




function main_foto($foto_id){
  
$id = $_GET['id'];
$source = "../img/".$id;
$ile = 0;


$cat = opendir($source);

while($file = readdir($cat))
{
  if($file<>'.' && $file<>'..' && !is_dir($source.$file))
  {
    $galeria_src[$ile] = $source."/".$file;  
    $ile++;
  } 
}
closedir($cat);
if($_GET['foto_id'] == 0)
{
echo "<div id='gallery_left'></div><div id='gallery_center'><center><img style='cursor: pointer;  margin-bottom: 3%;' onclick=\"document.getElementById('id01').style.display='none'\" width='500px' height='500px' src='".$galeria_src[$foto_id]."'></center></div><div id='gallery_right'><a href='nieruchomosc.php?id=".$_GET['id']."&foto_id=".($_GET['foto_id']+1)."&display=1'><img width='50px' height='50px' src='./img/icon/right_arrow.png'></a></div>";                                 
}
else if($_GET['foto_id'] >= ($ile-1))
{
echo "<div id='gallery_left'><a href='nieruchomosc.php?id=".$_GET['id']."&foto_id=".($_GET['foto_id']-1)."&display=1'><img width='50px' height='50px' src='./img/icon/left_arrow.png'></a></div><div id='gallery_center'><center><img style='cursor: pointer;  margin-bottom: 3%;' onclick=\"document.getElementById('id01').style.display='none'\" width='500px' height='500px' src='".$galeria_src[$foto_id]."'></center></div><div id='gallery_right'></div>";                                 
}
else
{
echo "<div id='gallery_left'><a href='nieruchomosc.php?id=".$_GET['id']."&foto_id=".($_GET['foto_id']-1)."&display=1'><img width='50px' height='50px' src='./img/icon/left_arrow.png'></a></div><div id='gallery_center'><img style='cursor: pointer;  margin-bottom: 3%;' onclick=\"document.getElementById('id01').style.display='none'\" width='500px' height='500px' src='".$galeria_src[$foto_id]."'></div><div id='gallery_right'><a href='nieruchomosc.php?id=".$_GET['id']."&foto_id=".($_GET['foto_id']+1)."&display=1'><img width='50px' height='50px' src='./img/icon/right_arrow.png'></a></div>";                                 
}

}

?>





