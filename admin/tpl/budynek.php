<div class="col-sm-3 bg-light"><table class="table">
    <thead>
      <tr>
        <th>Parametr</th>
        <th>Wartość</th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>Cena</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_cena(); ?></td>
      </tr>
      <tr>
        <td>Powierzchnia</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_powierzchnia()." m2"; ?></td>
      </tr>
        <tr>
        <td>Piętro</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_pietro(); ?></td>
      </tr>
      <tr>
        <td>Liczba pięter</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_liczbaPieter(); ?></td>
      </tr>
        <tr>
        <td>Rodzaj budynku</td>
        <td><?php echo $rodzaj_budynku[$nieruchomosc -> getNieruchomosc_rodzajBudynku()]; ?></td>
      </tr>
        <tr>
        <td>Rok budowy</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_rokBudowy(); ?></td>
      </tr>
      <tr>
        <td>Rodzaj transakcji</td>
        <td><?php echo $nieruchomosc -> getNieruchomosc_rodzajTransakcji(); ?></td>
      </tr>
        <br />
    </tbody>
  </table></div>