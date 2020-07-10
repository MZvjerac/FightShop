<?php
include('php/dbconnect.php');

$query = "SELECT * FROM proizvod ORDER BY idProizvoda DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
   $result = $statement->fetchAll();
  
   foreach($result as $row)
   {
    $output .= '
        <div class="col-md-3" style="margin-top:12px;">  
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
             <img src="img/'.$row["slika"].'" class="img-responsive" /><br />
             <h4 class="text-info">'.$row["nazivModela"].'</h4>
             <h4 class="text-danger">$ '.$row["cijena"] .'</h4>
             <input type="text" name="quantity" id="quantity' . $row["idProizvoda"] .'" class="form-control" value="1" />
             <input type="hidden" name="hidden_name" id="name'.$row["idProizvoda"].'" value="'.$row["nazivModela"].'" />
             <input type="hidden" name="hidden_price" id="price'.$row["idProizvoda"].'" value="'.$row["cijena"].'" />
             <input type="button" name="add_to_cart" id="'.$row["idProizvoda"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
        ';
    }
 echo $output;
}

?>