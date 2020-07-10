<?php


include('php/dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/jquery-ui.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet"> <!--LINK KA AWESOME FONTU--> 
  

  <script src="js/bootstrap.min.js"></script>
  
  <title>Martial Arts Fighting Area</title>
  
  <style >
    body
    {

      -webkit-filter:grayscale(50%); /* ALAT ZA TRANSFORMACIJU SLIKE */
      filter: grayscale(50%);
      object-position: top-right;
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

   .popover
   {
    width: 100%;
    max-width: 800px;
  }
</style>
</head>
<body > 
  <div class="container-fluid">
    <div class="background">

    </div>

    <?php include "php/nav.php"; ?>
    <div class="container">

     <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
       <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Menu</span>
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </button>

      </div>

      <div id="navbar-cart" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
         <li>
          <a id="cart-popover" class="btn" data-placement="bottom" title="Korpa">
           <span class="glyphicon glyphicon-shopping-cart"></span>
           <span class="badge"></span>
           <span class="total_price">€ 0.00</span>
         </a>
       </li>
     </ul>
   </div>

 </div>
</nav>
<div id="popover_content_wrapper" style="display: none">
  <span id="cart_details"></span>
  <div align="right">
   <a href="#" class="btn btn-primary" id="check_out_cart">
     <span class="glyphicon glyphicon-shopping-cart"></span> Provjeri
   </a>
   <a href="#" class="btn btn-default" id="clear_cart">
     <span class="glyphicon glyphicon-trash"></span> Izbaci
   </a>
 </div>
</div>

<div id="display_item">


</div>

</div>



<!--POČETAK DIJELA PRODAVNICE-->

<!--PRETRAGA-->


<div class="row "> 

  <h3 align="center"><i>Prodavnica</i></h3>
  <br><!--FILTER-->
  <div class="col-md-3">
    <div class="list-group">
     <h4>Cijena</h4>
     <input type="hidden" id="hidden_minimum_cijena" value="10"/>
     <input type="hidden" id="hidden_maximum_cijena" value="1000" />
     <p id="price_show">10-1000</p>
     <div id="price_range"></div>
   </div>

   <div class="list-group">
    <h4>Vrsta</h4>
    <?php
    $nadji="SELECT DISTINCT(vrsta) FROM proizvod";

          //$rezultat=$mysqli->query($nadji);
    $statement = $connect->prepare($nadji);
    $statement->execute();
    $result = $statement->fetchAll();


    foreach ($result as $row) 
    {
      ?>
      <div class="list-group-item checkbox">
        <label>
          <input type="checkbox" class="common_selector vrsta" value="<?php echo $row['vrsta']; ?>"  > <?php echo $row['vrsta']; ?>
        </label>
      </div>
      <?php
    }
    ?>
  </div>

  <div class="list-group">
    <h4>Proizvođač</h4>
    <?php
    $nadji="SELECT DISTINCT(proizvodjac) FROM proizvod";

          //$rezultat=$mysqli->query($nadji);

    $statement = $connect->prepare($nadji);
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $row) 
    {
      ?>
      <div class="list-group-item checkbox">
        <label>
          <input type="checkbox" class="common_selector proizvodjac" value="<?php echo $row['proizvodjac']; ?>"  > <?php echo $row['proizvodjac']; ?>
        </label>
      </div>
      <?php
    }
    ?>
  </div>

  <div class="list-group">
    <h4>Veličina</h4>
    <?php
    $nadji="SELECT DISTINCT(velicina) FROM proizvod";

          //$rezultat=$mysqli->query($nadji);

    $statement = $connect->prepare($nadji);
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $row) 
    {
      ?>
      <div class="list-group-item checkbox">
        <label>
          <input type="checkbox" class="common_selector velicina" value="<?php echo $row['velicina']; ?>"  > <?php echo $row['velicina']; ?>
        </label>
      </div>
      <?php
    }
    ?>
  </div>

  <div class="list-group">
    <h4>Boja</h4>
    <?php
    $nadji="SELECT DISTINCT(boja) FROM proizvod";

          //$rezultat=$mysqli->query($nadji);

    $statement = $connect->prepare($nadji);
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $row) 
    {
      ?>
      <div class="list-group-item checkbox">
        <label>
          <input type="checkbox" class="common_selector boja" value="<?php echo $row['boja']; ?>"  > <?php echo $row['boja']; ?>
        </label>
      </div>
      <?php
    }
    ?>
  </div>
</div><!--FILTER KRAJ-->
<div class="col-md-9">
 <br />
 <div class="row filter_data">

 </div>
</div>



  <?php include "php/footer.php"; ?>
</div>
</div>


<!--DINAMIČKI PRIKAZ NA OSNOVU FILTRACIJE-->
<style >
  #loading
  {
    text-align: center;
    background:url('img/loader.gif') no-repeat center;
    height: 150px;
  }

</style>

<script >
  $(document).ready(function(){

    filter_data();

    function filter_data()
    {
      $('.filter_data').html('<div id="loading" style="" ></div>');
      var action='fetch_data';
      var minimum_cijena = $('#hidden_minimum_cijena').val();
      var maximum_cijena = $('#hidden_maximum_cijena').val();
      var vrsta = get_filter('vrsta');
      var proizvodjac = get_filter('proizvodjac');
      var velicina = get_filter('velicina');
      var boja =get_filter ('boja');
      $.ajax({
        url:"fetch_data.php", 
        method: "POST",
        data:{action:action, minimum_cijena:minimum_cijena, maximum_cijena:maximum_cijena, vrsta:vrsta, proizvodjac:proizvodjac, velicina:velicina, boja:boja },
        success: function(data)
        {
          $('.filter_data').html(data);
        }
      });
    }

    // FUNKCIJA ZA FILTRIRANJE PO ČEKIRANOJ STAVCI
    function get_filter(class_name)
    {
      //čuvanje vrijednosti selektovanih čekboxova

      var filter = [];
      $('.'+class_name+':checked').each(function()
      {

        filter.push($(this).val());
      });
      return filter;
    }

    $('.common_selector').click(function(){
      filter_data();
    });

    $('#price_range').slider({
      range:true,
      min:10,
      max:1000,
      values:[10, 1000],
      step:5,
      stop:function(event, ui)
      {
        $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
        $('#hidden_minimum_cijena').val(ui.values[0]);
        $('#hidden_maximum_cijena').val(ui.values[1]);
        filter_data();
      }
    });




  });
</script>

<!--SKRIPT ZA KORPU-->
<script>  

  $(document).ready(function(){

    load_product();

    load_cart_data();

    function load_product()
    {
      $.ajax({
        url:"fetch_data.php",////!!!!
        method:"POST",
        success:function(data)
        {
          $('#display_item').html(data);
        }

      });
    }

     // FUNKCIJA ZA PRIKAZ DETALJA IZ KORPE
     function load_cart_data()
     {
      $.ajax({
       url:"fetch_cart.php",
       method:"POST",
       dataType:"json",
       success:function(data)
       {
        $('#cart_details').html(data.cart_details);
        $('.total_price').text(data.total_price);
        $('.badge').text(data.total_item);
      }
    });
    }

//AKTIVACIJA BOOTSTRAP POP-OVERA
$('#cart-popover').popover({
 html : true,
 container: 'body',
 content:function(){
  return $('#popover_content_wrapper').html();
}
});

         // DODAVANJE PROIZVODA U KORPU
         $(document).on('click', '.add_to_cart', function(){
          var product_id = $(this).attr("id");
          var product_name = $('#name'+product_id+'').val();
          var product_price = $('#price'+product_id+'').val();
          var product_quantity = $('#quantity'+product_id).val();
          var action = "add";
          if(product_quantity > 0)
          {
           $.ajax({
            url:"action.php",
            method:"POST",
            data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
            success:function(data)
            {
             load_cart_data();
             alert("Proizvod dodat u korpu!");
           }
         });
         }
         else
         {
          alert("Molimo Vas da unesete količinu.");
        }

      });


         // UKLANJANJE PROIZVODA IZ KORPE
         $(document).on('click', '.delete', function(){
          var product_id = $(this).attr("id");
          var action = 'remove';
          if(confirm("Da li ste sigurni da želite izbaciti proizvod iz korpe?"))
          {
           $.ajax({
            url:"action.php",
            method:"POST",
            data:{product_id:product_id, action:action},
            success:function()
            {
             load_cart_data();
             $('#cart-popover').popover('hide');
             alert("Stavka je izbačena iz korpe.");
           }
         })
         }
         else
         {
          return false;
        }
      });

         $(document).on('click', '#clear_cart', function(){

          var action = 'empty';
          $.ajax({
           url:"action.php",
           method:"POST",
           data:{action:action},
           success:function()
           {
            load_cart_data();
            $('#cart-popover').popover('hide');
            alert("Korpa je ispražnjena!");
           }
          });

         });

       });

     </script>



   </body>
   </html>