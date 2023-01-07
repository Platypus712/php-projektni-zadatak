<?php

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
                Imaš dodatnih pitanja ili jednostavno <br />
                želiš saznati više o nama?
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 position-relative justify-self-center">
          <div data-aos="zoom-in-down">
            <a href="#contact" class="arrow page-scroll">
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
                  KONTAKTIRAJ NAS!
                  <span
                    ><i class="fa fa-envelope-o"></i> info@streetgainz.net</span
                  >
                </div>
                <p>Ime:</p>
                <input
                  class="user-contact-firstname"
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Unesite Vaše ime"
                  required
                />
                <p>Prezime:</p>
                <input
                  class="user-contact-lastname"
                  type="text"
                  name="lastname"
                  id="prezime"
                  placeholder="Unesite Vaše prezime"
                  required
                />
                <p>Email:</p>
                <input
                  class="user-contact-email"
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Unesite email oblika name@example.com"
                  required
                  checked
                />
                <p>Prostor za tekst:</p>
                <textarea
                  class="user-contact-message"
                  id="textbox"
                  name="message"
                  cols="5"
                  rows="3"
                  placeholder="Prostor za vašu poruku..."
                  value=""
                  required
                ></textarea>
                <button class="fbtn" type="submit">Pošalji</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ PROSTORA ZA FORMU -->';

?>

