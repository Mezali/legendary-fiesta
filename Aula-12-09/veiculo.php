<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Não foi possivel se conectar ao servidor');

$placa = $_POST['nome'];
$chassi = $_POST['CPF'];
$cor = $_POST['rua'];
$marca = $_POST['numero'];
$modelo = $_POST['bairro'];
$fabr = $_POST['CEP'];
$kilometragem = $_POST['cidade'];
$combustivel = $_POST['UF'];
$tipo = $_POST['telefone'];


$inserir = "INSERT INTO veiculo(placa, chassi, cor, marca, modelo, ano_fabr,kilometragem, combustivel, tipo) VALUES('$placa','$chassi','$cor','$marca','$modelo','$fabr','$kilometragem','$combustivel','$tipo')";

mysqli_query($conexao, $inserir) or die("Não foi possível inserir os dados");
mysqli_close($conexao);

echo "Dados inseridos com sucesso!";
