<?php

include("connect.php");
$idc = isset($_GET["idc"])?$_GET["idc"]:0;
$reponse = $con->query("DELETE  FROM categoryproduct where idc=$idc");
header("Location:category.php");

