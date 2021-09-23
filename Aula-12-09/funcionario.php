<?php
define('HOST', 'localhost'); //PROFESSOR, LEMBRE-SE DE TROCAR OS DADOS
define('USER', 'root');
define('PASSWORD', 'Proxy@ONE001');
define('DB', 'banco');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Não foi possivel se conectar ao servidor');

$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$cor = $_POST['cor'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$fabr = $_POST['ano_fabr'];
$kilometragem = $_POST['kilometragem'];
$combustivel = $_POST['combustivel'];
$tipo = $_POST['tipo'];


$inserir = "INSERT INTO veiculo(placa, chassi, cor, marca, modelo, ano_fabr, kilometragem, combustivel, tipo) VALUES('$placa','$chassi','$cor','$marca','$modelo','$fabr','$kilometragem','$combustivel','$tipo')";

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

    <div class="container-fluid p-3 bg-dark text-white">
        <h1>Tarefa de DS: <mark>TRABALHO COM ITENS DE FORMULÁRIO</mark></h1>
    </div>

    <div id="formulario" style="text-align: center;" class="col-form-label-lg">

        <!-- #region FUNCIONARIOS-->
        <div class="col p-2">
            <h2 class="p-5 bg-info">Funcionario</h2>
            <div class="">
                <form action="fim.php" method="POST">
                    <div class="form-group">
                        <label><mark>Nome</mark></label>
                        <input type="text" class="form-control" name="nome" placeholder="Insira o seu Nome">
                    </div>

                    <div class="form-group">
                        <label><mark>CPF</mark></label>
                        <input type="text" class="form-control" name="CPF" placeholder="Insira o seu CPF">
                    </div>
                    <div class="form-group">
                        <label>rua</label>
                        <input type="text" class="form-control" name="rua" placeholder="Insira a sua Rua">
                    </div>

                    <div class="form-group">
                        <label>Numero</label>
                        <input type="number" class="form-control" name="numero" placeholder="Insira o numero da sua casa">
                    </div>

                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" name="bairro" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>CEP</label>
                        <input type="number" class="form-control" name="CEP" placeholder="Insira o CEP">
                    </div>

                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Insira a cidade">
                    </div>

                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" class="form-control" name="UF" placeholder="Insira o UF(apenas duas letras)">
                    </div>

                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="tel" class="form-control" name="telefone" placeholder="Insira o telefone">
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelpId" placeholder="Insira seu E-mail">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <!-- #endregion -->
    </div>


</body>

</html>