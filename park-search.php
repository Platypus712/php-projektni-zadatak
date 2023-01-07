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
                Dobrodošli na službenu <br />
                StreetGain<span>Z</span> tražilicu parkova
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 position-relative justify-self-center">
          <div data-aos="zoom-in-down">
            <a href="#googleMap" class="arrow page-scroll">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
      <!-- KRAJ PROSTORA ZA GLAVNI NATPIS -->

      <div class="map container">
        <div data-aos="zoom-in-down">
          <div class="row justify-content-center">
            <div
              class="col-lg-12 col-10 align-items-center justify-content-center"
            >
              <div id="googleMap" style="height: 500px"></div>
              <div class="col-lg-12 text-center my-3">
                <div id="park">
                  <h1 id="park-name" class="heading text-center my-3">
                    Klikni na park za više informacija!
                  </h1>
                  <div data-aos="zoom-in-up">
                    <img id="park-image" src="" alt="" />
                    <h2 id="subtitle" class="subtitle mt-4"></h2>
                    <p id="park-description" class="pdescription"></p>
                    <h3 id="eq-subtitle" class="subtitle mt-4"></h3>
                    <p id="park-equipment" class="pequipment"></p>
                    <p id="park-link" class="park-link"></p>
                    <p id="park-rating" class="rating"></p>
                    <p id="rating-value" class="rating-value"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PROSTOR ZA FORMU -->
      <div class="fdiv">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-10 justify-content-center">
            <div data-aos="zoom-in-up">
              <form class="form" id="parkMap">
                <div class="ftitle text-center justify-content-between d-flex">
                  POŠALJI PARK!
                  <span
                    ><i class="fa fa-envelope-o"></i> info@streetgainz.net</span
                  >
                </div>
                <p>Ime:</p>
                <input
                  class="user-park-firstname"
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Unesite Vaše ime"
                  required
                />
                <p>Prezime:</p>
                <input
                  class="user-park-lastname"
                  type="text"
                  name="lastname"
                  id="prezime"
                  placeholder="Unesite Vaše prezime"
                  required
                />
                <p>Email:</p>
                <input
                  class="user-park-email"
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Unesite email oblika name@example.com"
                  required
                  checked
                />
                <p>Naziv parka:</p>
                <input
                  class="user-park-name"
                  type="text"
                  name="park-name"
                  id="park-name"
                  placeholder="Unesite ime parka"
                  required
                />
                <p>Opis parka:</p>
                <textarea
                  class="user-park-bio"
                  id="park-bio"
                  name="park-bio"
                  cols="5"
                  rows="3"
                  placeholder="Kratki opis parka i popis sprava"
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
