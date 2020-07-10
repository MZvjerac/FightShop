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
      background-size: 100% 21.2%    
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
            
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Pretraga">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </form>
                        
          
            
          </div>
        
      </nav><!--KRAJ NAVIGACIJE-->

      <div class="row">
       <div class="page-header" align="center">
        <h2><b>ARBEIT MACHT FREI!</b></h2>
        <small>Administratorski poslovi</small>
      </div>
      

      <!--POČETAK POSLOVNIH AKTIVNOSTI ADMINISTRATORA-->
    <form class="poslovi" id="poslovi">
      <div class="row"> <!--POČETAK THUMBNAILOVA-->
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h3>MAGACIN</h3>
            <img src="img/skladiste.PNG" alt="skladiste |Martial Arts Fighting Area">
            <div class="caption">              
              <p><strong>Unos, pregled, ažuriranje i brisanje proizvoda iz magacina</strong></p>             
              <br /><br />
              <p><a href="crudProizvod.php" class="btn btn-danger" role="button">Ajmo!<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <h3>KORISNIK</h3>
              <img src="img/nabavka.jpg" alt="korisnik |Martial Arts Fighting Area">
              <div class="caption">                 
                <p><strong>Izmjena podataka o korisniku / Brisanje korisnika </strong></p>               
                <br /><br /><br />
                <p><a href="crudKorisnik.php" class="btn btn-danger" role="button">Ajde!<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <h3>IZVJEŠTAJI</h3>
              <img src="img/izvjestaji.JPG" alt="izvjestaji |Martial Arts Fighting Area">
              <div class="caption">          
                
                <p><strong>Statistika je čudo!</strong></p>
                
                <br /><br /><br />
                <p><a href="#" class="btn btn-danger" role="button">Šareniš!<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a> </p>
                </div>
              </div>
            </div>

          </div> <!--KRAJ THUMBNEJLOVA1-->

          <div class="row"> <!--POČETAK THUMBNAILOVA 2. red-->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <h3>UGOVARANJE BORBI</h3>
                <img src="img/logo.png" alt="ugovaranje borbi |Martial Arts Fighting Area">
                <div class="caption">                  
                  
                  <p><strong>Pregled zahtjeva, uparivanje boraca, rezervisanje klubova.</strong></p>
                  
                  <br /><br /><br />
                  <p><a href="#" class="btn btn-danger" role="button">Ugovori<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <h3>PISMA KORISNIKA</h3>
                  <img src="img/kontakt.png" alt="kontakt |Martial Arts Fighting Area">
                  <div class="caption">                    
                    
                    <p><strong>Pregled pisama upućenih od strane naših korisnika.</strong></span></p>
                    
                    <br /><br /><br /><br />
                    <p><a href="#" class="btn btn-danger" role="button">Prikaži<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <h3>REKLAMACIJE</h3>
                  <img src="img/reklamcije2.jpg" alt="reklamacije |Martial Arts Fighting Area">
                  <div class="caption">                   
                    
                    <p><strong>Pregled reklamacija korisnika.</strong></p>
                    
                    <br /><br /><br /><br />
                    <p><a href="#" class="btn btn-danger" role="button">Bolje ne gledaj!<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a> </p>
                    </div>
                  </div>
                </div>

              </div> <!--KRAJ THUMBNEJLOVA 2. red-->
            </form>
</div><!-- /.container-fluid -->

 <?php include "php/footer.php"; ?>
<!--MUZIKA-->
        <embed src="y2mate.com - TOOL - Die Eier von Satan (Audio)_82XqhHYwB-Q.mp3" autostart="true" loop="true"
           width="2" height="0">
        </embed>
        <noembed>
           <bgsound src="y2mate.com - TOOL - Die Eier von Satan (Audio)_82XqhHYwB-Q.mp3" loop="infinite">
        </noembed>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>