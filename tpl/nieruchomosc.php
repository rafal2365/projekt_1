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

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krakowskie Inwestycje (alpha)</title>
        
        <!----- CSS ----------------------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
        
        <!------- JS ---------------------------------------------->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
<div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-light fixed-top ">
  <!-- Brand -->
     <img src="./img/logo-test.png" alt="Logo" class="img-fluid"/>
  <!-- Links -->
   <ul class="navbar-nav ml-auto" >
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Grunty inwestycyjne</a>
            <div class="dropdown-menu ">
            <a class="dropdown-item" href="#">Działki budowlane</a>
            <a class="dropdown-item" href="#">Działki rolne</a>
            </div>
        </li> 
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">Mieszkania i lokale użytkowe</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Mieszkania: wynajem</a>
                <a class="dropdown-item" href="#">Mieszkania: sprzedaż</a>
                <a class="dropdown-item" href="#">Dom: wynajem</a>
                <a class="dropdown-item" href="#">Dom: sprzedaż</a>
                <a class="dropdown-item" href="#">Lokale usługowe: wynajem</a>
                <a class="dropdown-item" href="#">Lokale usługowe: sprzedaż</a>
            </div>
        </li> 
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Zapytania</a>
       </li>
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Nasz zespół</a>
       </li>
       <li class="nav-item">
            <a class="nav-link text-dark" href="#">Kontakt</a>
       </li>
     </ul>      
</nav>     
    </div>
<div class="container fluid">
<div class="row">
    <div class="col-sm-4">
        <?php 
            include_once('filtr.php');
        ?>
    </div>
    <div class="col-sm-8">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/1.jpg" alt="0">
        <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="../img/2.jpg" alt="1">
         <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>       
        </div>
    </div>    
    <div class="carousel-item">
      <img src="../img/3.jpg" alt="2">
        <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>        
    </div>
        

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
    </div>
    </div>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
    
</div>
    </body>
