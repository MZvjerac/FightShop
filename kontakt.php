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

  <script type="text/javascript">
    function zabranaUnosa1()
    {
      var unos=/[^a-zA-Z\s]/;

      var imePrezime=document.formular.imePrezime.value;

      if(imePrezime!="")
      {
        if(unos.test(imePrezime))
        {
          alert("MOGUĆ JE UNOS SAMO SLOVA! Izbriši i kreni ispočetka.");
          document.formular.imePrezime.focus();
          return(false);
        }
      }
    }


    function zabranaTelefon()
    {
      var unos=/[^0-9+\s]/;

      var telefon=document.formular.telefon.value;

      if(telefon!="")
      {
        if(unos.test(telefon))
        {
          alert("MOGUĆ JE UNOS SAMO BROJEVA SA RAZMAKOM I PREDZNAKOM +! Ponovite unos.");
          document.formular.telefon.focus();
          return(false);
        }
      }
    }

    function send()
    {
      var unos=/^[^]{0,700}$/gm;

      var tekst=document.formular.pisi.value;

      alert(tekst);

      var rezultat=tekst.match(unos);

      if(rezultat!=null)
      {
        alert("Forma vaše poruke je zadovoljena.");
      }
      else
      {
        alert("FORMA MOŽE DA SADRŽI MAKSIMALNO 700 KARAKTERA!");
      }
    }

  </script>

</head>

<body >
  <div class="container-fluid">
    <div class="background">
      
      </div>

      <?php include "php/nav.php"; ?>

    <div class="row">
      <div class="col-md-6">
       <div class="page-header">
        <h2>Kontaktirajte nas</h2>
      </div>
      <!--FORMA ZA UNOS PODATAKA-->
      <form method="post" action="" name="formular">
        <div class="form-group">
          <label for="inputName">Vaše ime i prezime</label>
          <input type="text" class="form-control" id="inputName" placeholder="Ime i prezime" name="imePrezime" onkeypress="zabranaUnosa1()">
        </div>
        <div class="form-group">
          <label for="inputEmail">Vaš e-mail</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="e-mail" name="email">
        </div>
        
        <div class="form-group">
          <label for="inputPhone">Vaš telefonski broj</label>
          <input type="tel" class="form-control" id="inputPhone" placeholder="Kontakt telefon" name="telefon" onkeypress="zabranaTelefon()">
        </div>
        <div class="form-group">
          <label for="inputSubject">Naslov vaše poruke</label>
          <input type="text" class="form-control" id="inputSubject" placeholder="Naslov">
        </div>

        <div class="form-group">
          <label for="inputText">Tekst vaše poruke</label>
          <textarea  class="form-control" id="inputText" placeholder="Tekst poruke - najviše 700 karaktera!" rows="5" name="pisi"></textarea>
        </div>

        <button type="submit" class="btn btn-danger btn-lg btn-block" onclick="send()">Pošaljite</button>
      </form>
    </div>

    <div class="col-md-6">
     <div class="page-header">
      <h2>Naše sjedište:</h2>
    </div>
    <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Nedeljka Gvozdenovića 22b, 11070 N.Beograd</p>
    <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +381 63 377745 </p>
    <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> mz.tool2882@gmail.com</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.440560197784!2d20.36885621575429!3d44.81258868470514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6f67cbefbfe7%3A0xaedf21e7910f631e!2sNedeljka%20Gvozdenovi%C4%87a%2022%2C%20Beograd!5e0!3m2!1sen!2srs!4v1578824920490!5m2!1sen!2srs" width="727" height="407" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</div>

  <?php include "php/footer.php"; ?>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>