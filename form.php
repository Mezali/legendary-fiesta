<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<h1 class="container-fluid">Formulários</h1>

<?php

    $erros = []; // $erros = new Array();

    if(count($_POST) > 0) {
        /*
        print_r($_POST);

        echo $_GET['dir'], '<br>';
        echo $_GET['file'], '<br>';

        echo "Nome  : {$_POST['nome']} <br>";
        echo "E-mail: {$_POST['email']} <br>";

        $nome = $_POST['nome'];
        */

        

        if(!filter_input(INPUT_POST, "nome")) {
            $erros['nome'] = 'Nome é obrigatório';
        }

        if(filter_input(INPUT_POST, "nascimento")) {
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data) {
                $erros['nascimento'] = 'Data deve estar no formato d/m/Y';
            }
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $erros['email'] = 'E-mail inválido';
        }

        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
            $erros['site'] = 'Site inválido';
        }

    }
?>

<h2 class="container-fluid">Cadastro</h2>

<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
        <?= $erro ?>
    </div>
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" 
            name="nome" id="nome" placeholder="Digite o nome completo">
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input class="form-control" type="text" 
            name="nascimento" id="nascimento" placeholder="Nascimento">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input class="form-control" type="email" 
            name="email" id="email" placeholder="E-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input class="form-control" type="text" 
            name="site" id="site" placeholder="Site">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde Filhos</label>
            <input class="form-control" type="number" 
            name="filhos" id="filhos" placeholder="Qtde Filhos">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input class="form-control" type="text" 
            name="salario" id="salario" placeholder="Salário">
        </div>
    </div>

    <button class="btn btn-primary btn-xl">Enviar</button>
</form>