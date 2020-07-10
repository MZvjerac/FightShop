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
  <script type="text/javascript">
    
    function zabrana() 
    {
      var unos=/[^a-zA-Z]/;

      var ime=document.formular.ime.value;
      var prezime=document.formular.prezime.value;

      if(ime!="" || prezime!="")
      {
        if(unos.test(ime) || unos.test(prezime))
        {
          alert("MOGUĆ JE UNOS SAMO SLOVA! Izbriši i kreni ispočetka.");
          document.formular.ime.focus();
          document.formular.prezime.focus();
          return(false);
        }
      }
    }

    function zabrana2()
    {
      var unos=/[^0-9]/;

      var visina=document.formular.visina.value;
      var tezina=document.formular.tezina.value;
      var brojDobijenih=document.formular.brojDobijenih.value;
      var brojIzgubljenih=document.formular.brojIzgubljenih.value;
      var brPlatneKartice=document.formular.brPlatneKartice.value;

      if(visina!="" || tezina!="" || brojDobijenih!="" || brojIzgubljenih!="" || brPlatneKartice!="")
      {
        if(unos.test(visina) || unos.test(tezina) || unos.test(brojDobijenih) || unos.test(brojIzgubljenih) || unos.test(brPlatneKartice))
        {
          alert("MOGUĆ JE UNOS SAMO BROJEVA! Izbriši i kreni ispočetka.");
          document.formular.visina.focus();
          document.formular.tezina.focus();
          document.formular.brojDobijenih.focus();
          document.formular.brojIzgubljenih.focus();
          document.formular.brPlatneKartice.focus();

          return(false);
        }
      }
    }

    function zabrana3()
    {
      var unos=/[^a-zA-Z0-9\.[,]]/;

      var adresaStanovanja=document.formular.adresaStanovanja.value;

      if(adresaStanovanja!="")
      {
        if(unos.test(adresaStanovanja))
        {
          alert("ADRESA NE SMIJE SADRŽATI SPECIJALNE KARAKTERE! Ponovite unos.");
          document.formular.adresaStanovanja.focus();
          return(false);
        }
      }
    }

    function zabrana4()
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

    function pass()
    {
      var unos=/^[a-zA-Z0-9]{7,}$/;

      var password=document.formular.password.value;

      alert(password);

      var rezultat=password.match(unos);

      if(rezultat!=null)
      {
        alert("FORMAT PASSWORDA JE VALIDAN!");
      }
      else
      {
        alert("FORMAT PASSWORDA NIJE VALIDAN! PONOVITE UNOS PO PATERNU.");
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
       <div class="page-header">
        <h2>Registruj se</h2>
      </div>
      

      <!--FORMA ZA UNOS PODATAKA-->
      <form action="registracija.php" method="post" name="formular" id="formular">
        <div class="col-md-6">  
          <?php
//1. KONEKCIJA SA BAZOM PODATAKA
          $mysqli=new mysqli("localhost", "root", "", "mafa");

// 2. try/catch blok za pristup bazi
          if($mysqli->error )
          {
            die("Greška konekcije!".$mysqli->error);
          }
// 3. DEKLARISANJE PROMJENJIVIH
          $ime="";
          $prezime="";
          $datumRodjenja="";
          $tezina="";
          $visina="";
          $adresaStanovanja="";
          $brojDobijenih="";
          $brojIzgubljenih="";
          $brPlatneKartice="";
          $email="";
          $telefon="";
          $username="";
          $password1="";
          $password2="";

// 4. DODAVANJE NOVOG KORISNIKA U BAZU
          if(isset($_POST['dodaj']))
          {
            if((!$_POST['ime'])||(!$_POST['prezime'])||(!$_POST['datumRodjenja'])||(!$_POST['tezina'])||(!$_POST['visina'])||(!$_POST['adresaStanovanja'])||(!$_POST['brojDobijenih'])||(!$_POST['brojIzgubljenih'])||(!$_POST['brPlatneKartice'])||(!$_POST['email'])||(!$_POST['telefon'])||(!$_POST['username'])||(!$_POST['password1']) ||(!$_POST['password2']))
            {
              echo"Morate unijeti sve podatke!";
            }
            else
            {
              $dodaj="INSERT INTO korisnik(ime, prezime, datumRodjenja, tezina, visina, adresaStanovanja, brojDobijenih, brojIzgubljenih, brPlatneKartice , email, telefon, username, password1) VALUES(' ".$_POST['ime']." ',' ".$_POST['prezime']." ',' ".$_POST['datumRodjenja']." ',' ".$_POST['tezina']." ',' ".$_POST['visina']." ',' ".$_POST['adresaStanovanja']."',' ".$_POST['brojDobijenih']."',' ".$_POST['brojIzgubljenih']."',' ".$_POST['brPlatneKartice']."',' ".$_POST['email']."',' ".$_POST['telefon']."',' ".$_POST['username']."',' ".$_POST['password1']." ') ";

              if($_POST['password1']===$_POST['password2']) $rezDodavanja=$mysqli->query($dodaj);

              else $rezDodavanja=false;

              if($rezDodavanja)
              {
                ?>

                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Uspješno ste se registrovali!</strong>Sa Vašim podacima se možete ulogovati.</div>

                  <?php
                }
                    else{?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Niste se registrovali!</strong>Probajte ponovo!</div><?php
                    }
                  }
              }             

          ?>


          <div class="form-group">
            <label for="inputName">Vaše ime</label>
            <input type="text" class="form-control" id="inputName" placeholder="Ime" name="ime" onkeypress="zabrana()" value="<?php echo $ime ?>" >
          </div>
          <div class="form-group">
            <label for="inputSurname">Vaše prezime</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Prezime" name="prezime" onkeypress="zabrana()" value="<?php echo $prezime ?>">
          </div>
          <div class="form-group">
            <label for="inputDate">Datum rođenja</label>
            <input type="date" class="form-control" id="inputDate" placeholder="dd.mm.yy" name="datumRodjenja" value="<?php echo $datumRodjenja ?>" >
          </div>
          <div class="form-group">
            <label for="inputWeigth">Težina</label>
            <input type="text" class="form-control" id="inputMass" placeholder="Masa (kg)" name="tezina" onkeypress="zabrana2()" value="<?php echo $tezina ?>" >
          </div>
          <div class="form-group">
            <label for="inputHeight">Visina</label>
            <input type="text" class="form-control" id="inputHeight" placeholder="Visina (cm)" name="visina" onkeypress="zabrana2()" value="<?php echo $visina ?>">
          </div>  
          <div class="form-group">
            <label for="inputAdress">Adresa stanovanja</label>
            <input type="text" class="form-control" id="inputAdress" placeholder="Ulica br, Grad" name="adresaStanovanja" onkeypress="zabrana3()" value="<?php echo $adresaStanovanja ?>" >
          </div>
          <div class="form-group">
            <label for="inputWinn">Broj dobijenih borbi</label>
            <input type="text" class="form-control" id="inputWinn" placeholder="br. dobijenih" name="brojDobijenih" onkeypress="zabrana2()" value="<?php echo $brojDobijenih ?>" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputLose">Broj izgubljenih borbi</label>
            <input type="text" class="form-control" id="inputLose" placeholder="br. izgubljenih" name="brojIzgubljenih" onkeypress="zabrana2()" value="<?php echo $brojIzgubljenih ?>" >
          </div>
          <div class="form-group">
            <label for="inputBrKartice">Broj platne kartice</label>
            <input type="number" class="form-control" id="inputBrKartice" placeholder="br. kartice" name="brPlatneKartice" onkeypress="zabrana2()" value="<?php echo $brPlatneKartice ?>" >
          </div>
          <div class="form-group">
            <label for="inputEmail">Vaš e-mail</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="e-mail" name="email" value="<?php echo $email ?>" >
          </div>        
          <div class="form-group">
            <label for="inputPhone">Vaš telefonski broj</label>
            <input type="tel" class="form-control" id="inputPhone" placeholder="Kontakt telefon" name="telefon" onkeypress="zabrana4()" value="<?php echo $telefon ?>">
          </div>  
          <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" placeholder="*******" name="username" value="<?php echo $username ?>">
          </div> 
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" class="form-control" id="password1" placeholder="*******" name="password1" value="<?php echo $password1 ?>" title="Password mora da ima najmanje 7 karaktera. Može da sadrži mala i velia slova i brojeve">
          </div> 
          <div >
            <label for="password2">Ponovite unos Password-a</label>
            <input type="password" class="form-control" id="password2" placeholder="*******" name="password2" value="<?php echo $password2 ?>" title="Password mora da ima najmanje 7 karaktera. Može da sadrži mala i velia slova i brojeve" >
          </div>        
            <br/>
           <button type="submit" class="btn btn-danger btn-lg btn-block" name="dodaj" onclick="pass()">Registruj se</button>
        </div>

      </form>   

    </div>

    <?php include "php/footer.php"; ?>
   
</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>