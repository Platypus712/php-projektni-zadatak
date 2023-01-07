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
                StreetGain<span>Z</span> stranicu!
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 position-relative justify-self-center">
          <div data-aos="zoom-in-down">
            <a href="#about" class="arrow page-scroll">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
      <!-- KRAJ PROSTORA ZA GLAVNI NATPIS -->
      <div id="about" class="about container pt-5">
        <!-- ABOUT SEKCIJA -->
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-around">
            <div
              class="col-lg-7 col-10 text-center flex-column justify-content-center d-flex"
            >
              <div data-aos="fade-right">
                <div class="title">Tko smo mi?</div>
                <p class="my-5">
                  Pozdrav svima, mi smo StreetGainZ, street workout zajednica
                  koja aktivno djeluje na području Republike Hrvatske od 2019.
                  godine. Naše djelovanje se temelji na popularizaciji street
                  workouta kao relativno mladoga sporta kroz razne sadržaje
                  edukativnog i zabavnog karaktera. Cilj je potaknuti što više
                  ljudi različitih uzrasta na bavljenje tjelesnom aktivnošću
                  kroz metode uličnog treninga.
                </p>
                <button
                  type="button"
                  class="btn btn-outline-dark btn-lg mx-auto"
                >
                  <a href="about.html">Saznaj više o nama!</a>
                </button>
              </div>
            </div>

            <div class="col-lg-4 col-10">
              <div data-aos="fade-left" data-aos-duration="1500">
                <img class="about-img" src="images/tim.webp" alt="tim" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ ABOUT SEKCIJE -->

      <div id="about-sw" class="about-sw container">
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-around my-5">
            <div class="col-lg-4 col-10">
              <div data-aos="fade-up">
                <img
                  class="about-sw-img"
                  src="images/erwin-index.webp"
                  alt="erwin"
                />
              </div>
            </div>
            <div
              class="col-lg-8 text-center flex-column justify-content-center d-flex"
            >
              <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="title">Što je Street Workout?</div>
                <p class="my-4">
                  Ulično vježbanje (eng. Street Workout) je polistrukturalni
                  sport koji promovira bazično vježbanje uz pomoć vlastitog
                  tijela. Osnovne vježbe korištene u ovom sportu su: Zgibovi,
                  sklekovi, propadanja, čučnjevi i mnoge druge... Cilj ovakvog
                  načina treniranja je postizanje: lijepog i skladnog izgleda,
                  funkcionalnog i zdravog tijela.
                </p>
                <p class="mb-1">
                  Osim bazičnih vježbi (Sets&Reps-a), postoji i druga grana
                  SW-a; Freestyle koja se sastoji od statičnih i dinamičkih
                  elemenata. Neki od najpopularnijih su: zastava (eng. human
                  flag), stoj na rukama (eng. handstand), prednju i stražnju
                  vagu (eng. front and back lever) i planche. Treća, relativno
                  nova grana ovog sporta, jest Street lifting.
                </p>
                <button
                  type="button"
                  class="btn btn-outline-dark btn-lg mt-5 mx-auto"
                >
                  <a href="about.html#about-sw"
                    >Želiš saznati više o ovom sportu?</a
                  >
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ ABOUT SW SEKCIJE -->

      <div class="gallery container mt-5">
        <!-- GALLERY SEKCIJA -->
        <div data-aos="fade-down" data-aos-anchor-placement="top-bottom">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/swiper-1.webp" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="images/swiper-2.webp" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="images/swiper-3.webp" alt="" />
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center mt-3">
              <button type="button" class="btn btn-outline-dark btn-lg">
                <a href="gallery.html">Pogledaj cijelu galeriju!</a>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ GALLERY SEKCIJE -->

      <div class="shop container mt-4">
        <!-- SHOP SEKCIJA -->
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-center">
            <div
              class="col-lg-10 text-center flex-column justify-content-center d-flex"
            >
              <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div id="shop" class="title">
                  StreetGainZ shop <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <p>
                  Shop je trenutno u fazi razvoja i nije u funkciji pa stoga
                  prati napredak na progress baru!
                </p>
                <div class="progress">
                  <div
                    class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                    role="progressbar"
                    aria-valuenow="30"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 30%"
                  >
                    30%
                  </div>
                </div>
                <button
                  type="button"
                  class="btn btn-outline-dark btn-lg mt-3 mx-auto"
                >
                  <a href="shop.html">Pogledaj cijelu ponudu!</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ SHOP SEKCIJE -->

      <div class="map container mt-5">
        <!-- MAP SEKCIJA -->
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-around">
            <div
              class="col-lg-7 col-10 text-center flex-column justify-content-center d-flex"
            >
              <div data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                <div id="map" class="title">
                  Pronađi park u svojoj blizini
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <p>
                  Želiš trenirati, a nisi siguran gdje ti je najbliži SW park?
                  <br />
                  Pronađi ga na ovoj interaktivnoj karti!
                </p>
                <p>
                  Pronađi svoju adresu i saznaj koliko je udaljen najbliži park
                  od tebe. <br />
                  (Ako želiš, možeš popuniti obrazac i dodati svoj park na
                  kartu!)
                </p>
                <p>
                  P.S. Trenutno su prikazani parkovi samo za grad Zagreb no
                  radimo intenzivno na proširenju!
                </p>
                <button
                  type="button"
                  class="btn btn-outline-dark btn-lg mx-auto"
                >
                  <a href="park-search.html">Klikni i pronađi park!</a>
                </button>
              </div>
            </div>
            <div class="col-lg-5 col-10">
              <div data-aos="fade-down">
                <img class="map-img" src="images/park-serach.webp" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ MAP SEKCIJE -->

      <div id="faq" class="faq container mt-5">
        <!-- FAQ SEKCIJA -->
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-center">
            <div class="col-11">
              <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="title align-left">Najčešća pitanja?</div>
              </div>
              <div
                class="col-11 accordion accordion-flush mt-3"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      Koliko vas je u timu i tko je glavni?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Od osnutka tima dosta je ljudi prošlo kroz tim, no
                        trenutno nas je 7. Nema stroge hijerarhije u timu tako
                        da nema "šefa" jer svi si pomažemo i dopunjujemo se
                        međusobno. Svako ima neku svoju određenu zadaću, no
                        uvijek uskačemo jedni drugima ukoliko je potrebno kako
                        bi završni proizvod ili projekt bio što kvalitetniji.
                        Stjepan je jedan od osnivača tima i najviše je u ovom
                        sportu pa shodno tomu ima i najviše znanja pa njega
                        smatramo kao predstavnika tima i nekoga tko ima glavnu
                        riječ.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      Imate li u planu raditi grupne treninge i u drugim
                      gradovima?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Trenutno zbog različitih obaveza kao što su škola, faks,
                        financije i druge privatne obaveze nismo u stanju ići
                        često po drugim gradovima, no imamo veliku želju raditi
                        takvo što. Za sada smo organizirali grupni trening u
                        četiri različita grada: Zagreb, Split, Makarska i
                        Beograd. Smatramo da je to izuzetan način promocije ovog
                        sporta, ali i sjajan način da upoznamo našu publiku te
                        se zajedno podružimo, razmijenimo iskustva i treniramo.
                        <br />
                        Mi smo uvijek raspoloženi ići u neko mjesto na neki
                        događaj stoga ako ima netko tko nas želi ugostiti,
                        pokriti troškove prijevoza i puta, neka nas slobodno
                        kontaktira. Za daljnje grupne treninge pratite nas na
                        našem službenom
                        <a
                          href="https://www.instagram.com/streetgainz_/"
                          target="_blank"
                          >instagramu</a
                        >
                        jer tamo izlaze sve obavijesti vezano uz to
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      Koliko dugo trenirate?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Stjepan je krenuo prije pet godina i on se najduže bavi
                      ovim sportom. Osim toga, trenira i Judo 14 godina. Nikola
                      i Erwin su najkraće u ovom sportu jer su tek prije dvije
                      godine krenuli, a ostatak ekipe je tu negdje između te
                      dvije brojke pa je neki prosjek tima oko tri godine.
                      Detaljniji opis svakog člana možete pronaći
                      <i class="fa-solid fa-arrow-right"></i>
                      <a href="about.html#members">ovdje</a>.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour"
                      aria-expanded="false"
                      aria-controls="flush-collapseFour"
                    >
                      Primate li nove članove u tim?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Zadnje širenje tima je bilo prilikom priključenja
                        Antonia Korajca. Za sada nije u planu neko novo širenje,
                        svatko ima svoju zadaću i ulogu tako da stvari trenutno
                        dobro funkcioniraju. Opciju širenja tima u budućnosti
                        nećemo isključiti, ali trenutno smatramo da nas je
                        dovoljno i nismo u potrazi za novim članovima.
                        StreetGainZ je zajednica ljudi koji imaju neku dobru
                        koheziju i duže poznanstvo između sebe jer to je
                        preduvjet za napredak cijelog tima. <br />
                        Ukoliko pak smatraš da imaš nešto inovativno što bi
                        mogao ponuditi našoj zajednici, slobodno nas kontaktiraj
                        pa ćemo zajednički raspraviti o daljnjim mogućnostima.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive"
                      aria-expanded="false"
                      aria-controls="flush-collapseFive"
                    >
                      Hoće li majice biti dostupne za sve ili samo za članove
                      tima?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Trenutno su samo za članove, no zadnjih par mjeseci puno
                        vremena i truda ulažemo u razvoj web shopa stoga
                        napredak možete pratiti
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="shop.html">ovdje</a>. Također, paralelno radimo
                        i na ostalim proizvodima i različitim dizajnovima za
                        iste. Osim majica, u ponudi će biti i mnoštvo drugih
                        stvari za koje se nadamo da će vam se svidjeti.
                        Pretplati se na naš newsletter kako bi prvi bio
                        obaviješten o novim stvarima.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseSix"
                      aria-expanded="false"
                      aria-controls="flush-collapseSix"
                    >
                      Radite li planove treninga i ishrane?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Da, radimo! Konkretno, naš član
                        <a href="about.html#faq-zaba">Stjepan Žabčić</a>
                        izrađuje personalizirane planove treninga s njegovim
                        vođenjem shodno vašim ciljevima i trenutnom trenažnom
                        stanju. Ukoliko te zanima što sve možeš dobiti u tom
                        planu klikni <i class="fa-solid fa-arrow-right"></i>
                        <a
                          href="https://www.mediafire.com/file/7m8bis6cxnqmcnk/StreetGainZ_plan_info.pdf/file"
                          target="_blank"
                          >ovdje</a
                        >. Također, Stjepan drži privatne treninge na području
                        grada Zagreba, tako da ste slobodni kontaktirati ga
                        putem njegovih društvenih mreža ili putem obrasca ispod.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KRAJ FAQ SEKCIJE -->

      <div class="index-form container mt-5">
        <!-- POČETAK INDEX FORM SEKCIJE -->
        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
          <div class="row justify-content-center">
            <div data-aos="fade-down" data-aos-anchor-placement="top-bottom">
              <div class="col-11 title">
                Imaš pitanje za nas ili želiš suradnju?
              </div>
              <div class="col-12 subtitle mb-3">
                Kontaktiraj nas putem našeg maila
                <span>info@streetgainz.net</span> ili putem ovog obrasca u
                prilogu!
              </div>
            </div>
            <form id="collaborationForm">
              <div class="mb-3 col-12 text-center">
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control name-collaboration"
                  placeholder="Unesite Vaše ime ili ime organizacije"
                  required
                />
              </div>
              <div class="mb-3 col-12">
                <input
                  type="email"
                  name="email"
                  class="form-control email-collaboration"
                  placeholder="Unesite email oblika name@example.com"
                  required
                  checked
                />
              </div>
              <div class="mb-3 col-12">
                <textarea
                  id="textbox"
                  name="message"
                  class="form-control message-collaboration"
                  cols="15"
                  rows="8"
                  placeholder="Prostor za vašu poruku..."
                  value=""
                  required
                ></textarea>
              </div>
              <div class="mt-3 col-12 text-center">
                <button
                  type="submit"
                  class="btn btn-outline-dark btn-lg text-white"
                >
                  Pošalji!
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- KRAJ INDEX FORM SEKCIJE -->';

?>
