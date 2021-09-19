<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel se conectar ao servidor');

$ID = $_POST['ID'];
$cpf = $_POST['CPF'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$CEP = $_POST['CEP'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$UF = $_POST['UF'];
$telefone = $_POST['telefone']; 
$email = $_POST['email'];

$inserir = "INSERT INTO funcionario(ID, CPF, rua, numero, bairro, CEP, cidade, UF, telefone, email) VALUES('$ID','$cpf','$rua','$numero','$bairro','$CEP','$cidade','$UF','$telefone','$email')";

mysqli_query($conexao, $inserir) or die ("Não foi possível inserir os dados"); 
mysqli_close($conexao);

echo"Dados inseridos com sucesso!";