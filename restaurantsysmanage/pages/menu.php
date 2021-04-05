<?php
  include("connect.php");
  include("authentity.php");
                        //    $result_per_page =2;
                        //    $result = ($page-1)*$result_per_page;

                        //      $num_of_pages = $count/$result_per_page;
                        //      $int =(int)($num_of_pages); 
                               $items_per_page = 2;
                               $req = $con->query("SELECT * FROM products");
                               $count = $req->rowCount();
                               $count = ceil($count/$items_per_page);
                            //    echo $count; 


      if(isset($_GET["page"]) && !empty($_GET["page"]) &&  $_GET["page"] > 0)
        {
            $_GET["page"] = intval($_GET["page"]);
            $actualpage = $_GET["page"];
           
        }
        else{
            $actualpage = 1;
        }
        
        // echo $actualpage;

        $start = ($actualpage-1)*$items_per_page;

            
        
    
    // $reponse = $con->query("SELECT * FROM products limit $start,$items_per_page");
    $reponse = $con->query("SELECT * FROM products as p inner JOIN categoryproduct as c  ON p.idcategory = c.idc limit $start,$items_per_page");


// for($page=1;$page<=$int;$page++){

//     echo '<a href="menu.php?page='.$page.'">'.$page.'</a>';
   
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Menu</title>
</head>
<body>
          <header class="header1">
                   <h1 class="header1__logo">LOGO</h1>
              <nav class="navabar">
                  <ul class="navabar__unordered ul" id="menu">
                      <li class="ul__li li"><a class="li__a" href="index.php">Home</a></li>
                      <li class="ul__li li"><a class="li__a" href="menu.php">Menu</a></li>
                      <!-- <li class="ul__li li"><a class="li__a" href="#contact">Contact us</a></li>
                      <li class="ul__li li"><a class="li__a" href="#about">About us</a></li> -->
                      <?php if ($user) {?>
                          <li class="ul__li li"><a class="li__a" href="dash.php">Dashboard</a></li>
                      <?php } ?>
                      <?php if (!$user) {?>
                          <li class="ul__li li"><a class="li__a" href="login.php">Login</a></li>
                      <?php } ?>
                  </ul>
                  <img class="navabar__img" src="../img/menu.png" alt="" id="btn">
              </nav>
          </header>
          <section class="wrapper__panneau panneau">
                    <div class="panneau__abs"></div>

                      <div class="welcome">
                          <div class="welcome__title">
                               <h1>Welcome</h1>
                          </div>
                          <div class="welcome__text">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi unde minima optio ea recusandae reprehenderit esse ab natus provident totam tenetur corrupti deleniti, in eius quam a laborum. Expedita, quaerat!
                          </div>
                      </div>
                    
                </section>
          <section class="menu1">
                <?php
            while($row = $reponse->fetch()) // fetch dans une table les ligne insérés
                {
               ?>
         <div class="menu1__items items"> 
               <img class="items__img " src="../img/<?php echo  $row["image"]; ?>" alt="">
                <div class="description">
                    <p class="description__id"> Name : <?php echo  $row["namep"]; ?></p>
                    <p class="description__id"> Name : <?php echo  $row["namec"]; ?></p>
                    <p class="description__id"> Price :<?php echo  $row["pricep"]; ?></p>
                </div>
         </div>
     
  <?php
  }
  ?>
    </section> 
               <section class="menu1">
                 <?php for($i=1;$i<=$count;$i++){
                       echo '<a style="text-decoration:none;background:white;margin:1rem;padding:1rem;box-shadow:0 0 2px black;border-raduis:.4rem" href="menu.php?page='.$i.'">'.$i.'</a>';
                   }
                 ?>

                 <?php
                          include('footer.php');
                 ?>
               </section>

               <script src="../js/scriptindex.js"></script>
          <script src="../js/script.js"></script>
              

</body>
</html>