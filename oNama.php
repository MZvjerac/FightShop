<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="stilF.css"/>-->
  <title>Martial Arts Fighting Area</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet"> <!--LINK KA AWESOME FONTU-->
  
  <style type="text/css">
    body
    {

      -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      object-position: top-right;
      background-repeat: no-repeat;
      background-size: 100% 21.2%    
    }

    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 12px;
      width: 12px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3s;
      animation-name: fade;
      animation-duration: 3s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }

    .background
    {
     width: 100%;
     height: 300px;

     background-image: url("img/borac2.jpg");
     padding: 0;
   }
 </style>
</head>

<body >
  <div class="container-fluid">
    <div class="background">

    </div>

    <?php include "php/nav.php"; ?>


    <div class="page-header">
      <h2>O nama</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p class="text-justify">
          <strong>M.A.F.A.</strong> je na prvom mestu posrednik između zainteresovanih korisnika aplikacije, oba pola,  koji žele da deo svog slobodnog vremena provedu u ringu sa drugim, uparenim korisnicima aplikacije koji su pristali na borbu i sportskih/borilačkih klubova koji trebaju da pruže uslugu prostora za borbu, sudije i medicinskog osoblja. Ukoliko želite da ugovorite borbu morate se prvo registrovati tako što ćete popuniti formular u sekciji "Registracija". Nakon toga u sekciji "Zahtev za borbu" popunite formular koji se tiče same borbe i u kome možete birati u kojoj borilačkoj veštini želite da se nadmećete, kada i gde želite da se meč održi i da navedete neke posebne želje za koje ćemo se potruditi da ih ispunimo. Nakon 2 dana od dana slanja zahteva u sekciji "Predlozi borbi" možete naći predloge za vas. Ukoliko vam neki od njih odgovara pošaljite nam mail sa njegovim rednim brojem i očekujte potvrdu borbe sa napomenama kluba u kome će se borba održati 2 dana pre ugovorenog termina.           Osim ugovaranja borbi bavimo se i prodajom brendiranog aksesoara i sportske opreme renomiranih svetskih proizvođača kao što su Lonsdale, Wilson, Ewerlast, Adidas, Nike, Reebook i Under Armour.           
        </p>
        <p class="lead"><strong>NAŠA POLITIKA: <br />ISPRAZNITE SE DA BI SE IZNOVA NAPUNILI POZITIVNOM ENERGIJOM!</strong></p>
        <dl class="dl-horizontal">
          <dt>1. :</dt>
          <dd>Upoznaj sebe kroz borbu</dd>
          <dt>2. :</dt>
          <dd>Poštuj protivnika</dd>
          <dt>3. :</dt>
          <dd><strong>Uživaj u borbi!<strong></dd>
          </dl>
          <address>
            <strong>M.A.F.A.</strong>
            <br>Nedeljka Gvozdenovića 22b,<br>
            11070 Novi Beograd, Srbija<br>
            <abbr title="Telefon">Tel:</abbr>+381 63 377 745
          </address>
          <address>
            <strong>Odogovorna osoba: Mladen Zvjerac</strong><br>
            <a href="mailto:mz.tool2882@gmail.com">mailto:mz.tool2882@gmail.com</a>
          </address>
          <blockquote>
            <p>Moguća organizacija team-buildinga...</p>
            <small><cite>izgradite borben tim.</cite></small>
          </blockquote>
        </div>
        <div class="col-md-6">

          <!-- Slideshow container -->
          <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/s1.gif" style="width:100%" class="img-thumbnail">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/s2.gif" style="width:100%" class="img-thumbnail">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/s3.gif" style="width:100%" class="img-thumbnail">
              <div class="text"></div>
            </div>

          </div>
          <br>

          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
        </div>
      </div>
      <!--JS za slideshow -->
      <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 1000); // Mijenjanje slike na svaku 1 s
        }
      </script>

      <?php include "php/footer.php"; ?>

        <!--MUZIKA-->
        <embed src="DIE ANTWOORD - PITBULL TERRIER.mp3" autostart="true" loop="true"
           width="2" height="0">
        </embed>
        <noembed>
           <bgsound src="DIE ANTWOORD - PITBULL TERRIER.mp3" loop="infinite">
        </noembed>


    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>