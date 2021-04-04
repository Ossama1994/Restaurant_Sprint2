<?php
      include("authentity.php");
      include("connect.php");
      $reponse = $con->query("SELECT * FROM products");
     
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,300&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Home</title>
</head>
<body>
          <header class="header1">
                   <h1 class="header1__logo">LOGO</h1>
              <nav class="navabar">
                  <ul class="navabar__unordered ul" id="menu">
                      <li class="ul__li li"><a class="li__a" href="index.php">Home</a></li>
                      <li class="ul__li li"><a class="li__a" href="menu.php">Menu</a></li>
                      <li class="ul__li li"><a class="li__a" href="#contact">Contact us</a></li>
                      <li class="ul__li li"><a class="li__a" href="#about">About us</a></li>
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
          <div class="wrapper">
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
                
                <section class="content">
                <?php
            while($row = $reponse->fetch()) // fetch dans une table les ligne insérés
                {
               ?>
                <div class="content__items1">
                    <div class="content__about">
                        <h1><?php echo  $row["namep"]; ?></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eos reiciendis autem asperiores possimus. Id quaerat tempore ut quo laudantium quas at voluptatem, provident aliquid optio neque beatae voluptatibus veniam.</p>
                        <button>See more ...</button>
                       </div>
                    <div class="content__carte">
                        <img class="card" src="../img/<?php echo  $row["image"]; ?>" alt="">
                    </div>
                </div>
     
            <?php
            }
            ?>
                 
                  <!-- <div class="content__items2">
                    <div class="content__carte carte1">
                        
                     </div>
                    <div class="content__about">
                         <h1>Chicken</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eos reiciendis autem asperiores possimus. Id quaerat tempore ut quo laudantium quas at voluptatem, provident aliquid optio neque beatae voluptatibus veniam.</p>
                        <button>See more ...</button>
                    </div>
                    </div> -->
                </section>
                </section>
                <section id="about" class="wrapper__about about" >
                         <div class="about__text text">
                             <h1 class="text__title">About us</h1>
                             <p class="text__para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores perferendis, eum quasi error tempora recusandae accusamus quis consectetur explicabo officia? Minus autem aspernatur repellat similique quod dolore, nostrum unde pariatur.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure quibusdam voluptas magni eius sint consequatur harum cum ipsa odit fuga optio dicta id, commodi laudantium? Magnam perferendis earum incidunt consectetur!
                             </p>
                         </div>
                         <div class="about__staf staf">
                           <div class="staf__chef1 chef">
                               <img class="chef__profile" src="../img/Chef Vector.jpg" alt="">
                               <div class="chef__text">
                                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, possimus vero? Modi, ipsum? Ea quae nulla ratione vitae impedit iste debitis, enim, ipsum accusantium, vero sapiente dolorum consectetur.</p>
                                </div>
                           </div>
                            <div class="chef__chef2 chef">
                                 <img class="chef__profile" src="../img/Chef Vectorf.jpg" alt="">
                                 <div class="chef__text">
                                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, possimus vero? Modi, ipsum? Ea quae nulla ratione vitae impedit iste debitis, enim, ipsum accusantium, vero sapiente dolorum consectetur.</p>
                                 </div>
                            </div>
                           <div class="chef3 chef">
                               <img class="chef__profile" src="../img/Chef_1_RF_RMPL-01.jpg" alt="">
                               <div class="chef__text">
                                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, possimus vero? Modi, ipsum? Ea quae nulla ratione vitae impedit iste debitis, enim, ipsum accusantium, vero sapiente dolorum consectetur.</p>
                               </div>
                         </div>
                         <?php 
                         include("function.php");
                         echo card("chef3 chef" ,"../img/Chef_1_RF_RMPL-01.jpg","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, possimus vero? Modi, ipsum? Ea quae nulla ratione vitae impedit iste debitis, enim, ipsum accusantium, vero sapiente dolorum consectetur.");
                         echo card("chef3 chef" ,"../img/Chef Vectorf.jpg","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, possimus vero? Modi, ipsum? Ea quae nulla ratione vitae impedit iste debitis, enim, ipsum accusantium, vero sapiente dolorum consectetur");   ?>
                        </div>
                </section>
                <section class="wrapper__contact contact" id="contact">
                    <div class="contact__overl"></div>

                     <div class="contact__wrapper fields">
                     <form action="" class="fields__form" id="form">
                        <div class="fields__field field">
                        
                          <label for="Email">Your email :</label>
                          <input class="field__input" type="email" name="email" id="email" placeholder="You email..">
                          <p id="error"></p>
                        </div>
                        <div class="fields__field field">
                           <label for="password">Your password :</label>
                           <input class="field__input" type="password" name="password" id="password" placeholder="Your password..">
                           <p id="error1"></p>
                        </div>
                        <div class="fields__field field">
                           <label for="comment">Your comment :</label>
                           <textarea class="field__area" name="comment" id="comment" cols="30" rows="10" placeholder="Your comment..">
                           
                           </textarea>
                           <p id="error2"></p>
                        </div>
                        
                        <button id="btn1">Send..</button>
                        </form>
                     </div>
                </section>


                <?php 
                   include('footer.php');
                  ?>
                <!-- <footer class="wrapper__footer footer">
                    <div class="footer__sponsors sponsors">
                        <div class="sponsors__items">
                           <h1><strong>LOGO</strong></h1>
                        </div>
                        <div class="sponsors__items">
                           <h3>Our Adress</h3>
                           <h3>Phone number</h3>
                           <h3>Localisation</h3>
                        </div>
                        <div class="sponsors__items grow">
                           <p class="grow__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quod quasi. Libero, aliquid. Magni architecto amet tempora ipsum, dignissimos eos officia, obcaecati ipsam libero dolorum veniam accusamus sint modi consequuntur?</p>
                        </div>
                           
                    </div>
                    <div class="footer__socialsmedia socials">
                    <i class="fab fa-twitter socials__i"></i>
                    <i class="fab fa-linkedin socials__i" ></i>
                    <i class="fab fa-facebook socials__i"></i>
                    <i class="fab fa-instagram socials__i"></i>
                    </div>
                </footer> -->
          </div>
          <script src="../js/scriptindex.js"></script>
          <script src="../js/script.js"></script>
</body>
</html>