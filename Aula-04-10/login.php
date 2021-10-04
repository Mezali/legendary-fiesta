<?php

$server = "localhost";
$user = "root";
$password = "";
$bank = "banco";

$conection = mysqli_connect($server,$user,$password,$bank) or die (">:V não consegui me conectar ao banco!");


$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$search = "SELECT * FROM user WHERE usuario = '$usuario'";

$result = mysqli_query()
?>