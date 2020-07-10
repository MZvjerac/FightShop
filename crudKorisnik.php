
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

  function vidiSliku()
  {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("inputSlika").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("postaviSliku").src = oFREvent.target.result;
    }
  }
</script>
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

          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Pretraga">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>


          

        </div>
      </div><!-- /.container-fluid -->
    </nav><!--KRAJ NAVIGACIJE-->
    <div class="container-fluid">
      <div class="row">
       <div class="page-header">
        <h2 align="center">R.U.D.(e)- korisnik</h2>
      </div>
      <form action="crudKorisnik.php" method="post" name="formular" id="formular">  
        <?php
         //1. KONEKCIJA SA BAZOM PODATAKA
        $mysqli=new mysqli("localhost", "root", "", "mafa");

         // 2. try/catch blok za pristup bazi
        if($mysqli->error )
        {
          die("Greška konekcije!".$mysqli->error);
        }
          // 3. DEKLARISANJE PROMJENJIVIH
        $idKorisnika="";
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
               



               //PRETRAGA PO KRITERIJUMIMA
        if (isset ($_POST['trazi'])) 
        {
          foreach ($_POST['kriterijum'] as $select) 
          {
            $upit3= "SELECT * FROM korisnik WHERE $select LIKE '%" . $_POST['pretr']. "%'";
          }

          $rez=$mysqli->query($upit3);

          if(!$rez)
          {
            print($noupit);
            die($mysqli->errno);
          }

          if(!($red=$rez->fetch_assoc()))
          {
            print("Nema traženog korisnika!<br>");
                } //kreiranje tabele
                else{

                  $idKorisnika=$red['idKorisnika'];
                  $ime=$red['ime'];
                  $prezime=$red['prezime'];
                  $datumRodjenja=$red['datumRodjenja'];
                  $tezina=$red['tezina'];
                  $visina=$red['visina'];
                  $adresaStanovanja=$red['adresaStanovanja'];
                  $brojDobijenih=$red['brojDobijenih'];
                  $brojIzgubljenih=$red['brojIzgubljenih'];
                  $brPlatneKartice=$red['brPlatneKartice'];
                  $email=$red['email'];
                  $telefon=$red['telefon'];
                  $username=$red['username'];
                  $password1=$red['password1'];
                  

                  $message="";
                  if($rez->num_rows>1){
                    echo "1. korisnik u bazi sa zadatim kriterijumom:";
                    $message .= "Ostali korisnici:<br>"
                    . "<table border='2px' align='center'><tr>"
                    . "<th width='50'>ID</th>"
                    . "<th width='90'>IME</th>"
                    . "<th width='90'>PREZIME</th>"
                    . "<th width='80'>DATUM ROĐ.</th>"
                    . "<th width='70'>TEŽINA</th>"
                    . "<th width='70'>VISINA</th>"
                    . "<th width='90'>ADRESA</th>"
                    . "<th width='50'>BR. DOB.</th>"
                    . "<th width='50'>BR. IZGUB.</th>"
                    . "<th width='50'>BR. PLATNE</th>"
                    . "<th width='50'>EMAIL</th>"
                    . "<th width='50'>TELEFON</th>"
                    . "<th width='50'>USER</th>"                    
                    . "<th width='50'>PASS.</th></tr>";
                    

                    while($row=$rez->fetch_assoc()){
                      $message .= "<tr><td>".
                      $row['idKorisnika']."</td><td>".
                      $row['ime']."</td><td>".
                      $row['prezime']."</td><td>".                                    
                      $row['datumRodjenja']."</td><td>".
                      $row['tezina']."</td><td>".
                      $row['visina']."</td><td>".
                      $row['adresaStanovanja']."</td><td>".
                      $row['brojDobijenih']."</td><td>".
                      $row['brojIzgubljenih']."</td><td>".
                      $row['brPlatneKartice']."</td><td>".
                      $row['email']."</td><td>".
                      $row['telefon']."</td><td>".
                      $row['username']."</td><td>".
                      $row['password1']."</td></tr>";
                    }
                    $message .= "</table><br>";
                  }else{
                    echo "1 rezultat u bazi po zadatom kriterijumu:";
                  }
                }
              } 

              //RESET
              elseif (isset($_POST['reset'])) 
              {

                $idKorisnika="";
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
                 

              }  

              //BRISANJE KORISNIKA IZ BAZE
              elseif(isset($_POST['obrisi']))
              {
                $upitdel= "DELETE FROM korisnik WHERE idKorisnika = '". $_POST['idKorisnika']. "'";
                if(!$rezd= $mysqli->query($upitdel))
                {
                  echo "Brisanje nije moguće.<br>";
                  die($mysqli->error);
                }
                printf("Obrisano: %d red\n", $mysqli->affected_rows);
                $idKorisnika="";
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
                 
                if($mysqli->affected_rows!=0)
                {
                  $message= "Uspješno brisanje!";
                }
              }    


              // AŽURIRANJE
              elseif(isset ($_POST['azuriraj']))
              {
                if((!$_POST['ime'])||(!$_POST['prezime'])||(!$_POST['datumRodjenja'])||(!$_POST['tezina'])||(!$_POST['visina'])||(!$_POST['adresaStanovanja'])||(!$_POST['brojDobijenih'])||(!$_POST['brojIzgubljenih'])||(!$_POST['brPlatneKartice'])||(!$_POST['email'])||(!$_POST['telefon'])||(!$_POST['username'])||(!$_POST['password1']))
                {
                  echo "Morate unijeti sve podatke!";
                }

                else{
                  $upitupd = "UPDATE korisnik SET "
                  . "ime = '". $_POST['ime']. "',"
                  . "prezime = '". $_POST['prezime']. "',"
                  . "datumRodjenja = '" . $_POST['datumRodjenja']. "',"
                  . "tezina = '" . $_POST['tezina']. "',"
                  . "visina = '" . $_POST['visina']. "',"
                  . "adresaStanovanja = '" . $_POST['adresaStanovanja']. "',"
                  . "brojDobijenih = '" . $_POST['brojDobijenih']. "',"
                  . "brojIzgubljenih = '" . $_POST['brojIzgubljenih']. "',"
                  . "brPlatneKartice = '" . $_POST['brPlatneKartice']. "',"
                  . "email = '" . $_POST['email']. "',"
                  . "telefon = '" . $_POST['telefon']. "',"
                  . "username = '" . $_POST['username']. "',"
                  . "password1 = '" . $_POST['password1']. "'"
                  . "WHERE idKorisnika = '" . $_POST['idKorisnika']. "'";

                  if(!$rezupd=$mysqli->query($upitupd))
                  {
                    echo "Nisu izmjenjeni podaci u bazi!<br>";
                    die($mysqli->error);
                  }

                  $message="Podaci su ažurirani!";
                }

               
                $ime=$_POST['ime'];
                $prezime=$_POST['prezime'];
                $datumRodjenja=$_POST['datumRodjenja'];
                $tezina=$_POST['tezina'];
                $visina=$_POST['visina'];
                $adresaStanovanja=$_POST['adresaStanovanja'];
                $brojDobijenih=$_POST['brojDobijenih'];
                $brojIzgubljenih=$_POST['brojIzgubljenih'];
                $brPlatneKartice=$_POST['brPlatneKartice'];
                $email=$_POST['email'];
                $telefon=$_POST['telefon'];
                $username=$_POST['username'];
                $password1=$_POST['password1'];
              }   

              ?>

              <div class="col-md-12">
                <table class="table">
                  <tr>
                    <th><i>PRETRAGA</i></th>
                    <th><i>UNESI</i></th>
                    <th><i>TRAŽI</i></th>
                    <th><i>ID-KORISNIKA</i></th>
                  </tr>
                  <tr>
                    <td>
                      <select name="kriterijum[]">
                        <option value="idKorisnika">ID-Korisnika</option>
                        <option value="ime">Ime</option>
                        <option value="prezime">Prezime</option>
                        <option value="datumRodjenja">Datum rođenja</option>
                        <option value="tezina">Težina</option>
                        <option value="visina">Visina</option>
                        <option value="adresaStanovanja">Adresa</option>
                        <option value="brojDobijenih">Br. dobijenih borbi</option>
                        <option value="brojIzgubljenih">Br. izgubljenih borbi</option>
                        <option value="brPlatneKartice">Br. platne kartice</option>
                        <option value="email">Email</option>
                        <option value="telefon">Telefon</option>
                        <option value="username">Username</option>
                        <option value="password1">Password</option>
                      </select>
                    </td>
                    <td>
                      <input type="text" name="pretr">
                    </td>
                    <td>
                      <input type="submit" value="TRAŽI" name="trazi" class="btn btn-danger" />
                    </td>
                    <td>
                      <input type="text" name="idKorisnika" value="<?php echo $idKorisnika ?>">
                    </td>
                  </tr>         
                </table>      
              </div>

              <!--FORMA ZA UNOS PODATAKA-->

              <div class="col-md-6">  
                <div class="form-group">
                  <label for="inputName">Korisnikovo ime</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Ime" name="ime" onkeypress="zabrana()" value="<?php echo $ime ?>" >
                </div>
                <div class="form-group">
                  <label for="inputSurname">Korisnikovo prezime</label>
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
                  <label for="inputEmail">E-mail</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="e-mail" name="email" value="<?php echo $email ?>" >
                </div>        
                <div class="form-group">
                  <label for="inputPhone">Telefonski broj</label>
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

                <br/><br/><br/><br/>
              </div> 

              <div class="col-md-4">
                <button type="submit" class="btn btn-danger btn-lg btn-block" name="azuriraj" >AŽURIRAJ</button>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-danger btn-lg btn-block" name="obrisi">OBRIŠI</button>
              </div>
              <div class="col-md-4">
                <button type="reset" class="btn btn-danger btn-lg btn-block" name="reset">RESETUJ</button>
              </div>
              <?php
              if(isset($message)){
                echo "<br>$message";
              }
              ?>
            </form>


            <?php include "php/footer.php"; ?>

          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>