<?php

include("connect.php");
$idp = isset($_GET["idp"])?$_GET["idp"]:0;
$reponse = $con->query("DELETE  FROM products where idp=$idp");
header("Location:products.php");