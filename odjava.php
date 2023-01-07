<?php
  // Start the session
  session_start();

  // Unset all of the session variables
  $_SESSION = array();
  
  // Destroy the session
  session_destroy();

  // Redirect to the login page
  header("Location: index.php?menu=1");
  exit;

print '
<form action="/odjava.php" method="post">
  <input type="submit" value="Log Out">
</form>';
?>
