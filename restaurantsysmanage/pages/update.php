<?php
include("connect.php");

$idp=isset($_POST['idp'])?$_POST['idp']:"";
$nom=isset($_POST['namep'])?$_POST['namep']:"";
$price=isset($_POST['pricep'])?$_POST['pricep']:"";
$idcategory=isset($_POST['idcategory'])?$_POST['idcategory']:1;
$nomPhoto=isset($_FILES['image']['name'])?$_FILES['image']['name']:"";
$imageTemp=$_FILES['image']['tmp_name'];

if($imageTemp !==""){   
move_uploaded_file($imageTemp,"../img/".$nomPhoto);
$query ="UPDATE products set namep=? , pricep=? , image=? , idcategory=? where idp=?";
$params=array($nom,$price,$nomPhoto,$idcategory,$idp);
$resultat=$con->prepare($query);
$resultat->execute($params);
header("location:products.php");
}
else{
$query ="UPDATE products set namep=? , pricep=?, idcategory=? where idp=?";
$params=array($nom,$price,$idcategory,$idp);
$resultat=$con->prepare($query);
$resultat->execute($params);
header("location:products.php");
}

// $requete="update stagiaire set nom=?,prenom=?,civilite=?,idFiliere=?,photo=? where idStagiaire=?";
// $params=array($nom,$prenom,$civilite,$idFiliere,$nomPhoto,$idS);
// $requete="UPDATE products set namep=? , pricep=? , image=? , idcategory=? where idp=?";


      

?>