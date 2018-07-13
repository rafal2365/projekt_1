<?php
if(!empty($_FILES)){
    
    $targetDir = "./img/uploads/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;
    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
       echo "ok";
    }
    
}
?>