

<?php require 'config.php'; ?>
<?php if(empty($_SESSION['cLogin'])){
    ?>
    <script type="text/javascript">window.location.href="login.php"</script>
    <?php
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/meu-diario.css">
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


    <section style="background-image: url('assets/img/espaco.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; width: 100%;">
      <div class="blocos">
        <br>
      	<a href="adicionar-diario.php" class="btn btn-success adicionar">Adicionar</a>
        <hr>
        <?php
        require 'classes/diario-class.php';
        $d = new Diario();
        $diarios = $d->getDiario();
         foreach ($diarios as $diario) { ?>
          <div class="boxes">
            <h4 style="color: #fff;"><?php echo $diario['data'];?></h4>
            <p style="color: #fff;"><?php echo $diario['texto'];?></p>
            <a href="excluir.php?id=<?php echo $diario['id'];?>" class="btn btn-danger">Excluir</a>
            <button class="btn btn-primary">Editar</button> 
            <hr>
          </div>
        <?php } ?>
      </div>
    </section>



    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>    