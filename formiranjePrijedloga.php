<?php
session_start();
//if(isset($_SESSION["uid"])){
  //header("location:profile.php");}

?>

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
  <!--<link rel="stylesheet" type="text/css" href="css/mojStil.css">-->
  <!--<link rel="stylesheet" href="css/stilF.css"> -->
  <style >
    body
    {

      -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      object-position: top-right;
      background-repeat: no-repeat;
      background-size: 100% 21.2%    
    }

    .background
    {
     width: 100%;
     height: 300px;

     background-image: url("img/borac2.jpg");
     padding: 0;
   }

   .input-group.date
   {
    label{margin-left: 20px;}
    #datepicker{width:180px; margin: 0 20px 20px 20px;}
    #datepicker > span:hover{cursor: pointer;}
  }

</style>
</head>
<body > <!--Event Handler-->
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

              <li><a href="formaSaAkZah.php">Aktivni zahtjevi</a></li>              
              <li><a href="kreiranjePrijedloga.php">Kreiranje predloga</a></li> 
              <li><a href="prijedloziBorbi.php">Prijedlozi borbi</a></li>      
              <li><a href="rezervacijaKluba.php">Rezervacija kluba</a></li>               

            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              
              
            </div>
          </div><!-- /.container-fluid -->
        </nav>

        <!--UPARIVANJE-->
        <form class="prodavnica" id="proizvodi">
          <div class="row"> <!--POČETAK THUMBNAILOVA-->
            <div class="col-md-12">
              <div class="thumbnail">

                <div class="caption">
                  <h3>Uparivanje</h3>

                  

                  <div class="row1">
                    <div class="list-group col-md-4">
                      <p>Selektovani zahtjevi za borbu: </p>
                      <a href="#" class="list-group-item danger">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item">Morbi leo risus</a>
                      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item">Vestibulum at eros</a>

                    </div>                 

                    <div class="list-group col-md-4"> 
                      <p>Upareni: </p>
                      <a href="#" class="list-group-item danger">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item">Morbi leo risus</a>
                      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item">Vestibulum at eros</a>

                    </div>

                    <div class="list-group col-md-4">
                      <p>Neupareni: </p>
                      <a href="#" class="list-group-item danger">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item">Morbi leo risus</a>
                      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item">Vestibulum at eros</a>

                    </div>
                  </div>
                  <br><br>
                  
                  <p><a href="#" class="btn btn-danger" role="button">Upari<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>

                  </div>
                  
                </div>

              </div>


            </div> <!--KRAJ UPARIVANJA-->

            <!--SLANJE ZAHTJEVA KLUBU-->
            <div class="row"> 
              <div class="col-md-12">
                <div class="thumbnail">

                  <div class="caption">
                    <h3>Slanje zahtjeva klubu</h3>

                    <div class="row1">
                      <div class="list-group col-md-4">
                        <p>Grad: </p>
                        <input type="text" name="tbGrad">

                      </div>                 

                      <div class="list-group col-md-4"> 
                        <p>Željeni datum: </p>

                        <!--DATEPICKER-->
                        <div class="form-group">
                          <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control">
                            <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="list-group col-md-4">
                        <p>Sportski klubovi: </p>
                        <a href="#" class="list-group-item danger">
                          Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>

                      </div>
                    </div>
                    
                    <p><a href="#" class="btn btn-danger" role="button">Šalji zahtjev<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                    </div>
                  </div>
                </div>


              </div> <!--KRAJ THUMBNEJLOVA 2. red-->

              <!--KREIRANJE PRIJEDLOGA ZA BORCE-->
              <div class="row"> 
                <div class="col-md-12">
                  <div class="thumbnail">

                    <div class="caption">
                      <h3>Kreiranje prijedloga za borce</h3>

                      <div class="row1">
                        <div class="list-group col-md-4">
                          <p>Odabir kluba: </p>

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Klub
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div><br>

                          <p>Satnica: </p>
                          <input type="text" name="tbSatnica">
                          <br><br>
                          <p>Cijena: </p>
                          <input type="text" name="tbSatnica">
                        </div>                 

                        <div class="list-group col-md-3"> 
                          <p>Datum borbe: </p>

                          <!--DATEPICKER-->
                          <div class="form-group">
                            <div class="input-group date" data-provide="datepicker">
                              <input type="text" class="form-control">
                              <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="list-group col-md-4">
                          <input  class="btn btn-danger" type="submit" name="btnKreirajPrijedlog" value="Kreiraj">
                          <br><br>
                          <p>Kreiran prijedlog: </p>
                          <br>
                          <textarea cols="65" rows="12" name="kreiranPrijedlog"></textarea>


                        </div>
                      </div>

                      <p><a href="#" class="btn btn-danger" role="button">Šalji zahtjev<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                      </div>
                    </div>
                  </div>


                </div>
                

              </form>

              <footer><!--POČETAK GORNJEG DIJELA FOOTERA-->
                <div class="row">   
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
    <script type="text/javascript">
      document.getElementById("proizvodi").addEventListener("submit", ukupanIznos); 

      function ukupanIznos(event) 
      {
        event.preventDefault(); 

        if (document.getElementById("s-grad").value === '') {
          alert("  --  MOLIM VAS DA UNESETE VAŠ GRAD  --  "); 
        }

        var kolPrvi = parseInt(document.getElementById("1").value, 10) || 0, 
        kolDrugi = parseInt(document.getElementById("2").value, 10) || 0,  
        kolTreci = parseInt(document.getElementById("3").value, 10) || 0,
        kolCetvrti = parseInt(document.getElementById("4").value, 10) || 0,
        kolPeti = parseInt(document.getElementById("5").value, 10) || 0,
        kolSesti = parseInt(document.getElementById("6").value, 10) || 0,
        grad = document.getElementById("s-grad").value;
        var methods = document.getElementById("proizvodi").r_method,
        isporukaMetod;

        for (var i = 0; i < methods.length; i++) { 
          if (methods[i].checked == true) {
            isporukaMetod = methods[i].value;  
          }
        }

        var pdvIznos = 1;
        if (grad === "DR") {
          pdvIznos = 1.20; 
        }

        var cenaIsporukePo = 0;
        switch (isporukaMetod) {  
          case "preuzimanje" :   
          cenaIsporukePo = 0; 
          break;  
          case "kompanijski" :
          cenaIsporukePo = 2;
          break;
          case "postexpres" :
          cenaIsporukePo = 3;
          break;
        }
        var ukupnoProizvoda = kolPrvi + kolDrugi + kolTreci,
        isporukaCena = ukupnoProizvoda * cenaIsporukePo;

        var bezIsporuke = ((kolPrvi * 35) + (kolDrugi * 30) + (kolTreci * 45)+(kolCetvrti * 65)+(kolPeti * 20)+(kolSesti * 65)) * pdvIznos;

        var izracunaj = "eura: " + (bezIsporuke + isporukaCena).toFixed(2); 

        document.getElementById("txt-izracunaj").value = izracunaj;

        document.getElementById("rezultati").innerHTML = "Ukupno proizvoda: " + ukupnoProizvoda + '<br>';
        document.getElementById("rezultati").innerHTML += "Cena isporuke: " + isporukaCena.toFixed(2) +" eura."+'<br>';
        document.getElementById("rezultati").innerHTML += "PDV: " + ((pdvIznos - 1) * 100).toFixed(2) + '%';
      }


    </script> 

    <!--SKRIPTE ZA DATEPICKER-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.en-GB.min.js" charset="UTF-8"></script>

    <script>
      $( document ).ready(function() {
        $('#datepicker').datepicker();
      });
    </script>

  </body>
  </html>