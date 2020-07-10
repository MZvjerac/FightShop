<?php

$mysqli=new mysqli("localhost", "root", "", "mafa");

if($mysqli->error)
{
  die("Greška u konekciji sa bazom!".$mysqli->error);
}


$username="";
$password="";


if(isset($_POST['log']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(!($_POST['username']) || !($_POST['password']))
  {
    echo "Morate unijeti username i password ako se želite ulogovati.";
  }
  else
  {
   $login="SELECT * FROM korisnik WHERE username='".$_POST['username']."' AND password1='".$_POST['password']."' ";


   $rezultat=$mysqli->query($login);


   if(!$rezultat)
   {
    print("Ne moze se izvrsiti upit");
    die("Greška: " . $mysqli->error);
  }
  if(!($red = $rezultat->fetch_assoc()))
  {
    print("Neuspjelo logovanje!");
  }
  else{
    if($red["username"]=='mz' && $red["password1"]=='tool')
    {
      header('Location: admin.php');
      
    }
    else{
      if($red["username"]== $username && $red["password1"]==$password){
      
      header('Location: indexKor.php');
      
    }
    }
  }                        
}
}
           

?>

