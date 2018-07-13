<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
<?php
$mieszkania_sql = mysql_query("SELECT * FROM nieruchomosci WHERE typ_nieruchomosci = 'mieszkanie' AND id > '4'") or die("mieszkania_sql error: ".mysql_error());

$nieruchomosc = new nieruchomosc();

?>
<style>
#typ_wyszukiwania
{
display: none;
}

#rodzaj_id
{
display: initial;
visibility: visible;
}

</style>
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
      <img src="img/1.jpeg" alt="0">
        <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="1">
         <div class="carousel-caption">
            <h3>Kraków</h3>
        <p>Małopolskie miasto inwestycji!</p>       
        </div>
    </div>    
    <div class="carousel-item">
      <img src="img/3.jpg" alt="2">
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
    <div class="col-sm-12 text-center bg-light" style="padding:20px;">
     
    <h2>Krakowskie Inwestycje</h2>      
    <p>Funt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    
  <div class="row">
    <div class="col-sm-3 bg-light text-center">
    
<?php include_once('./tpl/filtr.php'); ?>  
     
    </div>

    <?php 
    while($r = mysql_fetch_assoc($mieszkania_sql))
    {
      $nieruchomosc -> setNieruchomosc($r['id']);
      ?>
      <div class="col-sm-3 bg-light">
  <a class="fonto" href="wynik.php?id=<?php echo $r['id']; ?>">
      <h2><?php echo $nieruchomosc -> getNieruchomosc_title(); ?></h2>
      <div class="fakeimg"><img width="300px" height="200px" src="<?php echo $nieruchomosc -> getNieruchomosc_imgSrc()."/1.jpg"; ?>"></div>
      <p><?php echo substr($nieruchomosc -> getNieruchomosc_description(),0,150)."..."; ?></p>
      
      <div class="col-sm-3 bg-light"><table class="table">
      <tbody>
        <tr>
        <td>Cena</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_cena()." zł"; ?></td>
      </tr>
      <tr>
        <td>Powierzchnia</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_powierzchnia()." m<sup>2</sup>"; ?></td>
      </tr>
      <tr>
        <td>Rodzaj transakcji</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_rodzajTransakcji(); ?></td>
      </tr>
    </tbody>
    </table>
    </div>
      
  </a>
    </div>
   <?php 
    }
    ?>
    
    <!----------------------------------------------------------------------------------------------->
    
  </div>


 <?php
 include_once('./tpl/bottom.php');
 ?>
