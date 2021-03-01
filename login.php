<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body style="background-image: url('assets/img/rua.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 500px;">


     <nav class="navbar navbar-dark bg-dark" style="background: url('assets/img/textura-black.jpg'); background-position: top;background-size: cover; background-repeat: no-repeat;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="./" class="navbar-brand text-light">DarkDiary</a>
        </div>

        <ul class="nav navbar-bar navbar-right">
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="cadastrar.php">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="faq.php">Faq</a>
              </li>
        </ul>

      </div>
    </nav>

    

    <form class="box" method="POST">
      <h1>Login</h1>
      <input type="text" name="nome" placeholder="Seu nome">
      <input type="text" name="email" placeholder="Seu email">
      <input type="password" name="senha" placeholder="Sua senha">
      <input type="submit" name="" value="Login">
    </form>

    <?php 
    require 'classes/usuarios.class.php';
    $u = new Usuarios();

    if(isset($_POST['email']) && !empty($_POST['email'])){
      $nome = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);
      $senha = $_POST['senha'];

      if($u->login($nome,$email,$senha)){
        ?>
        <script type="text/javascript">window.location.href="./"</script>
        <?php
      }else{
        ?>
        <div class="alert alert-danger">
          Email e/ou senha não batem!
        </div>
        <?php
      }
    }


 
     ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>