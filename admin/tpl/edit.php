<?php
require_once("./include/class.class.php");
require_once("./include/functions.php");
$id = $_GET['id'];

$nieruchomosc = new nieruchomosc();
$nieruchomosc -> setNieruchomosc($id);
?>
<div id="container">
  <form id="add-form" class="add-form" method="post" action="" enctype="multipart/form-data">
  <table id="table">
  <tr><td>
      <select name="typ_ogloszenia" id="typ_ogloszenia" onchange="changeFiltrs();">
        <option value="" disabled>Wybierz kategorię</option>
        <option value="działka" <?=($nieruchomosc -> getNieruchomosc_typNieruchomosci()=="działka" ? 'selected="selected"' : '')?> >Działka</option>
        <option value="mieszkanie" <?=($nieruchomosc -> getNieruchomosc_typNieruchomosci()=="mieszkanie" ? 'selected="selected"' : '')?> >Mieszkanie</option>
        <option value="dom" <?=($nieruchomosc -> getNieruchomosc_typNieruchomosci()=="dom" ? 'selected="selected"' : '')?> >Dom</option>
      </select>
    </td></tr>
    <tr><td><input name="nieruchomosc_title" value="<?php echo $nieruchomosc -> getNieruchomosc_title(); ?>" type="text" placeholder='Tytuł ogłoszenia' /></td></tr>
    <tr><td>
      <select name="rodzaj_transakcji">
      <option value="" disabled>Wynajem/sprzedaż</option>
      <option value="wynajem" <?=($nieruchomosc -> getNieruchomosc_rodzajTransakcji()=="wynajem" ? 'selected="selected"' : '')?> >Wynajem</option>
      <option value="sprzedaż" <?=($nieruchomosc -> getNieruchomosc_rodzajTransakcji()=="sprzedaż" ? 'selected="selected"' : '')?> >Sprzedaż</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="pum" class="dzialka">
        <option value="" disabled>Wybierz PUM</option>
        <option value="mieszkaniowy" <?=($nieruchomosc -> getNieruchomosc_pum()=="mieszkaniowy" ? 'selected="selected"' : '')?> >mieszkaniowy</option>
        <option value="usługowy" <?=($nieruchomosc -> getNieruchomosc_pum()=="usługowy" ? 'selected="selected"' : '')?> >usługowy</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="klasa_gleby" class="dzialka">
        <option value="" disabled>Klasa gleby</option>
        <option value="-" <?=($nieruchomosc -> getNieruchomosc_klasaGleby()=="-" ? 'selected="selected"' : '')?> >Nie dotyczy</option>
        <option value="1" <?=($nieruchomosc -> getNieruchomosc_klasaGleby()=="1" ? 'selected="selected"' : '')?> >1</option>
        <option value="2" <?=($nieruchomosc -> getNieruchomosc_klasaGleby()=="2" ? 'selected="selected"' : '')?> >2</option>
        <option value="3" <?=($nieruchomosc -> getNieruchomosc_klasaGleby()=="3" ? 'selected="selected"' : '')?> >3</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="status" class="dzialka">
        <option value="" disabled>Rolna/budowlana</option>
        <option value="rolna" <?=($nieruchomosc -> getNieruchomosc_status()=="rolna" ? 'selected="selected"' : '')?> >rolna</option>
        <option value="budowlana" <?=($nieruchomosc -> getNieruchomosc_status()=="budowlana" ? 'selected="selected"' : '')?> >budowlana</option>
      </select>
    </td></tr>
    <tr><td>
      <input value="<?php echo $nieruchomosc -> getNieruchomosc_powierzchnia(); ?>" name="powierzchnia" placeholder="Powierzchnia (m2)">
    </td></tr>
    <tr><td>
      <input value="<?php echo $nieruchomosc -> getNieruchomosc_cena(); ?>" name="cena" placeholder="Cena (zł)">
    </td></tr>
    <tr><td>
      <select name="lokalizacja_1">
        <option value="" disabled>Lokalizacja N/S/W/E</option>
        <option value="N" <?=($nieruchomosc -> getNieruchomosc_lokalizacja1()=="N" ? 'selected="selected"' : '')?> >N</option>
        <option value="S" <?=($nieruchomosc -> getNieruchomosc_lokalizacja1()=="S" ? 'selected="selected"' : '')?> >S</option>
        <option value="E" <?=($nieruchomosc -> getNieruchomosc_lokalizacja1()=="E" ? 'selected="selected"' : '')?> >E</option>
        <option value="W" <?=($nieruchomosc -> getNieruchomosc_lokalizacja1()=="W" ? 'selected="selected"' : '')?> >W</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="lokalizacja_2" id="lokalizacja_2" onchange="lokalizacja();">
        <option value="" disabled>Obrzeża/Centrum</option>
        <option value="obrzeża" <?=($nieruchomosc -> getNieruchomosc_lokalizacja2()=="obrzeża" ? 'selected="selected"' : '')?> >Obrzeża</option>
        <option value="centrum" <?=($nieruchomosc -> getNieruchomosc_lokalizacja2()=="centrum" ? 'selected="selected"' : '')?> >Centrum Krakowa</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="dzielnica" id="dzielnice" class="form-control">
          <option value="" disabled>Wybierz</option>
          <option value="1" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="1" ? 'selected="selected"' : '')?> >Dzielnica I - Stare Miasto</option>
          <option value="2" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="2" ? 'selected="selected"' : '')?> >Dzielnica II - Grzegórzki</option>
          <option value="3" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="3" ? 'selected="selected"' : '')?> >Dzielnica III - Prądnik Czerwony</option>
          <option value="4" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="4" ? 'selected="selected"' : '')?> >Dzielnica IV - Prądnik Biały</option>
          <option value="5" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="5" ? 'selected="selected"' : '')?> >Dzielnica V - Krowodrza</option>
          <option value="6" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="6" ? 'selected="selected"' : '')?> >Dzielnica VI - Bronowice</option>
          <option value="7" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="7" ? 'selected="selected"' : '')?> >Dzielnica VII - Zwierzyniec</option>
          <option value="8" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="8" ? 'selected="selected"' : '')?> >Dzielnica VIII - Dębniki</option>
          <option value="9" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="9" ? 'selected="selected"' : '')?> >Dzielnica IX - Łagiewniki-Borek Fałęcki</option>
          <option value="10" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="10" ? 'selected="selected"' : '')?> >Dzielnica X - Swoszowice</option>
          <option value="11" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="11" ? 'selected="selected"' : '')?> >Dzielnica XI - Podgórze Duchackie</option>
          <option value="12" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="12" ? 'selected="selected"' : '')?> >Dzielnica XII - Bieżanów-Prokocim</option>
          <option value="13" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="13" ? 'selected="selected"' : '')?> >Dzielnica XIII - Podgórze</option>
          <option value="14" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="14" ? 'selected="selected"' : '')?> >Dzielnica XIV - Czyżyny</option>
          <option value="15" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="15" ? 'selected="selected"' : '')?> >Dzielnica XV - Mistrzejowice</option>
          <option value="16" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="16" ? 'selected="selected"' : '')?> >Dzielnica XVI - Bieńczyce</option>
          <option value="17" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="17" ? 'selected="selected"' : '')?> >Dzielnica XVII - Wzgórza Krzesławickie</option>
          <option value="18" <?=($nieruchomosc -> getNieruchomosc_dzielnica()=="18" ? 'selected="selected"' : '')?> >Dzielnica XVIII - Nowa Huta</option>
        </select> 
    </td></tr>
    <tr><td>
      <input value="<?php echo $nieruchomosc -> getNieruchomosc_pietro(); ?>" class="budynek" name="pietro" placeholder="Piętro">
    </td></tr>
    <tr><td>
      <input value="<?php echo $nieruchomosc -> getNieruchomosc_liczbaPieter(); ?>" class="budynek" name="liczba_pieter" placeholder="Liczba pięter">
    </td></tr>
    <tr><td>
      <select class="budynek" name="rodzaj_budynku">
        <option value="" disabled>Rodzaj budynku</option>
        <option value="2" <?=($nieruchomosc -> getNieruchomosc_rodzajBudynku()=="2" ? 'selected="selected"' : '')?> >Budynek wolnostojący</option>
        <option value="1" <?=($nieruchomosc -> getNieruchomosc_rodzajBudynku()=="1" ? 'selected="selected"' : '')?> >Kamienica</option>
        <option value="3" <?=($nieruchomosc -> getNieruchomosc_rodzajBudynku()=="3" ? 'selected="selected"' : '')?> >Blok</option>
      </select>                                         
    </td></tr>
    <tr><td>
      <input value="<?php echo $nieruchomosc -> getNieruchomosc_rokBudowy(); ?>" class="budynek" name="rok_budowy" placeholder="Rok budowy">
    </td></tr>
    <tr><td><textarea name="description"><?php echo $nieruchomosc -> getNieruchomosc_description(); ?></textarea></td></tr>
    <tr><td colspan="2">
      <input class="input-submit" name="addNieruchomosc" value="Zapisz" type="submit">
    
      <input class="input-submit cancel right" type="button" value="Anuluj" onClick="window.location.href='manage.php';" />
    </td></tr>                                            
   </table> 
  </form>                 

<script>
CKEDITOR.replace("description");
CKEDITOR.config.autoParagraph = false; 
CKEDITOR.config.entities = false;
CKEDITOR.config.entities_latin = false;
CKEDITOR.instances.description.updateElement();
</script>  
<!--lista plików do pobrania--> 

<script type="text/javascript"> 

function listing() { 
var input = document.getElementById("foto"); 
var ul = document.getElementById("lista"); 
while (ul.hasChildNodes()) { 
ul.removeChild(ul.firstChild); 
} 
for (var i = 0; i < input.files.length; i++) { 
var li = document.createElement("li"); 
li.innerHTML = input.files[i].name; 
ul.appendChild(li); 
} 
if(!ul.hasChildNodes()) { 
var li = document.createElement("li"); 
li.innerHTML = 'Nie wybrano żadnych plików'; 
ul.appendChild(li); 
} 
} 


</script>
<script type="text/javascript">

$('#container').ready(function() {
changeFiltrs();
});
lokalizacja();
</script>
  
</div>
<?php
include_once('bottom.php');
?>