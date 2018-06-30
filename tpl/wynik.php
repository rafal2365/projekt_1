<?php
include_once('../tpl/top.php');
require_once('../include/conf.php');
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/nieruchomosc.css">
        <link rel="stylesheet" href="../css/style.css">
        
        <!------- JS ---------------------------------------------->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/scripts.js"></script>
<body>

    <div class="jumbotron jumbotron-fluid text-center bg-light">
  <div class="container">
    <h1>Krakowskie Inwestycje</h1>      
    <p>Funt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
<?php
if(isset($_GET['id']))
{

include_once("../tpl/nieruchomosc.php");  

} else if(!isset($_GET['id']))
{


$query = $_SESSION['query'];
  $select_sql = mysql_query($query) or die("select_sql error: ".mysql_error());
  $nieruchomosc = new nieruchomosc();
  if(mysql_num_rows($select_sql) > 0)
  {
    while($r = mysql_fetch_assoc($select_sql))
    {
     $id = $r['id'];
     $nieruchomosc -> setNieruchomosc($id);

?>

<div class="col-sm-3 bg-light">
  <a class="link" href="./wynik.php?id=<?php echo $id; ?>">
      <h2><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h2>
      <div class="fakeimg"><?php echo $nieruchomosc -> getNieruchomosc_imgSrc(); ?></div>
      <p><?php echo substr($nieruchomosc -> getNieruchomosc_description(),0,150)."..."; ?></p>
  </a>
    </div>
  
  
 <?php
    }
  }
}
include('bottom.php');
 ?>
 </div>
    </div>

