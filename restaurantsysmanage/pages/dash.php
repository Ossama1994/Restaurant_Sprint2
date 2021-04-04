<?php
     include("connect.php");
     $requeteCount="SELECT count(*) countS from products";
     $resultatCount=$con->query($requeteCount);
     $tabCount=$resultatCount->fetch();
     $products=$tabCount['countS'];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
             <section class="container__section1 return">
                <div class="return__list list">
                    <ul class="list__nav items">
                      <li class="items__item item"><a class="item__link" href="index.php">Home</a></li>
                      <li class="items__item item"><a class="item__link" href="menu.php">Menu</a></li>
                      <li class="items__item item"><a class="item__link" href="logout.php">Log out</a><li>
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
                 <!-- <div class="sia">
                     <div class="si">
                        <input type="text" name="search" id="search" placeholder="search...">
                        <input type="button" value="search">
                     </div>
                     <div class="add">
                            
                     </div>
                 </div> -->
                 <div class="stats">
                     <div class="stats__items">
                         <h2>Products</h2>
                         <h3><?php echo $products ?></h3>
                     </div>
                     <div class="stats__items">
                         <h2>Users</h2>
                     </div>
                 </div>
               
             </section>
    </div>
</body>
</html>