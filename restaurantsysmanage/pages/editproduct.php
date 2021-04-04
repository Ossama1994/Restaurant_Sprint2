<?php

// $idS=isset($_GET['idS'])?$_GET['idS']:0;
//     $requeteS="select * from stagiaire where idStagiaire=$idS";
//     $resultatS=$pdo->query($requeteS);
//     $stagiaire=$resultatS->fetch();
//     $nom=$stagiaire['nom'];
//     $prenom=$stagiaire['prenom'];
//     $civilite=strtoupper($stagiaire['civilite']);
//     $idFiliere=$stagiaire['idFiliere'];
//     $nomPhoto=$stagiaire['photo'];

    // $requeteF="select * from filiere";
    // $resultatF=$pdo->query($requeteF); 
include("connect.php");
$idp = isset($_GET["idp"])?$_GET["idp"]:0;
$reponse = $con->query("SELECT * FROM products where idp=$idp");
$row = $reponse->fetch();
    $idp =  $row["idp"];
    $img = $row["image"];
    $namep =  $row["namep"];
    $pricep =  $row["pricep"];
    $idc =  $row["idcategory"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
             <section class="container__section1 return">
                <div class="return__list list">
                    <ul class="list__nav items">
                      <li class="items__item item"><a class="item__link" href="#">Home</a></li>
                      <li class="items__item item"><a class="item__link" href="#">Menu</a></li>
                    </ul>
                </div>
             </section>
             <section class="container__section2 menu">
                 <div class="menu__list elements">
                     <div class="elements__list unordered">
                         <ul class="unordered__list ordered">
                                  <div class="avatar">
                                      <img  class="avatar__icon"src="../img/profile.png" alt="">
                                  </div>
                             <li class="ordered__items href"><a class="href__links" href="">Profile</a></li>
                             <li class="ordered__items href"><a class="href__links" href="products.php">Products</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Category</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Admins</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Users</a></li>
                         </ul>
                     </div>

                 </div>
            
             </section>
             <section class="container__section3">
                <div class="editproduct">
                   <form action="update.php" class="form" method="POST" enctype="multipart/form-data">
                    <!-- <label for="id"><?php echo $idp?></label> -->
                        <input type="hidden" name="idp" class="form-control" value="<?php echo $idp ?>"/> 
                        <input  class="form__field" type="text" name="namep" id="namep" value="<?php echo $namep?>">
                        <input  class="form__field" type="text" name="pricep" id="pricep" value="<?php echo $pricep?>">
                        <input  class="form__field" type="file" name="image" id="img" value="<?php echo $img?>">
                        <input  class="form__field" type="text" name="idcategory" id="category" value="<?php echo $idc?>">
                        <input  class="form__field" type="submit" name="update" id="up" value="update">
                   </form>
               </div>
             </section>
    </div>
</body>
</html>