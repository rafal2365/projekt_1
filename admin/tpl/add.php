<div id="container">
  <form id="add-form" class="add-form" method="post" action="" enctype="multipart/form-data">
  <table>
  <tr><td>
      <select name="typ_ogloszenia" id="typ_ogloszenia" onchange="changeFiltrs();">
        <option value="" disabled selected>Wybierz kategorię</option>
        <option value="działka">Działka</option>
        <option value="mieszkanie">Mieszkanie</option>
        <option value="dom">Dom</option>
      </select>
    </td></tr>
    <tr><td><input name="nieruchomosc_title" type="text" placeholder='Tytuł ogłoszenia' /></td></tr>
    <tr><td>
      <select name="rodzaj_transakcji">
      <option value="" disabled selected>Wynajem/sprzedaż</option>
      <option value="wynajem">Wynajem</option>
      <option value="sprzedaż">Sprzedaż</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="pum" class="dzialka">
        <option value="" disabled selected>Wybierz PUM</option>
        <option value="mieszkaniowy">mieszkaniowy</option>
        <option value="usługowy">usługowy</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="klasa_gleby" class="dzialka">
        <option value="" disabled selected>Klasa gleby</option>
        <option value="-">Nie dotyczy</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="status" class="dzialka">
        <option value="" disabled selected>Rolna/budowlana</option>
        <option value="rolna">rolna</option>
        <option value="budowlana">budowlana</option>
      </select>
    </td></tr>
    <tr><td>
      <input name="powierzchnia" placeholder="Powierzchnia (m2)">
    </td></tr>
    <tr><td>
      <input name="cena" placeholder="Cena (zł)">
    </td></tr>
    <tr><td>
      <select name="lokalizacja_1">
        <option value="" disabled selected>Lokalizacja N/S/W/E</option>
        <option value="N">N</option>
        <option value="S">S</option>
        <option value="E">E</option>
        <option value="W">W</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="lokalizacja_2" id="lokalizacja_2" onchange="lokalizacja();">
        <option value="" disabled selected>Obrzeża/Centrum</option>
        <option value="obrzeża">Obrzeża</option>
        <option value="centrum">Centrum Krakowa</option>
      </select>
    </td></tr>
    <tr><td>
      <select name="dzielnica" id="dzielnice" class="form-control">
          <option value="" disabled selected>Wybierz</option>
          <option value="1">Dzielnica I - Stare Miasto</option>
          <option value="2">Dzielnica II - Grzegórzki</option>
          <option value="3">Dzielnica III - Prądnik Czerwony</option>
          <option value="4">Dzielnica IV - Prądnik Biały</option>
          <option value="5">Dzielnica V - Krowodrza</option>
          <option value="6">Dzielnica VI - Bronowice</option>
          <option value="7">Dzielnica VII - Zwierzyniec</option>
          <option value="8">Dzielnica VIII - Dębniki</option>
          <option value="9">Dzielnica IX - Łagiewniki-Borek Fałęcki</option>
          <option value="10">Dzielnica X - Swoszowice</option>
          <option value="11">Dzielnica XI - Podgórze Duchackie</option>
          <option value="12">Dzielnica XII - Bieżanów-Prokocim</option>
          <option value="13">Dzielnica XIII - Podgórze</option>
          <option value="14">Dzielnica XIV - Czyżyny</option>
          <option value="15">Dzielnica XV - Mistrzejowice</option>
          <option value="16">Dzielnica XVI - Bieńczyce</option>
          <option value="17">Dzielnica XVII - Wzgórza Krzesławickie</option>
          <option value="18">Dzielnica XVIII - Nowa Huta</option>
        </select> 
    </td></tr>
    <tr><td>
      <input class="budynek" name="pietro" placeholder="Piętro">
    </td></tr>
    <tr><td>
      <input class="budynek" name="liczba_pieter" placeholder="Liczba pięter">
    </td></tr>
    <tr><td>
      <select class="budynek" name="rodzaj_budynku">
        <option value="" disabled selected>Rodzaj budynku</option>
        <option value="2">Budynek wolnostojący</option>
        <option value="1">Kamienica</option>
        <option value="3">Blok</option>
      </select>                                         
    </td></tr>
    <tr><td>
      <input class="budynek" name="rok_budowy" placeholder="Rok budowy">
    </td></tr>
    <tr><td><textarea name="description">Treść ogłoszenia</textarea></td></tr>
    <tr><td>
    <input type="file" onchange="listing();" name="file[]" id="foto" size="40"  multiple="" required>
    <ul id="lista"><li>Brak zaznaczonych plików</li></ul>     
    </td></tr>
    <tr><td colspan="2">
      <input class="input-submit" name="addNieruchomosc" value="Dodaj ogłoszenie" type="submit">
    
      <input class="input-submit left" name="podglad" value="Podgląd ogłoszenia" type="submit">
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
  
</div>
<?php
include_once('bottom.php');
?>