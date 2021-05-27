<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<html >
    <head>
        <title>O que tem pra hoje ?</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        *{
            font-family:"Helvetica";}
        /*body{
         height: 900px; 
          
        }*/
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }
        div{
            width: auto;
        }
        .navbar-header>.navbar-toggle:hover,
        .navbar-header>.navbar-toggle:focus {
            color: #01070b;
            background-color: #ffa726;
        }
        #k:focus {
            background-color: #ffa726;}

        div:a{
            width: 50px;
        }
        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #5387AD;
            background-color: #ffa726
        }
        /*Letra do menu Receita*/
        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus {
            color: #01070b;
            background-color: #ffa726;
        }



        .navbar  {
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
        #geladeira{
            width: 100%;
            height: 100%;
        }
        footer {
            background-color: #F57C00;
            color: #f5f5f5;
            padding: 25px;
            /*height: 130px;*/
        }

        footer a {/*setinha para subir ao topo*/
            color: #f5f5f5;
        }

        footer a:hover {
            color:  #777;
            text-decoration: none;
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="receitas.php">Receitas</a></li>
                        <li><a href="comof.php">Como funciona</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <?php
                        if (isset($nome)) {
                            $id = $_SESSION["id"];
                            $nome = $_SESSION["nome"];
                            ?> <li><a href="paginausuario.php"><span class="glyphicon glyphicon-user"></span> Olá <?= $nome ?> </a></li><?php
                            } else {
                                ?><li><a href="cadastra.php"><span class="glyphicon glyphicon-user"></span> Junte-se a nós</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top:60px">
            <div class="col-sm-6" style="//background-color:lavenderblush;">
                <label><p>Digite os ingredientes que você tem em casa e nós selecionaremos as receitas que mais se enquadram na sua busca.</p></label><br>
                <form action='processa.php' method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 1" name="text1" class="form-control" id="text1">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 2" name="text2" class="form-control" id="text2">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 3" name="text3" class="form-control" id="text3">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 4" name="text4" class="form-control" id="text4">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 5" name="text5" class="form-control" id="text5">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 6" name="text6" class="form-control" id="text6">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 7" name="text7" class="form-control" id="text7">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 8" name="text8" class="form-control" id="text8">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 9" name="text9" class="form-control" id="text9">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Ingrediente 10" name="text10" class="form-control" id="text10">
                    </div>

                    <button type="submit" class="btn btn-default">Procurar</button>
                </form> 
            </div> 






            <div class="col-sm-6" style="//background-color:#555;">
                <img src="geladeira.png" id="geladeira"></div>
        </div>


    </body>

    <footer class="text-center">
        <a class="up-arrow" href="index.php" data-toggle="tooltip" title="Para o topo">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>

        <p>Copyright © 2017 | GKL </p>

    </footer>

</html>

<script>
    $(document).ready(function () {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>  

