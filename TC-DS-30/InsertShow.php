<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Não foi possivel se conectar ao servidor');

$nome = $_POST['nome'];
$email = $_POST['email'];
$filhos = $_POST['filhos'];
$nascimento = $_POST['nascimento'];
$website = $_POST['website'];
$salario = $_POST['salario'];

$SQLshow = "SELECT * FROM cadastro";
$sqlinsert = "INSERT INTO cadastro(nome, email, filhos, nasc, website, salario)VALUES('$nome','$email','$filhos','$nascimento','$website','$salario')";
mysqli_query($conexao, $sqlinsert) or die("Não foi possível inserir os dados");
$limite = mysqli_query($conexao, $SQLshow);
mysqli_close($conexao);



while ($SQLshow = mysqli_fetch_array($limite)) {
    $nome = $SQLshow['nome'];
    $email = $SQLshow['email'];
    $filhos = $SQLshow['filhos'];
    $nascimento = $SQLshow['nasc'];
    $website = $SQLshow['website'];
    $salario = $SQLshow['salario'];
    echo "Dados inseridos com sucesso! </br> </br>";
    
    echo "Nome: $nome </br>";
    echo "E-mail: $email </br>";
    echo "filhos: $filhos </br>";
    echo "Nascimento: $nascimento </br>";
    echo "WebSite: $website </br>";
    echo "Salario: $salario </br>";
};




