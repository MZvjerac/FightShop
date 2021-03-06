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
            

            <!--SLANJE POTVRDE KLUBU-->
            <div class="row"> 
              <div class="col-md-12">
                <div class="thumbnail">

                  <div class="caption">
                    <h3>Slanje potvrde klubu</h3>

                    <div class="row1">
                      <div class="list-group col-md-4">
                        

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
                            <br><br>
                            <p>Izabrani klub:</p>
                            <input type="text" name="tbKlub">
                          </div><br>

                          

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Rezervacija
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>Rezervacija:</p>
                            <input type="text" name="tbRezervacija">
                          </div><br>                          

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              e-mailovi
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>e-mail:</p>
                            <input type="text" name="tbEmail">
                            <br><br>
                            <input type="submit" name="btnKreirajPotvrdu" value="Kreiraj potvrdu" class="btn btn-danger">
                    
                          </div><br>
                      </div>                    

                      <div class="list-group col-md-8">
                        <p>Pregled teksta potvrde: </p>
                        <br>
                        <textarea cols="72" rows="18" name="kreiranPrijedlog"></textarea>
                      </div>
                    </div>
                    
                    <p><a href="#" class="btn btn-danger" role="button">Šalji potvrdu<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                    </div>
                  </div>
                </div>


              </div> <!--KRAJ THUMBNEJLOVA 1. red-->

              <!--KREIRANJE POTVRDE ZA BORCE-->
                  <div class="row"> 
              <div class="col-md-12">
                <div class="thumbnail">

                  <div class="caption">
                    <h3>Slanje potvrde borcima</h3>

                    <div class="row1">
                      <div class="list-group col-md-4">
                        

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Borac1
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>Borac1:</p>
                            <input type="text" name="tbKlub">
                          </div><br>

                          

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Borac2
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>Borac2:</p>
                            <input type="text" name="tbRezervacija">
                          </div><br>                          

                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              e-mail1
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>e-mail1:</p>
                            <input type="text" name="tbEmail1">
                            <br><br>


                            
                    
                          </div><br>
                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              e-mail2
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                            <br><br>
                            <p>e-mail2:</p>
                            <input type="text" name="tbEmail2">
                            <br><br>

                            
                            <input type="submit" name="btnKreirajPotvrdu" value="Kreiraj potvrdu" class="btn btn-danger">
                    
                          </div><br>
                      </div>                    

                      <div class="list-group col-md-8">
                        <p>Napomene: </p>
                        <br>
                        <textarea cols="72" rows="12" name="napomene" placeholder="Unesi napomene za borce"></textarea>
                        <br><br>
                        <p>Pregled teksta potvrde: </p>
                        <br>
                        <textarea cols="72" rows="16" name="kreiranPrijedlog"></textarea>
                      </div>
                    
                    
                    <p><a href="#" class="btn btn-danger" role="button">Šalji potvrdu<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                    </div>
                  </div>
                  </div>
                </div>


              </div>
                      </div>

                      
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
    

  </body>
  </html>