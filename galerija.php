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
  <style type="text/css">

    body
    {      
      
      -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      object-position: top-right;
      background-repeat: no-repeat;
      background-size: 100% 27.2%    
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
        
    <!--HEADER--> 
    <div class="page-header">
      <h2>Galerija slika</h2>
    </div>

    <!--SLIDESHOW -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/g1.jpg" alt="..." style="width:100%">
          <div class="carousel-caption">
            <h3>Supružnici u ringu</h3>
            <p>15.09.2019. Boris.Z i Marina.V rešavaju bračne probleme u ringu</p>
          </div>
        </div>
        
        ...
        <div class="item">
          <img src="img/g3.jpg" alt="..." style="width:100%">
          <div class="carousel-caption">
            <h3>Mali Bućko izdominirao!</h3>
            <p>08.06.2019. Bućko je po 12 put za redom izdominirao u ringu!</p>
          </div>
        </div>
        
        <div class="item">
          <img src="img/g45.jpg" alt="..." style="width:100%">
          <div class="carousel-caption">
            <h3>Očinska ljubav</h3>
            <p>14.06.2019. Otac i sin se našli u ringu.</p>
          </div>
        </div>
        <div class="item">
          <img src="img/g46.jpg" alt="..." style="width:100%">
          <div class="carousel-caption">
            <h3>Elvis čeka</h3>
            <p>18.08.2019. Dešava se da protivnik ne dođe....</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php include "php/footer.php"; ?>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>