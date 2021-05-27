<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<!DOCTYPE html>
<html>
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
            font-family:"Helvetica";}
        div{
            width: auto;
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }

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
        #k:focus {
            background-color: #ffa726;}

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

        <div class="container" style="margin-top:70px;min-height: 500px;">

            <label><p>Veja aqui algumas receitas possíveis para o preparo com base nos ingredientes informados e talvez mais alguns.</p></label><br>


            <?php
            include "config.php";

            $i1 = $_POST["text1"];
            $i2 = $_POST["text2"];
            $i3 = $_POST["text3"];
            $i4 = $_POST["text4"];
            $i5 = $_POST["text5"];
            $i6 = $_POST["text6"];
            $i7 = $_POST["text7"];
            $i8 = $_POST["text8"];
            $i9 = $_POST["text9"];
            $i10 = $_POST["text10"];

            if (!isset($nome)) {
                $sql = "select nome,rendimento,tempo from receita
where idreceita in(
    Select idreceita From receita 
join receita_has_ingredientes on idreceita = receita_idreceita 
JOIN ingredientes on idingredientes=ingredientes_idingredientes
Where idingredientes in ( select idingredientes From ingredientes Where";

                for ($i = 1; $i <= 10; $i++) {
                    $iAux = "i" . $i;
                    if (trim($$iAux) != '') {
                        if ($i != 1) {
                            $sql .= " or nome = '" . $$iAux . "'";
                        } else {
                            $sql .= " nome = '" . $$iAux . "'";
                        }
                    }
                }$sql .= "))
";
                $sql .= ";";
            } else {
                $sql = "select nome,tempo,rendimento from receita
where idreceita in(
    Select idreceita From receita 
join receita_has_ingredientes on idreceita = receita_idreceita 
JOIN ingredientes on idingredientes=ingredientes_idingredientes
Where idingredientes in ( select idingredientes From ingredientes Where";

                for ($l = 1; $l <= 10; $l++) {
                    $iAux = "i" . $l;
                    if (trim($$iAux) != '') {
                        if ($l != 1) {
                            $sql .= " OR nome = '" . $$iAux . "'";
                        } else {
                            $sql .= " nome = '" . $$iAux . "'";
                        }
                    }
                }$sql .= "))";

                $sql .= "and idreceita in (select idreceita 
              from receita
              where idreceita not in
              (select query1.idreceita from
              (select distinct(receita.idreceita), eletrodomestico.ideletrodomestico
              From etapas join etapas_has_eletrodomestico on etapas.idetapas=etapas_idetapas
              JOIN eletrodomestico on  ideletrodomestico =eletrodomestico_ideletrodomestico
              join receita_has_etapas on receita_has_etapas.etapas_idetapas = etapas.idetapas
              join receita on receita_has_etapas.receita_idreceita = receita.idreceita
              ) as query1 left join
              (
              select eletrodomestico_has_usuario.ideletrodomestico, eletrodomestico_has_usuario.idusuario
              From eletrodomestico
              join eletrodomestico_has_usuario on eletrodomestico.ideletrodomestico =eletrodomestico_has_usuario.ideletrodomestico
              JOIN usuario on usuario.idusuario=eletrodomestico_has_usuario.idusuario
              Where eletrodomestico_has_usuario.idusuario=" . $id . "
              )as query2 on query1.ideletrodomestico = query2.ideletrodomestico
              where query2.ideletrodomestico is NULL))";
                $sql .= ";";
            }
            // echo($sql);
            $result = $CONEXAO->query($sql);
            ?>
            <div class="w3-main w3-content w3-padding" style="max-width:1200px;max-height:300px">
                <div class='w3-row-padding w3-padding-16 w3-center'id="food" >

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {


                        echo "   <div class='w3-quarter'> <h3><a href = 'receitaprocessa.php?receita=" . $row["nome"] . "'>" . $row["nome"] . "</a></h3>
                                <p>Tempo: " . $row["tempo"] . " minutos</p>
                      <p>Rendimento: " . $row["rendimento"] . " porções
                          </p>     
                        
                        <br/> </div>";
                    }
                    ?>

                </div>
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
