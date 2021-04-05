<?php
  include("connect.php");

  $namec=isset($_POST['namec'])?$_POST['namec']:"";


  $requete="INSERT INTO categoryproduct(namec) values(?)";
  $params=array($namec);
  $resultat=$con->prepare($requete);
  $resultat->execute($params);

        header("location:category.php");


?>