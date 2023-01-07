<?php

  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the entered credentials
    if ($username == 'Nikola' && $password == 'NikolaJeSuper123') {
      // Success! Redirect to the protected page
      header('Location: /protected.php');
      exit;
    } else {
      // Invalid credentials
      echo 'Invalid username or password';
    }
  }

print '
<button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-chevron-up"></i>
      </button>
      <div class="banner container">
        <!-- PROSTOR ZA GLAVNI NATPIS -->
        <div class="row justify-content-center">
          <div class="col-lg-12 col-11">
            <div class="main-title text-center">
              <div data-aos="zoom-in-down">
                Prijavi se!
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 position-relative justify-self-center">
          <div data-aos="zoom-in-down">
            <a href="#login" class="arrow page-scroll">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
      <!-- KRAJ PROSTORA ZA GLAVNI NATPIS -->
      <!-- PROSTOR ZA FORMU -->
      <div class="fdiv">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-10 justify-content-center">
            <div data-aos="zoom-in-up">
              <form class="form" id="contactForm">
                <div class="ftitle text-center justify-content-between d-flex">
                  PRIJAVI SE!
                  <span
                    ><i class="fa fa-envelope-o"></i> info@streetgainz.net</span
                  >
                </div>
                <p>Korisničko ime:</p>
                <input
                  class="user-contact-firstname"
                  type="text"
                  name="username"
                  id="name"
                  placeholder="Unesite Vaše ime"
                  required
                />
                <p>Lozinka:</p>
                <input type="password" name="password" id="password" required>
                <button class="fbtn" type="submit">Pošalji</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ PROSTORA ZA FORMU -->';

?>

