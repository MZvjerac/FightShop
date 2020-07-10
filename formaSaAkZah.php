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
     /*background-image: url("img/borac2.JPG");*/
      filter: grayscale(50%);      
      background-repeat: no-repeat;
      background-size: 100% 300px;  
    }
 

    
    .background{
     width: 100%;
      height: 300px;
      
      background-image: url("img/borac2.jpg");
      padding: 0;
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
      
    </div>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Početna strana</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

              <li class="liUlogujSe"><a href="ulogujSe.php">Uloguj se</a><li>
                <li><a href="#">Zahtev za borbu</a></li>                           
                <li><a href="formiranjePrijedloga.php">Kreiranje predloga</a></li>
               <li><a href="slanjePotvrda.php">Slanje potvrda</a></li>

              </div>
            </div><!-- /.container-fluid -->
          </nav><!--KRAJ NAVIGACIJE-->

          <div class="row">
           <div class="page-header">
            <h2>Aktivni zahtevi za borbu</h2>
          </div>


          <!--FORMA ZA UNOS PODATAKA-->
          <form action="registracija.php" method="post">
            <div class="col-md-4">  
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  ZAHTEVI
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <br/>
              <button type="submit" class="btn btn-danger btn-lg btn-block" name="dodaj">Prikaži</button>
              <br>
              
            </div>
            <div class="col-md-6">
              <table class="table table-hover">
                <tr>
                  <th>IDZahteva</th>
                  <th>Zahtevani datum</th>
                  <th>Zahtevano Mesto</th>
                  <th>Tip borbe</th>
                  <th>Korisničke napomene</th>
                </tr>
                <tr>
                  <td><a href="#"></a></td>
                  <td><a href="#"></a></td>
                  <td><a href="#"></a></td>
                  <td><a href="#"></a></td>
                  <td><a href="#"></a></td>
                </tr>
              </table>
            </div>
          </form>   

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