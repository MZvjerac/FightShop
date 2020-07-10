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
      
      filter: grayscale(50%);
      object-position: top-right;
      background-repeat: no-repeat;
      background-size: 100% 21.2%  */



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
<body onload="pravilaIgre()"> <!--Event Handler-->
  <div class="container-fluid">
    <div class="background">
      <!-- <div class="page-header">
        <h1><a href="index.php"><img src="img/logo.png" alt="log firme |Martial Arts Fighting Area"></a> M.A.F.A. <small> Martial Arts Fighting Area</small></h1> -->
      </div>

   <?php include "php/nav.php"; ?>


    <div class="row"> <!--POČETAK REDA  -->
      <div class="col-md-6"><div class="jumbotron">
        <h2>Pravila igre</h2>
        
        <p>Zainteresovani korisnici se prijavljuju za borbu. Administrator  ugovaranja borbi svakodnevno ....</p>
        <p><a class="btn btn-danger btn-lg" href="pravilaIgre.php" role="button">Prikaži više <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>
      </div></div>
      <div class="col-md-6"><div class="jumbotron">
        <h2>Akcije</h2>
        <p>Svakom stotom borcu džabe tabanje ....Od sada možete kupiti i dukseve sa našim logom....</p>
        <p><a class="btn btn-danger btn-lg" href="akcije.php" role="button">Prikaži više <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>
      </div></div>
    </div> <!--KRAJ REDA-->
    <!--POČETAK DIJELA PRODAVNICE-->
    <form class="prodavnica" id="proizvodi">
      <div class="row"> <!--POČETAK THUMBNAILOVA-->
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="img/duks.jpg" alt="Duksevi |Martial Arts Fighting Area">
            <div class="caption">
              <h3>Duksevi</h3>
              <p>Kvalitetni duksevi proizvođača Adidas, Lonsdale, Nike,...</p>
              <p>Cijena Adidas muskog duksa na slici: <strong>56</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
             
              <br /><br />
              <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/majica.jpg" alt="Majice |Martial Arts Fighting Area">
              <div class="caption">
                <h3>Majice</h3>
                <p>Majice svih veličina, sa boxing printovima ...</p>
                <br>
                <p>Cijena Boxing majice na slici: <strong>12</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
                
                <br /><br />
                <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/patike.JPEG" alt="Patike |Martial Arts Fighting Area">
              <div class="caption">
                <h3>Patike</h3>
                <p>Patike muške i ženske, veličina od 36-48... </p>
                <br>
                <p>Cijena patika za box na slici: <strong>122</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
                
                <br /><br />
                <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a> </p>
                </div>
              </div>
            </div>

          </div> <!--KRAJ THUMBNEJLOVA-->

          <div class="row"> <!--POČETAK THUMBNAILOVA 2. red-->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="img/rukavice2.jpg" alt="Rukavice |Martial Arts Fighting Area">
                <div class="caption">
                  <h3>Rukavice</h3>
                  <p>Rukavice za trening, borbu, box, kick-box...</p>
                  <p>Cijena rukavica za sparing/trening na slici: <strong>65</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
                  
                  <br /><br />
                  <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/glava1.jpg" alt="štitnici za glavu |Martial Arts Fighting Area">
                  <div class="caption">
                    <h3>Štitnici za glavu</h3>
                    <p>Štitnici za glavu svih veličina...</p>
                    <p>Cijena štitnika za glavu na slici: <strong>222</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
                    
                    <br /><br />
                    <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/zubi1.jpg" alt="štitnici za zube |Martial Arts Fighting Area">
                  <div class="caption">
                    <h3>Štitnici za zube</h3>
                    <p>Kvalitetini štitnici proizvođača Wilson i Under Armour... </p>
                    <p>Cijena štitnika za zube na slici: <strong>24</strong><span class="glyphicon glyphicon-euro" arra-hidden="true"></span></p>
                    
                    <br /><br />
                    <p><a href="duksevi.php" class="btn btn-danger" role="button">Prikaži više<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a> </p>
                    </div>
                  </div>
                </div>

              </div> <!--KRAJ THUMBNEJLOVA 2. red-->
            </form>
            <?php include "php/logovanje.php"; ?>
           <?php include "php/footer.php"; ?>
           
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

</body>
</html>