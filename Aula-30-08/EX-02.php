<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefa de DS</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Exercício 02</h3>
                </div>
                <div class="box">
                    <form action="conexao02.php" method="POST">
                        <div class="field">
                            <div class="control">
                                <input name="nome" name="text" class="input is-large" placeholder="Nome" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="sobrenome" class="input is-large" type="text" placeholder="sobrenome">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="email" class="input is-large" type="email" placeholder="E-mail">
                            </div>
                        </div>


                        <button type="submit" class="button is-block is-link is-large is-fullwidth">cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>