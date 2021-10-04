<?php

define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'banco');

$conn = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Não foi possivel conectar-se ao banco de dados!");

$sql = "SELECT * FROM user";

$user = $_POST['usuario'];
$password = md5($_POST['password']);

$search = "SELECT * FROM user WHERE nome = '$user' AND senha = '$password'";

$data = mysqli_query($conn, $search) or die("não foi possivel achar os dados >:(");

if (mysqli_num_rows($data) <= 0) {
    echo "Usuario não cadastrado";
} else {
    echo "Usuario cadastrado";
};

echo '<a href="index.html">Voltar!</a>';
