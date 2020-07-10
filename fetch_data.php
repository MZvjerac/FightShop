<?php

//fetch_data.php

include('php/dbconnect.php');

if(isset($_POST["action"]))
{
 $query = "SELECT * FROM proizvod  WHERE kolicina>1";

 if(isset($_POST["minimum_cijena"], $_POST["maximum_cijena"]) && !empty($_POST["minimum_cijena"]) && !empty($_POST["maximum_cijena"]))
 {
  $query .= "
   AND cijena BETWEEN '".$_POST["minimum_cijena"]."' AND '".$_POST["maximum_cijena"]."'
  ";
 }
 if(isset($_POST["vrsta"]))
 {
  $vrsta_filter = implode("','", $_POST["vrsta"]);
  $query .= "
   AND vrsta IN('".$vrsta_filter."')
  ";
 }
 if(isset($_POST["proizvodjac"]))
 {
  $proizvodjac_filter = implode("','", $_POST["proizvodjac"]);
  $query .= "
   AND proizvodjac IN('".$proizvodjac_filter."')
  ";
 }
 if(isset($_POST["velicina"]))
 {
  $velicina_filter = implode("','", $_POST["velicina"]);
  $query .= "
   AND velicina IN('".$velicina_filter."')
  ";
 }
 if(isset($_POST["boja"]))
 {
  $boja_filter = implode("','", $_POST["boja"]);
  $query .= "
   AND boja IN('".$boja_filter."')
  ";
 }

 //$result=$mysqli->query($query);
 //$red=$result->fetch_assoc();
 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="img/'. $row['slika'] .'" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">'. $row['nazivModela'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >Cijena:'. $row['cijena'] .'eur.</h4>
     <p>
     Namjena : '. $row['namjena'].' <br />
     Vrsta : '. $row['vrsta'] .' <br />
     Proizvođač : '. $row['proizvodjac'] .' <br />
     Veličina : '. $row['velicina'] .' </p>

     <input type="text" name="quantity" id="quantity' . $row["idProizvoda"] .'" class="form-control" value="1" />
             <input type="hidden" name="hidden_name" id="name'.$row["idProizvoda"].'" value="'.$row["nazivModela"].'" />
             <input type="hidden" name="hidden_price" id="price'.$row["idProizvoda"].'" value="'.$row["cijena"].'" />
             <input type="button" name="add_to_cart" id="'.$row["idProizvoda"].'" style="margin-top:5px;" class="btn btn-danger form-control add_to_cart" value="Dodaj u korpu" />

    </div>
   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>Nisu pronađeni podaci!</h3>';
 }
 echo $output;
}

?>