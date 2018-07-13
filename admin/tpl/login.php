<div id="login_container">

  <div id="login-form">
      <form id="login_form" method="post" action="">
        <table>
          <tr align="center" valign="middle">
          <p id="login_error_message">Błędny login lub hasło. Spróbuj ponownie.</p>
          <td>Login: </td><td><input name="login" type="input" placeholder="Login"></td>
          </tr>
          <tr align="center" valign="middle">
          <td>Hasło: </td><td><input name="passwd" type="password" placeholder="Hasło"></td>
          </tr>
          <tr align="center" valign="middle">
          <td colspan="2"><input name="login-btn" type="submit" value="zaloguj"></td>
          </tr>
        </table>
      </form>
  </div>
</div>



<? include('bottom.php'); ?>