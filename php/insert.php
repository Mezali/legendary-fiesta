<?php

$local_serve = "localhost";      // local do servidor
$usuario_serve = "root";         // nome do usuario
$senha_serve = "";                  // senha
$banco = "banco";      // nome do banco de dados

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não foi possivel conectar-se ao banco de dados!");

/*"pega" os dados digitados no form, através do método POST.*/

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
//$telefone = $_POST['telefone'];

/*Inserindo os dados na Tabela "dados" através de comandos MySQL.*/

$sqlinsert = "INSERT INTO alunos(nome, rg, telefone)VALUES('$nome','$rg','$telefone')";

mysqli_query($conn, $sqlinsert) or die ("Não foi possível inserir os dados"); 
mysqli_close($conn);
/*Mostra na tela os dados inseridos.*/

echo"Inseridos na Tabela DADOS <br />Nome: $nome <br />RG: $rg <br /> Telefone: $telefone";

?>