<?php

include("connect.php");
$idc = isset($_GET["idc"])?$_GET["idc"]:0;
$reponse = $con->query("SELECT * FROM categoryproduct where idc=$idc");
$row = $reponse->fetch();
$idc =  $row["idc"];
$namec = $row["namec"];
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
                             <li class="ordered__items href"><a class="href__links" href="dash.php">Profile</a></li>
                             <li class="ordered__items href"><a class="href__links" href="products.php">Products</a></li>
                             <li class="ordered__items href"><a class="href__links" href="category.php">Category</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Admins</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Users</a></li>
                         </ul>
                     </div>

                 </div>
            
             </section>
             <section class="container__section3">
                <div class="editproduct">
                   <form action="updatecat.php" class="form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idc" class="form-control" value="<?php echo $idc ?>"/> 
                        <input  class="form__field" type="text" name="namec" id="namep" value="<?php echo $namec?>">
                        <input  class="form__field" type="submit" name="update" id="up" value="update">
                   </form>
               </div>
             </section>
    </div>
</body>
</html>