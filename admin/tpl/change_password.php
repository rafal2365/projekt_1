<?php
include_once('./top.php');
$user = $_SESSION['login'];
?>

<div id="main_container">
   <div id="container">
     <div id="content">
        <form method="post" action="">
          <table>
            <tr><td>Aktualne hasło: </td><td><input name="current_password" type="text" /></td></tr>
            <tr><td>Nowe hasło: </td><td><input name="new_password" type="text" /></td></tr>
            <tr><td colspan="2"><input name="change" value="Zapisz" type="submit" /></td></tr>
            <input name="user" type="hidden" value="<?php echo $user; ?>" />
          </table>
        </form>
      </div>
   </div>
   
</div>



<?php
include_once('bottom.php');

?>