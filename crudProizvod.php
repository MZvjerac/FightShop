
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

      </div><!-- /.container-fluid -->
    </nav><!--KRAJ NAVIGACIJE-->
    <div class="container-fluid">
      <div class="row">
       <div class="page-header">
        <h2 align="center">C.R.U.D. Proizvoda</h2>
      </div>
      <form action="crudProizvod.php" method="post" name="formular" id="formular">  
        <?php
         //1. KONEKCIJA SA BAZOM PODATAKA
        $mysqli=new mysqli("localhost", "root", "", "mafa");

         // 2. try/catch blok za pristup bazi
        if($mysqli->error )
        {
          die("Greška konekcije!".$mysqli->error);
        }
          // 3. DEKLARISANJE PROMJENJIVIH
        $idProizvoda="";
        $vrsta="";
        $proizvodjac="";
        $namjena="";
        $nazivModela="";
        $velicina="";
        $boja="";
        $kolicina="";
        $cijena="";
        $slika="";


          // 4. DODAVANJE PROIZVODA U BAZU
        if(isset($_POST['ubaci']))
        {
          if((!$_POST['vrsta'])||(!$_POST['proizvodjac'])||(!$_POST['namjena'])||(!$_POST['nazivModela'])||(!$_POST['velicina'])||(!$_POST['boja'])||(!$_POST['kolicina'])||(!$_POST['cijena'])||(!$_POST['slika']))
          {
            echo"Morate unijeti sve podatke!";
          }
          else
          {
            $dodaj="INSERT INTO proizvod(kolicina, cijena, namjena, nazivModela, proizvodjac, velicina, vrsta, boja, slika) VALUES(' ".$_POST['kolicina']." ',' ".$_POST['cijena']." ',' ".$_POST['namjena']." ',' ".$_POST['nazivModela']." ',' ".$_POST['proizvodjac']." ',' ".$_POST['velicina']."',' ".$_POST['vrsta']."',' ".$_POST['boja']."',' ".$_POST['slika']."') ";

            $rezDodavanja=$mysqli->query($dodaj);



            if($rezDodavanja)
            {
              ?>

              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Uspješno ubačeno!</strong></div>

                <?php
              }
              else{?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Neuspješno ubačeno!</strong>Probajte ponovo!</div><?php
                }
              }
            }  



               //PRETRAGA PO KRITERIJUMIMA
            elseif (isset ($_POST['trazi'])) 
            {
              foreach ($_POST['kriterijum'] as $select) 
              {
                $upit3= "SELECT * FROM proizvod WHERE $select LIKE '%" . $_POST['pretr']. "%'";
              }

              $rez=$mysqli->query($upit3);

              if(!$rez)
              {
                print($noupit);
                die($mysqli->errno);
              }

              if(!($red=$rez->fetch_assoc()))
              {
                print("Nema traženog proizvoda!<br>");
                } //kreiranje tabele
                else{
                  $idProizvoda=$red['idProizvoda'];
                  $vrsta=$red['vrsta'];
                  $proizvodjac=$red['proizvodjac'];
                  $namjena=$red['namjena'];
                  $nazivModela=$red['nazivModela'];
                  $velicina=$red['velicina'];
                  $boja=$red['boja'];
                  $kolicina=$red['kolicina'];
                  $cijena=$red['cijena'];
                  $slika=$red['slika'];

                  $message="";
                  if($rez->num_rows>1){
                    echo "1. proizvod u bazi sa zadatim kriterijumom:";
                    $message .= "Ostali proizvodi:<br>"
                    . "<table border='2px' align='center'><tr>"
                    . "<th width='100'>ID</th>"
                    . "<th width='100'>VRSTA</th>"
                    . "<th width='100'>PROIZVOĐAČ</th>"
                    . "<th width='100'>NAMJENA</th>"
                    . "<th width='100'>NAZIV MODELA</th>"
                    . "<th width='80'>VELIČINA</th>"
                    . "<th width='50'>BOJA</th>"
                    . "<th width='50'>KOLIČINA</th>"
                    . "<th width='50'>CIJENA</th>"
                    . "<th width='50'>SLIKA</th></tr>";
                    

                    while($row=$rez->fetch_assoc()){
                      $message .= "<tr><td>".
                      $row['idProizvoda']."</td><td>".
                      $row['vrsta']."</td><td>".
                      $row['proizvodjac']."</td><td>".                                    
                      $row['namjena']."</td><td>".
                      $row['nazivModela']."</td><td>".
                      $row['velicina']."</td><td>".
                      $row['boja']."</td><td>".
                      $row['kolicina']."</td><td>".
                      $row['cijena']."</td><td>".
                      $row['slika']."</td></tr>";
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

                $idProizvoda="";
                $vrsta="";
                $proizvodjac="";
                $namjena="";
                $nazivModela="";
                $velicina="";
                $boja="";
                $kolicina="";
                $cijena="";
                $slika="";    

              }  

              //BRISANJE PROIZVODA IZ BAZE
              elseif(isset($_POST['obrisi']))
              {
                $upitdel= "DELETE FROM proizvod WHERE idProizvoda = '". $_POST['idProizvoda']. "'";
                if(!$rezd= $mysqli->query($upitdel))
                {
                  echo "Brisanje nije moguće.<br>";
                  die($mysqli->error);
                }
                printf("Obrisano: %d red\n", $mysqli->affected_rows);
                $idProizvoda="";
                $vrsta="";
                $proizvodjac="";
                $namjena="";
                $nazivModela="";
                $velicina="";
                $boja="";
                $kolicina="";
                $cijena="";
                $slika="";   
                if($mysqli->affected_rows!=0)
                {
                  $message= "Uspješno brisanje!";
                }
              }    


              // AŽURIRANJE
              elseif(isset ($_POST['azuriraj']))
              {
                if((!$_POST['vrsta'])||(!$_POST['proizvodjac'])||(!$_POST['namjena'])||(!$_POST['nazivModela'])||(!$_POST['velicina'])||(!$_POST['boja'])||(!$_POST['kolicina'])||(!$_POST['cijena'])||(!$_POST['slika']))
                {
                  echo "Morate unijeti sve podatke!";
                }

              else{
                $upitupd = "UPDATE proizvod SET "
                . "vrsta = '". $_POST['vrsta']. "',"
                . "proizvodjac = '". $_POST['proizvodjac']. "',"
                . "namjena = '" . $_POST['namjena']. "',"
                . "nazivModela = '" . $_POST['nazivModela']. "',"
                . "velicina = '" . $_POST['velicina']. "',"
                . "boja = '" . $_POST['boja']. "',"
                . "kolicina = '" . $_POST['kolicina']. "',"
                . "cijena = '" . $_POST['cijena']. "',"
                . "slika = '" . $_POST['slika']. "'"
                . "WHERE idProizvoda = '" . $_POST['idProizvoda']. "'";

                if(!$rezupd=$mysqli->query($upitupd))
                {
                  echo "Nisu izmjenjeni podaci u bazi!<br>";
                  die($mysqli->error);
                }

                $message="Podaci su ažurirani!";
              }

              
              
              $vrsta=$_POST['vrsta'];
              $proizvodjac=$_POST['proizvodjac'];
              $namjena=$_POST['namjena'];
              $nazivModela=$_POST['nazivModela'];
              $velicina=$_POST['velicina'];;
              $boja=$_POST['boja'];
              $kolicina=$_POST['kolicina'];
              $cijena=$_POST['cijena'];
              $slika=$_POST['slika'];
            }   

            ?>

            <div class="col-md-12">
              <table class="table">
                <tr>
                  <th><i>PRETRAGA</i></th>
                  <th><i>UNESI</i></th>
                  <th><i>TRAŽI</i></th>
                  <th><i>ID-PROIZVODA</i></th>
                </tr>
                <tr>
                  <td>
                    <select name="kriterijum[]">
                      <option value="proizvodjac">Proizvođač</option>
                      <option value="vrsta">Vrsta proizvoda</option>
                      <option value="namjena">Namjena</option>
                      <option value="boja">Boja</option>
                      <option value="cijena">Cijena</option>
                      <option value="velicina">Velicina</option>
                      <option value="idProizvoda">ID Proizvoda</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="pretr">
                  </td>
                  <td>
                    <input type="submit" value="TRAŽI" name="trazi" class="btn btn-danger" />
                  </td>
                  <td>
                    <input type="text" name="idProizvoda" value="<?php echo $idProizvoda ?>">
                  </td>
                </tr>         
              </table>      
            </div>

            <!--FORMA ZA UNOS PODATAKA-->

            <div class="col-md-6">  



              <div class="form-group">
                <label for="inputVrsta">Vrsta proizvoda</label>
                <input type="text" class="form-control" id="inputVrsta" placeholder="vrsta" name="vrsta" value="<?php echo $vrsta ?>" onkeypress="zabrana()">
              </div>
              <div class="form-group">
                <label for="inputProizvodjac">Proizvođač</label>
                <input type="text" class="form-control" id="inputProizvodjac" placeholder="Proizvođač" name="proizvodjac" onkeypress="zabrana()" value="<?php echo $proizvodjac ?>">
              </div>
              <div class="form-group">
                <label for="inputNamjena">Namjena</label>
                <input type="text" class="form-control" id="inputNamjena" placeholder="Namjena" name="namjena" onkeypress="zabrana()" value="<?php echo $namjena ?>">
              </div>
              <div class="form-group">
                <label for="inputNazivModela">Naziv modela</label>
                <input type="text" class="form-control" id="inputNazivModela" placeholder="Model" name="nazivModela" onkeypress="zabrana()" value="<?php echo $nazivModela ?>">
              </div>
              <div class="form-group">
                <label for="inputVelicina">Veličina</label>
                <input type="text" class="form-control" id="inputVelicina" placeholder="Velicina" name="velicina"  value="<?php echo $velicina ?>">
              </div>
              <div class="form-group">
                <label for="inputBoja">Boja</label>
                <input type="text" class="form-control" id="inputBoja" placeholder="Boja" name="boja"  value="<?php echo $boja ?>">
              </div>          
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputKolicina">Količina</label>
                <input type="text" class="form-control" id="inputKolicina" placeholder="Kolicina" name="kolicina" onkeypress="zabrana2()" value="<?php echo $kolicina ?>" >
              </div>
              <div class="form-group">
                <label for="inputCijena">Cijena</label>
                <input type="number" class="form-control" id="inputCijena" placeholder="Cijena" name="cijena" onkeypress="zabrana2()" value="<?php echo $cijena ?>" >
              </div>

              <div >
                <label for="inputSlika">Slika</label>
                <input type="file" class="form-control" name="slika" id="inputSlika"  value="<?php echo $slika ?>" onchange="vidiSliku()">

                <img id="postaviSliku" style="width: 210px; height: 210px;">
              </div>        
              <br/><br/><br/><br/> <br/><br/><br/>

            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-danger btn-lg btn-block" name="ubaci" >UBACI</button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-danger btn-lg btn-block" name="azuriraj" >AŽURIRAJ</button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-danger btn-lg btn-block" name="obrisi">OBRIŠI</button>
            </div>
            <div class="col-md-3">
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