<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/faq.css">
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

    <section class="pag-inicial" style="background: url('assets/img/rua.jpg'); background-position: center;background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; border-radius: none; margin: 0;">

      <br><br>



      <form class="box container" method="POST">
        <input type="text" name="nome" placeholder="como posso ajudar? :)" style="color: #fff;">
        <input type="submit" name="" class="btn btn-outline-dark perguntar" value="Perguntar" style="color: #fff;">
      </form>

      <div class="container">
        <br>
        <div class="blocos" style="padding: 20px; border: solid 1px white">
          <h5 class="h5-pergunta">É seguro deixar minhas info aqui???</h5>
          <p class="p-resposta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi assumenda molestias, suscipit porro magni vel, doloremque quaerat. Earum, odit, aliquam. Eum natus sed incidunt quos tempore, corrupti accusamus, labore error. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et hic est ex tenetur delectus, incidunt quae, voluptatum sunt illo porro rem neque id error, eaque iste laboriosam mollitia natus beatae?</p>
          <a href="" class="btn btn-dark">Responder</a><a href="" class="btn btn-dark ml-3">Curtir</a>
        </div>
        <br>
        <div class="blocos" style="padding: 20px; border: solid 1px white">
          <h5 class="h5-pergunta">É seguro deixar minhas info aqui???</h5>
          <p class="p-resposta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi assumenda molestias, suscipit porro magni vel, doloremque quaerat. Earum, odit, aliquam. Eum natus sed incidunt quos tempore, corrupti accusamus, labore error. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et hic est ex tenetur delectus, incidunt quae, voluptatum sunt illo porro rem neque id error, eaque iste laboriosam mollitia natus beatae?</p>
           <a href="" class="btn btn-dark">Responder</a><a href="" class="btn btn-dark ml-3">Curtir</a>
        </div>
        <br>
        <div class="blocos" style="padding: 20px; border: solid 1px white">
          <h5 class="h5-pergunta">É seguro deixar minhas info aqui???</h5>
          <p class="p-resposta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi assumenda molestias, suscipit porro magni vel, doloremque quaerat. Earum, odit, aliquam. Eum natus sed incidunt quos tempore, corrupti accusamus, labore error. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et hic est ex tenetur delectus, incidunt quae, voluptatum sunt illo porro rem neque id error, eaque iste laboriosam mollitia natus beatae?</p>
           <a href="" class="btn btn-dark">Responder</a><a href="" class="btn btn-dark ml-3">Curtir</a>
        </div>
        <br>
        <div class="blocos" style="padding: 20px; border: solid 1px white">
          <h5 class="h5-pergunta">É seguro deixar minhas info aqui???</h5>
          <p class="p-resposta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi assumenda molestias, suscipit porro magni vel, doloremque quaerat. Earum, odit, aliquam. Eum natus sed incidunt quos tempore, corrupti accusamus, labore error. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et hic est ex tenetur delectus, incidunt quae, voluptatum sunt illo porro rem neque id error, eaque iste laboriosam mollitia natus beatae?</p>
           <a href="" class="btn btn-dark">Responder</a><a href="" class="btn btn-dark ml-3">Curtir</a>
        </div>
      </div> 
    </section> 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>

<style>
  .h5-pergunta{
    color: #fff;
  }

  .p-resposta{
    color: #fff;
  }
</style>