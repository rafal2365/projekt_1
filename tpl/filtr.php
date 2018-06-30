<body>
 <div id="filtr_container">
    <div id="search">
      <form method="post" action="" name="filtr" id="filtr" class="form-inline">
      <label>Czego szukasz?</label><br />
      <select id="typ_wyszukiwania" name="typ_wyszukiwania" onchange="changeFiltrs();" class="form-control">
        <option value="" disabled selected>Wybierz czego szukasz...</option>
        <option value="działka">Działka</option>
        <option value="mieszkanie">Mieszkanie</option>
        <option value="dom">Dom</option>
      </select>
     <!-----------RODZAJ - SPRZEDAŻ/WYNAJEM---------------------------------------------------> 
      <select name="rodzaj" id="rodzaj_id" class="form-control">
      <option value="" disabled selected>Sprzedaż/Wynajem</option>
      <option value="sprzedaż">Sprzedaż</option>
      <option value="wynajem">Wynajem</option>
     </select>
      
      <br /><br />
     <!-------------------- PUM - cokolwiek to kurwa znaczy ------------------------------------------>   
       <div class="dzialka">
          <select name="pum" class="form-control">
          <option value="" disabled selected>PUM</option>
          <option value="mieszkaniowy">mieszkaniowy</option>
          <option value="usługi">usługi</option>
        </select>
     <!-------------------KLASA GLEBY------------------------------------------->
          <select name="klasa_gleby" class="form-control">
            <option value="" disabled selected>Klasa gleby</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
     <!-------------------TYP - rolna/budowlana------------------------------------------->
        <select name="status" class="form-control">
          <option value="" disabled selected>Rolna/budowlana</option>
          <option value="rolna">Rolna</option>
          <option value="budowlana">Budowlana</option>
        </select><br /><br />
      </div>
     <!------------------POWIERZCHNIA-------------------------------------------->     
       <input name="powierzchnia_od" class="form-control mr-sm-2 mb-2 mb-sm-0" type="text" placeholder="Powierzchnia od (m2)" />                         
      <input name="powierzchnia_do" class="form-control mr-sm-2 mb-2 mb-sm-0" type="text" placeholder="Powierzchnia do (m2)" />
        <br /><br />
     <!-----------------------CENA--------------------------------------->   
      <input name="cena_od" class="form-control mr-sm-2 mb-2 mb-sm-0" type="text" placeholder="Cena od (zł)">
      <input name="cena_do" class="form-control mr-sm-2 mb-2 mb-sm-0" type="text" placeholder="Cena do (zł)">
       <br /><br /> 
     <!------------------LOKALIZACJA-------------------------------------------->   
      <label>Lokalizaja</label><br />
        <select name="lokalizacja_1" class="form-control">
          <option value="" disabled selected>Wybierz</option>
          <option value="n">Północ</option>
          <option value="s">Południe</option>
          <option value="e">Wschód</option>
          <option value="w">Zachód</option>  
        </select>
        <select name="lokalizacja_2" id="lokalizacja_2" onchange="lokalizacja();" class="form-control">
          <option value="" disabled selected>Wybierz</option>
          <option value="obrzeża">Obrzeża Krakowa</option>
          <option value="centrum">Centrum Krakowa</option>
        </select>
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
        </select> <br /><br />
     
        <input type="submit" class="btn btn-primary mt-2 mt-sm-0" name="filtruj" value="filtruj" /> 
        
      </form>
    </div>
 </div>