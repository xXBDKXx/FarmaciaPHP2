<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Cadastro Farmacia D</title>
</head>
<body>
    <?php include 'cadastro.php';
    
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    
    use POO\FarmaciaPHP\DAO\Conexao;
    use POO\FarmaciaPHP\DAO\Inserir;

    ?>
    <form method="POST">
        <img id="img" name="img" src="Umbrella1.png">
        <h1>Farmácia D</h1>

        <label>Plano de Saúde ou Uso de Farmacia Popular: </label>
        <input  type="checkbox" name="tSP" value="True" id="tSP" onchange="submit()"> Sim </input>
        <input type="checkbox" name="tSP" value="False" id="tNP" onchange="submit()"> Não </input>

        <br><Br>
        <?php if($_POST['tSP'] == "True"){ ?>
            <Label>Qual Plano de Saúde?:</Label>
            <select name="listPlano" id="listPlano">
                <option value="0">Nenhum(a)</option>
                <option value="1">UniMed</option>
                <option value="2">Bradesco</option>
                <option value="3">Cartão de Todos</option>
                <option value="4">Notre Dame</option>
            </select>

            <label>Qual Farmacia Popular?:</label>
            <select name="listFarm" id="listFarm">
                <option value="0">Nenhum(a)</option>
                <option value="1">FarmaConde</option>
                <option value="2">Drogaria São Paulo</option>
                <option value="3">UltraFarma</option>
                <option value="4">BiFarma</option>
            </select>
        <?php };?>
        <br><Br>

        <label>Nome: </label>
        <input type="text" name="tNome" id="tNome"/>
        <br><br>

        <label>RG: </label>
        <input type="text" name="tRG" id="tRG"/>
        <br><br>

        <label>Telefone: </label>
        <input type="text" name="tTelefone" id="tTelefone"/>
        <br><br>

        <button id="button"> Cadastrar 
        <?php
            $conexao = new Conexao();
            $inserir = new Inserir();
            $inserir->Insert($conexao, "info", $_POST['tNome'], $_POST['tRG'], $_POST['tTelefone'], $_POST['listPlano'], $_POST['listFarm']);
        ?>
        </button>

        <br><br>
        <button id="Voltar"> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>