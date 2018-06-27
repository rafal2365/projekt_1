<script> const galeria_src = []; </script>

<?php

$source = "../img/".$id;

$cat = opendir($source);

while($file = readdir($cat))
{
  if($file<>'.' && $file<>'..' && !is_dir($source.$file))
  {
  ?>
  
    <scirpt> 
  <?php
     echo "galeria_src[$ile] = $source."/"$file;
  ?>  
    </script>
   <?php   
    $ile++;
  } 
}
closedir($cat);



?>