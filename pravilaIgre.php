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
  <!--<link rel="stylesheet" href="css/stilF.css"> -->
  <!--<link rel="stylesheet" type="text/css" href="css/mojStil.css">-->
  <style >
    body
    {
         -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      
      background-repeat: no-repeat;
      background-size: 100% 29%    
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

      <div class="row">
       <div class="page-header">
        <h2>Pravila igre</h2>
      </div>
      <div class="col-md-12">
        <p>
          Zainteresovani korisnici se prijavljuju za borbu. Administrator  ugovaranja borbi svakodnevno pregledava zahteve i poziva sistem da izvrši njihovo uparivanje na osnovu određenih kriterijuma (kilaža, visina, broj ranije dobijenih borbi, željeni datum i mesto borbe) što predstavlja prvi korak u organizaciji borbe.  Nakon što sistem izbaci parove formirane na osnovu ovih kriterijuma, administrator unosi redom zahtevane datume i mesta održavanja borbi i poziva sistem da pošalje e-mejlom zahteve za održavanje borbi svim sportsko/borilačkim klubovima iz mesta koje odgovara parovima za borbu. Borilački klubovi vraćaju informaciju putem e-maila da li mogu organizovati borbu. Klubovi koji mogu organizovati borbu šalju satnice, cenu održavanja borbe i posebne napomene u vezi sa pripremama za borbu (pravila borbe, potrebna oprema). Odabira se onaj klub koji je najjeftiniji i najbliži mestu stanovanja uparenih korisnika. Izabranom klubu se šalje rezervacija sa podacima o borcima.  Nakon pravljenja parova i rezervacije sportsko/borilačkog kluba, predlog se šalje uparenim korisnicima sa informacijama o protivniku, vremenu, ceni i mestu održavanja. Korisnici mogu da prihvate ili da odbiju borbu.  Ako i jedan i drugi korisnik prihvate borbu, šalju povratnu informaciju kojom potvrđuju svoje učešće, a administrator šalje potvrdu izabranom klubu. Dva dana pre održavanja borbe, administrator ugovaranja borbe šalje potvrde korisnicima sa detaljnim informacijama o rasporedu aktivnosti tokom održavanja čitavog događaja, satnice borbi i ostale napomene.  Ukoliko jedan od korisnika odbije borbu, borba se otkazuje i korisnik može da pošalje novi zahtev.
        </p>
      </div>
     
  <?php include "php/footer.php"; ?>


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>