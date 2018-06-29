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
          <td>PUM</td>
          <td><?php echo $nieruchomosc -> getNieruchomosc_pum(); ?></td>
        </tr>
        <tr>
          <td>Rodzaj działki</td>
          <td><?php echo $nieruchomosc -> getNieruchomosc_status(); ?></td>
        </tr>
        <tr>
          <td>Klasa gleby</td>
          <td><?php echo $nieruchomosc -> getNieruchomosc_klasaGleby(); ?></td>
        </tr>
        <tr>
          <td>Rodzaj transakcji</td>
          <td><?php echo $nieruchomosc -> getNieruchomosc_rodzajTransakcji(); ?></td>
        </tr>
        <br />
    </tbody>
  </table></div>