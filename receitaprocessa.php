<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<html lang="pt">
    <head>
        <title>Receitas possíveis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
        /*body{
         height: 900px; 
          
        }*/
        *{
            font-family:"Helvetica";

        }

        div#receita{

            top-botton:70px;
            margin-top:70px;
            margin-left: 250px;
            margin-right: 250px;
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }

        /*        div:a{
                    width: 50px;
                }*/
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
        #k:focus {
            background-color: #ffa726;}

        footer a:hover {
            color:  #777;
            text-decoration: none;
        }
        /*        article{
                    width:100%;
                    height: 300px;        
                    
                }*/

        /*    .navbar-header>.navbar-toggle:hover,
            .navbar-header>.navbar-toggle:focus {
              color: #01070b;
              background-color: #ffa726;
            }*/



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

        <div id="receita" class="container"  style="min-height: 600px;">
            <div class="col-sm-6" style="min-height: 600px;">
              

                    <?php
                    include "config.php";


                    $receita = $_GET["receita"];

                    $sql = "select distinct quantidade,unidade,nome from ingredientes_has_etapas 
join ingredientes on ingredientes_idingredientes = idingredientes 
JOIN etapas on etapas_idetapas=idetapas
 where etapas_idetapas 
 in(select  etapas_idetapas  from receita_has_etapas 
join receita on receita_idreceita = idreceita 
JOIN etapas on etapas_idetapas=idetapas 
Where idreceita in(select  idreceita From receita where receita.nome= '" . $receita . "'));";
                    $result = $CONEXAO->query($sql);

                    echo "<h3>" . $receita . " </h3>";

                    echo "<h3> Ingredientes :</h3><table>";
                    foreach ($result as $item) {
                        echo "<tr>";
                        echo "<td>" . $item["nome"] . " - ";
                        echo "" . $item["quantidade"] . " ";
                        echo "" . $item["unidade"] . "</td>  ";
                        /*
                          echo "<td>" . utf8_encode($item["nome"]) . " - ";
                          echo "" . utf8_encode($item["quantidade"]) . " ";
                          echo "" . utf8_encode($item["unidade"]) . "</td>  ";
                         *                         */

                        echo "</tr>";
                    }
                    echo "</table>";
                    $sql2 = "select texto, posicao from receita_has_etapas
join receita on receita_idreceita = idreceita JOIN etapas on etapas_idetapas = idetapas
Where idreceita in(select idreceita From receita where receita.nome = '" . $receita . "');
";
                    $result2 = $CONEXAO->query($sql2);

                    echo "<h3> Modo de preparo :</h3><table>";

                    foreach ($result2 as $item) {
                        echo "<tr>";
                        echo "<td>" . $item['posicao'] . " - " . $item["texto"] . " </td>";
                        // echo "<td>" . utf8_encode($item['texto']) . " </td>";
                        echo "</tr>";
                    }
                    echo "</table></br>";
                    $sql3 = " select imagem from receita
Where idreceita in(select idreceita From receita where  receita.nome = '" . $receita . "');
";

                    $result3 = $CONEXAO->query($sql3);
                    ?>
            </div>
            <div class="col-sm-6" style="">

                <?php
                foreach ($result3 as $item) {
                    $img = "<img src='uploads\\" . $item["imagem"] . "' width=450 height=350 />";
                    echo($img);
                }
                ?>

            </div>

        
    </div>

</body>

<footer class="text-center">
    <a class="up-arrow" href="#" data-toggle="tooltip" >

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