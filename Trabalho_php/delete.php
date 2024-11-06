<?php

include 'conection.php';


$id = $_GET["idusuario"];

if(isset($_GET['idusuario'])){
$sqlDelete = mysqli_query($conectionBD, "DELETE FROM usuario WHERE idusuario = {$id}")
or die (mysqli_error($conectionBD));

header('location: table.php');
}


?>