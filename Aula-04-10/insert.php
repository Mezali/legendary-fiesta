<?php

define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'banco');

$conn = mysqli_connect(HOST,USER, PASSWORD, DB) or die ("Não foi possivel conectar-se ao banco de dados!");


//Tabela Usuário

$nome = $_POST['nome'];
$senha = md5($_POST['senha']);

$sqlinsert = "INSERT INTO user(nome, senha) VALUES('$nome','$senha')";

mysqli_query($conn, $sqlinsert) or die ("Não foi possível inserir os dados"); 
mysqli_close($conn);

echo '<a href="index.html">Voltar!, todos os dados inseridos com sucesso >:)</a>';
?>