<?php include "verifica.php" ?>
<?php

  echo "TELA RESTRITA A USUARIOS AUTENTICADOS";

  echo "<br>";

  $usuario = $_SESSION['usuario'];

  echo "<br>";

  echo "Usuario logado: $usuario";

  echo "<br>";



  echo " <a href='login.html'>Voltar</a> ";



?>