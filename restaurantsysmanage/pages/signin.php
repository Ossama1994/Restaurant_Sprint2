<?php
    session_start();
    require_once('connect.php');
    $login=isset($_POST['login'])?$_POST['login']:"";
    $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";

    $requete="SELECT iduser,login,email,role,etat 
                from utilisateur where login='$login' 
                and pwd=MD5('$pwd')";
    
    $resultat=$con->query($requete);

    if($user=$resultat->fetch()){

            $_SESSION['user']=$user;
            header('location:dash.php');

        }else{
             $_SESSION['erreurLogin']="<strong>Erreur!!</strong> Login or password are incorrect";
              header('location:login.php');
       }

?>