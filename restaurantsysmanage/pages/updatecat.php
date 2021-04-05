<?php

include("connect.php");

$idc=isset($_POST['idc'])?$_POST['idc']:"";
$namec=isset($_POST['namec'])?$_POST['namec']:"";
$query ="UPDATE categoryproduct  set namec=? where idc=?";
$params=array($namec,$idc);
$resultat=$con->prepare($query);
$resultat->execute($params);
header("location:category.php");