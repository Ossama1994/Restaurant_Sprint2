<?php
  include("connect.php");

//   $reponse = $con->query("SELECT * FROM categoryproduct");
//    while ($row = $reponse->fetch()){
//        print_r($row);
//    }
    

  // $idp=isset($_POST['idp'])?$_POST['idp']:"";
  $nom=isset($_POST['namep'])?$_POST['namep']:"";
  $price=isset($_POST['pricep'])?$_POST['pricep']:"";
  $idcategory=isset($_POST['idcategory'])?$_POST['idcategory']:1;
  $days = isset($_POST["days"])?$_POST["days"]:"";
  $nomPhoto=isset($_FILES['img']['name'])?$_FILES['img']['name']:"";
  $imageTemp=$_FILES['img']['tmp_name'];
  move_uploaded_file($imageTemp,"../img/".$nomPhoto);

  $requete="INSERT INTO products(namep,pricep,image,idcategory,days) values(?,?,?,?,?)";
  $params=array($nom,$price,$nomPhoto,$idcategory,$days);
  $resultat=$con->prepare($requete);
  $resultat->execute($params);

        header("location:products.php");


?>