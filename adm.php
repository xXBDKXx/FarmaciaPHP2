<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>ADM</title>
</head>
<body>
    <?php
        require_once('DAO/Conexao.php');
        require_once('DAO/Consultar.php');
        use POO\FarmaciaPHP\DAO\Consultar;
        use POO\FarmaciaPHP\DAO\Conexao;
    ?>
    <form method="POST">

        <label>RG: </label>
            <input type="text" name="tRG" id="tRG"/>
            <br><br>
        <button> Consultar
            <?php
                $conexao = new Conexao;
                $consultar = new Consultar();
                $consultar->ConsultarIndividual($conexao, "info", $_POST['tRG']);
            ?>
        </button>

        <button id="Voltar"> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>