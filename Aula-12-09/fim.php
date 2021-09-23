<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Não foi possivel se conectar ao servidor');

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

mysqli_query($conexao, $inserir) or die("<h1>Inserido: <mark>sem sucesso!</mark></h1>");
mysqli_close($conexao);

echo '<div class="container-fluid p-3 bg-dark text-white">
<h1>Inserido: <mark>com sucesso!</mark></h1>
</div>';
?>
<!DOCTYPE html>

<head>
    <title>TC-DS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>

<body>
</body>

</html>