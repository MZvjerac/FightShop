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
      background-image: url("img/borac2.JPG");
      -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      
      background-repeat: no-repeat;
      background-size: 100% 40%    
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
</style>
</head>

<body >
  <div class="container-fluid">
    <div class="background">
      <div class="page-header">
        <h1><a href="index.php"><img src="img/logo.jpg" alt="log firme |Martial Arts Fighting Area"></a> M.A.F.A. <small> Martial Arts Fighting Area</small></h1>
      </div>

      

      <div class="row">
       <div class="page-header">

        <h1>Izjava o punoletnosti</h1>
        <p>Uslovi korišćenja i pravila ponašanja</p>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Stariji sam od 18 godina i prihvatam uslove korišćenja
          </label>
        </div>
        <button type="button" class="btn btn-danger">Idi na početnu stranu</button>
      </div>
    </div>
  </div>


  <footer>
    <div class="row">   <!--POČETAK GORNJEG DIJELA FOOTERA-->
      <div class="col-md-4"><div class="page-header">
        <h4><b>O nama</b></h4>

      </div>
      <p>M.A.F.A. je na prvom mestu posrednik između zainteresovanih korisnika aplikacije, oba pola,  koji žele da deo svog slobodnog vremena provedu u ringu sa drugim, uparenim korisnicima aplikacije koji su pristali na borbu i sportskih/borilačkih klubova koji trebaju da pruže uslugu prostora za borbu, sudije i medicinskog osoblja.</p>
    </div>
    <div class="col-md-4"><div class="page-header">
      <h4><b>Kontakt</b></h4>

    </div>
    <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Nedeljka Gvozdenovića 22b, 11070 N.Beograd</p>
    <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +381 63 377745 </p>
    <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> mz.tool2882@gmail.com</p>
  </div>

  <div class="col-md-4"><div class="page-header">
    <h4><b>Pratite nas na:</b></h4>
  </div>
  <a href="#" class="btn btn-danger" role="button">
    <i class="fab fa-facebook fa-3x"></i>
  </a>
  <a href="#" class="btn btn-danger" role="button">
    <i class="fab fa-twitter fa-3x"></i>
  </a>
  <a href="#" class="btn btn-danger" role="button">
    <i class="fab fa-youtube fa-3x"></i>
  </a>
  <a href="#" class="btn btn-danger" role="button">
    <i class="fab fa-linkedin-in fa-3x"></i>
  </a>

</div>
</div><!--KRAJ GORNJEG DIJELA FOOTERA-->
<div class="panel-footer"><!--POČETAK DONJEG DIJELA FOTERA-->
  <div class="row"> 
    <div class="col-md-6">
      <ul class="list-inline"> 
        <li><a href="oNama.php">O nama</a></li>
        <li><a href="#">Uslovi korišćenja</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a href="#">Mapa sajta</a></li>
      </ul>
    </div>
    <div class="col-md-6">
      <p class="text-right">Copyright &copy; 2019 Mladen Zvjerac &#169;</p>
    </div>

  </div>
</div><!--POČETAK DONJEG DIJELA FOTERA-->
</footer>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>