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
      background-size: 100% 28%    
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
        <h2>Zahtjev za borbu</h2>
      </div>
      </div>
      

      <!--FORMA ZA UNOS PODATAKA-->
      <form action="registracija.php" method="post">
        <div class="col-md-4">  
          <div class="form-group">
            <label for="inputName">Željeni datum</label>
            <input type="date" class="form-control" id="inputDatum" placeholder="dd/mm/yy" name="zeljeniDatum">
          </div>
          <div class="form-group">
            <label for="inputSurname">Željeno mjesto</label>
            <input type="text" class="form-control" id="inputMesto" placeholder="mesto" name="mesto">
          </div>
          
          <div class="dropdown">
             <label for="inputSurname">Tip borbe</label>
             <br>
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Tip Borbe
              <span class="caret"></span>
            </button >
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <br>
          <div class="dropdown">
             <label for="inputSurname">Težinska kategorija</label>
             <br>
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Težinska kategorija
              <span class="caret"></span>
            </button >
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <br>
          <button type="submit" class="btn btn-danger btn-lg btn-block" name="dodaj">Pošalji zahtev</button>
          <br>
          <p>Ukoliko nemate otvoren nalog možete otvoriti ovde<a href="registracija.php"> Registracija</a></p>
        </div>  

      </form>   

    </div>
    <?php include "php/logovanje.php" ?>
    <?php include "php/footer.php"; ?>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>