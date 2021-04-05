<?php
  include("connect.php");
  include("authentity.php");
  $search = isset($_GET['search'])?$_GET['search']:"";
  if($search==""){
       $reponse = $con->query("SELECT * FROM products as p inner JOIN categoryproduct as c  ON p.idcategory = c.idc");
  }else{
    $reponse = $con->query("SELECT * FROM products as p inner JOIN categoryproduct as c  ON p.idcategory = c.idc where namep like '%$search%'");
  }
 
  $row = $reponse->fetch()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
<div class="overl" id="overl">
            <pre><input type="button" value="fermer" id="fermer" style="color:white;"></pre>
       <form action="insertproduct.php" method="POST"  class="overl__container"  enctype="multipart/form-data">
            <!-- Id : <input class="inputs__input" type="text" name="idp" id="idp"> -->
            Name : <input class="inputs__input" type="text" name="namep" id="namep">
            Price : <input class="inputs__input" type="text" name="pricep" id="price">
            Image : <input class="inputs__input" type="file" name="img" id="img">
            Idcategory : <input class="inputs__input" type="text" name="idcategory" id="category">
            Days : <input class="inputs__input" type="text" name="days" id="days">
            <button>Add</button>
       </form>
</div>
          <div class="container">
             <section class="container__section1 return">
                <div class="return__list list">
                    <ul class="list__nav items">
                      <li class="items__item item"><a class="item__link" href="index.php">Home</a></li>
                      <li class="items__item item"><a class="item__link" href="menu.php">Menu</a></li>
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
                             <li class="ordered__items href"><a class="href__links" href="">Products</a></li>
                             <li class="ordered__items href"><a class="href__links" href="category.php">Category</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Admins</a></li>
                             <li class="ordered__items href"><a class="href__links" href="">Users</a></li>
                         </ul>
                     </div>

                 </div>
            
             </section>
             <section class="container__section3">
                 <div class="twoofthem">
                     <div class="si">
                        
                        <form method="get" action="products.php" >
                           <input  class="inputs__input" type="text" name="search" id="search" placeholder="search..." value="<?php echo  $row["namep"]; ?> ">
                           <button id="search">Search</button>
                        </form>
                     </div>
                     
                     <?php if ($_SESSION['user']['role']=='ADMIN') {?>
                       	
                        <div class="add">
                          <button name="add" id="ajouter">Add</button>
                        </div>
                           
                       <?php } ?>  
                 </div>
                 <table>
                     
                     <tr>
                         <td>Id</td>
                         <td>Name</td>
                         <td>Price</td>
                         <td>Days</td>
                         <td>Name category</td>
                         <td>Image</td>
                         <td>Adjust</td>
                     </tr>
                     <?php
  while($row = $reponse->fetch()) // fetch dans une table les ligne insérés
  {
?>
     <tr>
       <td> <?php echo  $row["idp"]; ?> </td>
       <td> <?php echo  $row["namep"]; ?> </td>
       <td> <?php echo  $row["pricep"]; ?> </td>
       <td> <?php echo  $row["days"]; ?> </td>
       <td> <?php echo  $row["namec"]; ?> </td>
       <td> <img src="../img/<?php echo  $row["image"]; ?>" alt=""></td>
       <td>
           <a class="li__a" href="editproduct.php?idp=<?php echo $row["idp"]?> "><i class="fas fa-edit"></i></a>
           <a class="li__a" href="deleteproduct.php?idp=<?php echo $row["idp"]?>" onclick="return confirm('are you sure')"><i class="far fa-trash-alt"></i></a>
       </td>
     </tr>
  <?php
  }
  ?>

                 </table>
               
             </section>
    </div>
    <script src="../js/dash.js"></script>
    <script src="../js/scriptindex.js"></script>
   
</body>
</html>