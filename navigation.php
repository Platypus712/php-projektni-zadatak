<?php 

// Start the session
session_start();

// Check if the user is logged in
$loggedIn = false;
if (isset($_SESSION['username']) && $_SESSION['username'] == 'Nikola' && isset($_SESSION['password']) && $_SESSION['password'] == 'NikolaJeSuper123') {
  $loggedIn = true;
}

	print '
  <div class="container">
    <!-- NAVBAR -->
    <nav class="navbar row">
      <div class="content">
        <div class="logo">
          <a href="index.html"><img src="images/logo.webp" alt="" /></a>
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn"><i class="fa-solid fa-x"></i></div>
          <li><a class="active" href="index.php?menu=1">Početna</a></li>
          <li><a href="index.php?menu=2">O nama</a></li>
          <li><a href="index.php?menu=3">Shop</a></li>
          <li><a href="index.php?menu=4">Galerija</a></li>
          <li><a href="index.php?menu=5">Pronađi park</a></li>
          <li><a href="index.php?menu=6">Kontakt</a></li>';

		if (!$loggedIn) {
			print '
			<li><a href="index.php?menu=7">Prijava</a></li>';
    }
    else {
			print '
			<li><a href="odjava.php">Odjava</a></li>';
		}
		print '
        </ul>
        <div class="icon menu-btn"><i class="fa-solid fa-bars"></i></div>
      </div>
    </nav>
  </div>
  <!-- END OF NAVBAR -->';
?>