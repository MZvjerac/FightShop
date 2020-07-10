<?php
include 'php/logovanje.php';


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

   html{
    margin: 22px;
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
         
          
            
          </div>
        </div><!-- /.container-fluid -->
      </nav><!--KRAJ NAVIGACIJE-->

      <div class="row">
       <div class="page-header">
        <h2>Uloguj se</h2>
      </div>
      
      
      <!--FORMA ZA UNOS PODATAKA-->
      <form action="" method="post">
        <div class="col-md-4">  

          



          <div class="form-group">
            <label for="inputName">Username</label>
            <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $username ?>">
          </div>
          <div class="form-group">
            <label for="inputSurname">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $password ?>" >
          </div>
          <br/>
          <button type="submit" class="btn btn-danger btn-lg btn-block" name="log">Uloguj se</button>
          <br>
          <p>Ukoliko nemate otvoren nalog otvorite ga ovdje<a href="registracija.php"> Registracija</a></p>
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