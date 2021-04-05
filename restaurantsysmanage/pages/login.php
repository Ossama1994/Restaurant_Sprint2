<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Login</title>
</head>
<body>
           <header class="header1">
                   <h1 class="header1__logo">LOGO</h1>
              <nav class="navabar">
                  <ul class="navabar__unordered ul" id="menu">
                      <li class="ul__li li"><a class="li__a" href="index.php">Home</a></li>
                      <li class="ul__li li"><a class="li__a" href="menu.php">Menu</a></li>
                      <!-- <li class="ul__li li"><a class="li__a" href="#contact">Contact us</a></li>
                      <li class="ul__li li"><a class="li__a" href="#about">About us</a></li>
                      <li class="ul__li li"><a class="li__a" href="#home">Login</a></li> -->
                  </ul>
                  <img class="navabar__img" src="../img/menu.png" alt="" id="btn">
              </nav>
           </header>
          <section class="login">
                   <div class="login__wrapper">
                       <div class="infos">
                               <div class="infos__img">
                                   <img class="only" src="../img/bg1.jpg" alt="">
                               </div>
                               <div class="infos__form">
                                 
                                       <?php if (!empty($erreurLogin)) { ?>
                                           <div class="alert alert-danger">
                                               <?php echo $erreurLogin ?>
                                           </div>
                                       <?php } ?>

                                      <img src="../img/profil.png" alt="">
                                    <form action="signin.php" class="inputs" method="POST">
                                       <input class="inputs__input" name="login" type="text" required placeholder="Enter your login..">
                                       <input class="inputs__input" name="pwd" type="password" required placeholder="Enter your password..">
                                       <input class="inputs__input3" type="submit">
                                    </form>
                               </div>
                       </div>
                   </div>  
          </section>
       

</body>
</html>