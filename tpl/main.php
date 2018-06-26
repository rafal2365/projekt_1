<?php
include_once('top.php');
?>

<body>
 <div id="container">
    <div id="search">
      <form method="post" action="" name="filtr">
      <label>Czego szukasz?</label><br />
      <select id="typ_wyszukiwania" name="typ_wyszukiwania" onchange="changeFiltrs();">
        <option value="" disabled selected>Wybierz czego szukasz...</option>
        <option value="działka">Działka</option>
        <option value="mieszkanie">Mieszkanie</option>
        <option value="dom">Dom</option>
      </select><br />
     <!-------------------------------------------------------------->   
       <div class="dzialka">
        <label>PUM</label>
          <select name="pum">
          <option value="mieszkaniowy">mieszkaniowy</option>
          <option value="usługi">usługi</option>
        </select><br />
        </div>   
     <!-------------------------------------------------------------->            
       <div class="dzialka"> 
        <label>Klasa gleby</label>
          <select name="klasa_gleby">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select><br />
         </div> 
     <!-------------------------------------------------------------->     
       <label>Powierzchnia od</label> 
        <select name="size_od">
          <?php
            for($i=0;$i<10000;$i+=100)
            {
              echo "<option value=".$i.">".$i."</option>";
            }
          ?>
        </select>
     <!-------------------------------------------------------------->                          
      <label>Powierzchnia do</label>
        <select name="size_do">
          <?php
            for($i=0;$i<10000;$i+=100)
            {
              echo "<option value=".$i.">".$i."</option>";
            }
          ?>
        </select><br />
     <!-------------------------------------------------------------->   
      <label>Cena od</label>
        <select name="price_od">
          <?php
            for($i=0;$i<10000;$i+=100)
            {
              echo "<option value=".$i.">".$i."</option>";
            }
          ?>
        </select>
     <!-------------------------------------------------------------->   
       <label>Cena do</label>
        <select name="price_do">
          <?php
            for($i=0;$i<10000;$i+=100)
            {
              echo "<option value=".$i.">".$i."</option>";
            }
          ?>
        </select><br /> 
     <!-------------------------------------------------------------->
     <div class="dzialka"> 
      <label>Typ</label>
        <select name="typ">
          <option value="rolna">Rolna</option>
          <option value="budowlana">Budowlana</option>
        </select><br />
      </div>  
     <!-------------------------------------------------------------->   
      <label>Lokalizaja</label>
        <select name="lokalizacja_1">
          <option value="n">Północ</option>
          <option value="s">Południe</option>
          <option value="e">Wschód</option>
          <option value="w">Zachód</option>  
        </select>
        <select name="lokalizacja_2">
          <option value="obrzeża">Obrzeża Krakowa</option>
          <option value="centrum">Centrum Krakowa</option>
        </select>
        <select name="dzielnica">
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
        </select> <br />
     
        <input type="submit" name="filtruj" value="filtruj" />
        
      </form>
    </div>
 </div>
 <?php
 include_once('bottom.php');
 ?>
