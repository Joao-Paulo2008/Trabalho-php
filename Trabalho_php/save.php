<?php

//adiconar a conexão com o banco
include 'conection.php';

$nome = $_POST['nome'];
$sobreNome = $_POST['sobrenome'];
$date = $_POST['date'];

$sql = mysqli_query($conectionBD, "INSERT INTO usuario(nome_usuario, sobrenome_usuario, datas) VALUES ('$nome', '$sobreNome', '$date')");

if($sql){
    header('location: index.php');
}
?>