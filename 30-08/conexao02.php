<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel se conectar ao servidor');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$EMAIL = $_POST['email'];

$NOME = strtoupper($nome);
$SOBRENOME = strtoupper($sobrenome);
$nomecompleto = $NOME . " " . $SOBRENOME;
$email = strtolower($EMAIL);


$inserir = "INSERT INTO tabela_dois VALUES('$nomecompleto', '$email')";

mysqli_query($conexao, $inserir) or die ("Não foi possível inserir os dados"); 
mysqli_close($conexao);

echo"Dados inseridos com sucesso!";
echo"$nomecompleto";
?>