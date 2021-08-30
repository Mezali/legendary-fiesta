<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel se conectar ao servidor');

$nome = $_POST['nome'];
$email = $_POST['email'];
$filhos = $_POST['filhos'];
$nascimento = $_POST['nascimento'];
$website = $_POST['website'];
$salario = $_POST['salario'];

$sqlinsert = "INSERT INTO cadastro(nome, email, filhos, nascimento, website, salario)VALUES('$nome','$email','$filhos','$nascimento','$website','$salario')";

mysqli_query($conexao, $sqlinsert) or die ("Não foi possível inserir os dados"); 
mysqli_close($conexao);

echo"Dados inseridos com sucesso!";
?>