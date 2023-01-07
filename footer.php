<?php

print '
<div class="container py-4 mt-5">
  <!-- POČETAK FOOTER SEKCIJE -->
  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
      <img src="images/logo.webp" alt="" />
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
      <div class="ftext mb-2">IZBORNIK</div>
      <ul class="list-unstyled fmenu">
        <li><a href="index.php?menu=1">Početna</a></li>
        <li><a href="index.php?menu=2">O nama</a></li>
        <li><a href="index.php?menu=3">Shop</a></li>
        <li><a href="index.php?menu=4">Galerija</a></li>
        <li><a href="index.php?menu=5">Pronađi park</a></li>
        <li><a href="index.php?menu=6">Kontakt</a></li>
        <li><a href="index.php?menu=7">Registracija</a></li>
        <li><a href="index.php?menu=8">Prijava</a></li>
      </ul>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
      <div class="ftext">Newsletter</div>
      <p class="small text-white">
        Prati najnovije informacije o našem radu i svim našim događajima!
      </p>
      <form id="newsletterForm">
        <div class="input-group mb-3">
          <input class="form-control email-newsletter" type="email" name="email" placeholder="Unesite email oblika name@example.com" />
          <button class="btn btn-primary" id="button-addon2" type="submit" >
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </form>
      <div class="ftext mb-3">DRUŠTVENE MREŽE</div>
      <ul class="list-unstyled social d-flex align-items-center justify-content-center" >
        <li>
          <a href="https://www.youtube.com/c/StreetGainZ" target="_blank"><i class="fa-brands fa-youtube fa-xl"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/streetgainz_/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@streetgainz?lang=en" target="_blank"><i class="fa-brands fa-tiktok fa-xl"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/groups/3693239400804956" target="_blank"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
        </li>
      </ul>
    </div>
    <div class="col-12 text-center">
    <hr />
      <p class="small text-white mb-0">
        &copy; Copyrights. All rights reserved. Made by Nikola Pustišek
          <a class="text-white" href="https://github.com/Platypus712" target="_blank">
                <i class="fa-brands fa-github fa-lg"></i></a>
      </p>
    </div>
  </div>
</div>
<!-- KRAJ FOOTER SEKCIJE -->';
?>