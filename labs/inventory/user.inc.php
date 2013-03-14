<?php
    // check session variable is set
    if (isset($_SESSION['access_login'])) {
      // if set, greet by name
      echo '<strong>' . $_SESSION['access_login'] . '</strong>';
    } else {
      // if not set, send back to login
      echo 'We do not recognize you. Please retry. <a href="index.php">Login</a>';
    }
?>