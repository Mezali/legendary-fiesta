<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="height:1500px">
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" >MENU</a>
  <ul class="navbar-nav">
    <li>
      
    </li>
    <li class="nav-item">
      <button class="btn btn-success" type="button">cadastro</button>
      <button class="btn btn-success" type="button">login</button>
    </li>
  </ul>
</nav>

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
    <h1>aluguel de carros</h1>
  </div>

  <div style="overflow:auto">
    <div class="menu">
      <a href="#">UTILITARIO</a>
      <a href="#">PASSEIO</a>
      <a href="#">ESPORTIVO</a>
      <a href="#">OUTROS</a>
    </div>

    <div class="main">
      <h2>vitrine virtual</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
        dolore magna aliquam erat volutpat.</p>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "banco");

      $sql = "SELECT * FROM produtos";
      $qr = mysqli_query($conn, $sql) or die(mysqli_error());
      while ($ln = mysqli_fetch_assoc($qr)) {
        echo '<h2>' . $ln['nome'] . '</h2> <br />';
        echo 'Preço : R$ ' . number_format($ln['preco'], 2, ',', '.') . '<br />';
        echo '<img src="img/' . $ln['imagem'] . '" /> <br />';
        echo '<a href="carrinho.php?acao=add&id=' . $ln['id'] . '">Comprar</a>';
        echo '<br /><hr />';
      }
      ?>

    </div>

    <div class="right">
      <h2>Promoções</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
    </div>
  </div>

  <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer text</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer text</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>


  <!-- #region EU QUERO MORRER-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>