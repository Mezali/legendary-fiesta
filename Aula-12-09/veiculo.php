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

    <div id="formulario" style="text-align: center;" class="col-form-label-lg">



        <!-- #region VEICULOS-->
        <div class="col p-2">
            <h2 class="p-5 bg-info">Veiculos</h2>
            <div class="">
                <form action="funcionario.php" method="POST">
                    <div class="form-group">

                        <label>Placa</label>
                        <input type="text" class="form-control" name="placa" placeholder="Insira a placa do carro">

                    </div>

                    <div class="form-group">

                        <label>Chassi</label>
                        <input type="number" class="form-control" name="chassi" placeholder="Insira o Chassi do carro">

                    </div>

                    <div class="form-group">

                        <label>cor</label>
                        <input type="color" class="form-control" name="cor" placeholder="">

                    </div>

                    <div class="form-group">

                        <label>marca</label>
                        <select class="form-control" id="marca">
                            <option>VW</option>
                            <option>Fiat</option>
                            <option>GM</option>
                            <option>Toyota</option>
                            <option>Renault</option>
                            <option>Hyundai</option>
                            <option>Ford</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <label>modelo</label>
                        <input type="text" class="form-control" name="modelo" placeholder="Modelo do carro">

                    </div>

                    <div class="form-group">

                        <label>Ano</label>
                        <input type="date" class="form-control" name="ano_fabr" placeholder="Insira o ano de fabricação">

                    </div>

                    <div class="form-group">

                        <label>kilometragem</label>
                        <input type="number" class="form-control" name="kilometragem" placeholder="Insira a Kilometragem">

                    </div>

                    <div class="form-group">

                        <label>combustivel</label>
                        <select class="form-group" id="combustivel">
                            <option>Gasolina</option>
                            <option>Álcool</option>
                            <option>Flex</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <label>tipo</label>
                        <input type="text" class="form-control" name="tipo" placeholder="Insira o tipo do carro">

                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>