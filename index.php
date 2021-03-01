<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>DarkDiary</title>
  </head>
  <body>


    <nav class="navbar navbar-dark bg-dark" style="background: url('assets/img/textura-black.jpg'); background-position: top;background-size: cover; background-repeat: no-repeat;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="./" class="navbar-brand text-light">DarkDiary</a>
        </div>

        <ul class="nav navbar-bar navbar-right">
          <?php 
            
            if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){

           ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="meu-diario.php">Meu diario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="faq.php">Faq</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="sair.php">Sair</a>
            </li>
            
          <?php 
            }else{
              ?>
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
              <?php
            };
          ?>
        </ul>

      </div>
    </nav>

    <section class="pag-inicial" style="background: url('assets/img/rua.jpg'); background-position: center;background-size: cover; background-repeat: no-repeat; padding: 123px; border-radius: none; margin: 0;">
      <div>
        <div class="container">
          <h1 class="display-4 h1-jumb">DarkDiary</h1>
          <p class="lead p-jumb">Este é o seu diário online, pode usar sem medo que as pessoas vejam o que estão escrito.</p>
        </div>
      </div>
      <br><br>
      <hr style="background: #fff;">
      <br><br>
      <?php 
            
            if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){

           ?>
      <div style="width: 97%; margin: auto;">
        <h2 style="color: #fff; margin-top: 20px; margin-bottom: 15px;"><?php
        $hr = date(" H ");
        if($hr >= 12 && $hr<18) {
        $resp = "Boa tarde, Estavamos te esperando!!";}
        else if ($hr >= 0 && $hr <12 ){
        $resp = "Bom dia, Estavamos te esperando!!";}
        else {
        $resp = "Boa noite, Estavamos te esperando!!";}
        echo "$resp";
        ?></h2>
      </div> 
      <?php 
          }else{
            ?>
            <h2 style="color: #fff; margin-top: 20px; margin-bottom: 15px;">Temos mais de 999 usuários em nosso site!</h2>
            <?php
       ?> 
     <?php } ?>
    </section> 

    <script type="text/javascript" src="assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>





