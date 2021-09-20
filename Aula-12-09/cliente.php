<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel se conectar ao servidor');

$nome = $_POST['nome'];
$cpf = $_POST['CPF'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$CEP = $_POST['CEP'];
$cidade = $_POST['cidade'];
$UF = $_POST['UF'];
$telefone = $_POST['telefone']; 
$email = $_POST['email'];

$inserir = "INSERT INTO cliente(nome, CPF, rua, numero, bairro, CEP, cidade, UF, telefone, email) VALUES('$nome','$cpf','$rua','$numero','$bairro','$CEP','$cidade','$UF','$telefone','$email')";

mysqli_query($conexao, $inserir) or die ("Não foi possível inserir os dados"); 
mysqli_close($conexao);

echo"Dados inseridos com sucesso!";