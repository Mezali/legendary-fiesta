<!DOCTYPE html>

<head>
    <title>TC-DS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>

<body>

    <div class="container-fluid p-3 bg-dark text-white">
        <h1>Tarefa de DS: <mark>TRABALHO COM ITENS DE FORMULÁRIO</mark></h1>
    </div>

    <div id="formulario" style="text-align: center;" class="row">


        <!-- #region CLIENTES-->
        <div class="col p-2">
            <h2 class="p-5 bg-info">Cliente</h2>
            <div class="">
                <form action="cliente.php" method="POST">

                    <div class="form-group">
                        <label><mark>Nome</mark></label>
                        <input type="password" class="form-control" id="nome" placeholder="Insira o seu Nome">
                    </div>

                    <div class="form-group">
                        <label><mark>CPF</mark></label>
                        <input type="text" class="form-control" id="CPF" placeholder="Insira o seu CPF">
                    </div>
                    <div class="form-group">
                        <label>rua</label>
                        <input type="text" class="form-control" id="rua" placeholder="Insira a sua Rua">
                    </div>

                    <div class="form-group">
                        <label>Numero</label>
                        <input type="number" class="form-control" id="numero" placeholder="Insira o numero da sua casa">
                    </div>

                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>CEP</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>UF</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="">E-mail</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelpId" placeholder="Insira seu E-mail">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <!-- #endregion -->

        <!-- #region VEICULOS-->
        <div class="col p-2">
            <h2 class="p-5 bg-info">Veiculos</h2>
            <div class="">
                <form action="veiculos.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- #endregion -->

        <!-- #region FUNCIONARIOS-->
        <div class="col p-2">
            <h2 class="p-5 bg-info">Funcionario</h2>
            <div class="">
                <form action="funcionarios.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- #endregion -->
    </div>


</body>

</html>
