<?php

$user = $_SESSION['login'];

?>

<div id="top_info">
        <span>Jesteś zalogowany jako <label><?php echo ucwords($user); ?></label> </span><a href="logout.php?login=<?php echo $_SESSION['login']; ?>">wyloguj</a>
      </div>
<div id="navigation">
        <ul>
          <li><a href="add.php">Dodaj ogłoszenie</a></li>
          <li><a href="manage.php">Zarządzaj ogłoszeniami</a></li>
          <li><a href="change_password.php">Zmień hasło</a></li>
        </ul>
      </div> 