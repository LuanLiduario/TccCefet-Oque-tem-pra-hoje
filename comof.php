<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Como Funciona</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
      *{font-family:"Helvetica"}
      .dropdown-menu{
      color:#000;
      background-color: #ffa726;
    }
    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:hover,
    .navbar-inverse .navbar-nav>.active>a:focus {
      color: #5387AD;
      background-color: #ffa726
    }
      #k:focus {
      background-color: #ffa726;}
      
    .navbar-header>.navbar-toggle:hover,
    .navbar-header>.navbar-toggle:focus {
      color: #01070b;
      background-color: #ffa726;
    }
    footer {
      background-color: #F57C00;
      color: #f5f5f5;
      padding: 25px;
    }

    footer a {/*setinha para subir ao topo*/
      color: #f5f5f5;
    }

    footer a:hover {
      color: #777;
      text-decoration: none;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #F57C00;
    }
    .navbar li a, .navbar .navbar-brand {/*COR DAS LETRA DOS BOTAO*/
      color: #fff !important;
    }
    .navbar-nav li a:hover {
      color: #fff !important;
    }
    .panel-group{
      width: 500px;
      height: 600px;
    }
    .col-sm-6{
      padding: 30px;
    }

  </style>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php">O que tem pra hoje ?</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="receitas.php">Receitas</a></li>
            <li class="active"><a href="comof.php">Como funciona</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              
               <?php if(isset($nome)){
                             $id = $_SESSION["id"];
$nome = $_SESSION["nome"];
                            ?> <li><a href="paginausuario.php"><span class="glyphicon glyphicon-user"></span> Olá <?= $nome ?> </a></li><?php
                        }else
                        {  ?><li><a href="cadastra.php"><span class="glyphicon glyphicon-user"></span> Junte-se a nós</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> <?php } ?>
                        
          </ul>
        </div>
      </div>
    </nav>
      
<div class="container" style="margin-top:60px;min-height:500px;">
    <h2 class="form-signin-heading">Como Funciona</h2>
    <br>
    <p>
        Certamente você já chegou em casa, após um dia exaustivo de trabalho e só então percebeu que deveria ter feito compras.
        Com o O que tem pra hoje ele a tarefa de cozinhar apenas com aqueles poucos ingredientes guardados no fundo da despensa, 
        se torna possível.
    </p>
    <p>
        Digite alguns ingredientes nos locais indicados. O buscador irá retornar as melhores receitas, que podem ser preparadas 
        com um ou mais ingredientes informados. Se não gostar dos resultados, experimente remover os ingredientes menos 
        importantes ou digite outros termos e verifique a ortografia.
    </p>
    <h2 class="form-signin-heading">Vamos lá</h2>
    <br>
    <p>
         Com o O Que Tem Pra Hoje, a tarefa de cozinhar apenas com aqueles poucos ingredientes guardados no
         fundo da despensa, se torna possível.
        Basta você digitar cada ingrediente no local certo. Nosso sistema irá procurar as receitas que contenham os 
        itens pelos quais solicitou e retornar com a maior precisão possível. 
    </p>
    </div>


  </body>
  <footer class="text-center">
    <a class="up-arrow" href="comof.php" data-toggle="tooltip" title="Para o topo">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Copyright © 2017 | GKL </p>
  </footer>

  <script>
    $(document).ready(function(){
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip();
    })
  </script>  

</html>
