<?php

# Variables MUST BE INTEGERS
if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

# Variables MUST BE STRINGS A-Z
  if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }



print '
<!-- StreetGainZ website -> Index page -->
<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Nikola Pustišek" />
    <meta name="description" content="Službena stranica StreetGainZ tima." />

    <meta
      name="keywords"
      content="streetworkout, calisthenics, streetgainz, workout"
    />
    <title>StreetGainZ | Početna</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <link rel="stylesheet" href="css/park-search.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <script
      src="https://kit.fontawesome.com/4c44b9ed88.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico" />
  </head>

  <body>
    <header>';
        include("navigation.php");
    print '
    </header>

    <main>';

    //Početna
    if (!isset($menu) || $menu == 1) { include("pocetna.php"); }
    
    //O nama
    else if ($menu == 2) { include("about.php"); }
    
    //Webshop
    else if ($menu == 3) { include("shop.php"); }
    
    //Galerija
    else if ($menu == 4) { include("gallery.php"); }
    
    //Tražilica parkova
    else if ($menu == 5) { include("park-search.php"); }
    
    //Kontakt
    else if ($menu == 6) { include("contact.php"); }
    
    //Prijava
    else if ($menu == 7) { include("prijava.php"); }
    
    print '
    </main>

    <footer>';
      include("footer.php");
    print '</footer>
    
    <!-- Extra JavaScript -->
    <script>
    // COUNTER
      $(".counter").counterUp({
        time: 3500,
      });
      $(".counter").addClass("animated fadeInDownBig");
      $("h3").addClass("animated fadeIn");
    </script>

    <!-- Extra JavaScript -->
    <script>
      // JQUERY ZA SCROLL
      $("a.page-scroll").on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          {
            scrollTop: $($(this).attr("href")).offset().top - 100,
          },
          50
        );
      });
    </script>


    <!-- JS ZA BOOTSTRAP-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      ;
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      ;
      crossorigin="anonymous"
      ;
    ></script>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- LIGHTBOX JS -->
    <script src="js/lightbox/lightbox.js"></script>
    <script>
      lightbox.option({
        resizeDuration: 200,
        wrapAround: true,
        showImageNumberLabel: false,
        imageFadeDuration: 100,
        disableScrolling: true,
      });
    </script>

    <!-- MAP JS -->
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoJTXMKE-oqnr7I3hOjxlbsMB0WryOGdc&callback=myMap"
    ></script>

    <script>
      function myMap() {
        var map, center;
        center = { lat: 45.80433861364107, lng: 15.995081167936178 };
        map = new google.maps.Map(document.getElementById("googleMap"), {
          zoom: 12,
          center: center,
        });
        window.map = map;
        window.google = google;
      }
    </script>

    <script src="js/park.js"></script>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>
  </body>
</html>';

?>
