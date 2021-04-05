<?php
    
 try{
       // On se connecte à MySQL
       $con = new PDO('mysql:host=localhost;dbname=resturant', 'root', '');
}
catch(Exception $e)
{

       // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());
}