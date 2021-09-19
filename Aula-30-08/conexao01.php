<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel se conectar ao servidor');

$nome = $_POST['nome'];
$cpf = $_POST['CPF'];

$cpf02 = str_replace(".", "", $cpf);
$cpf03 = str_replace("-", "",$cpf02);

$inserir = "INSERT INTO tabela_un(nome, CPF) VALUES('$nome','$cpf03')";

mysqli_query($conexao, $inserir) or die ("Não foi possível inserir os dados"); 
mysqli_close($conexao);

echo"Dados inseridos com sucesso!";