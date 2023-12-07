<?php

    namespace POO\FarmaciaPHP\DAO;

    require_once('Conexao.php');

    use POO\FarmaciaPHP\DAO\Conexao;

    class Consultar{

        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $RG)
        {
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela where RG = '$RG'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["RG"] == $RG)
                    {
                        echo"<br><br>Nome:".$dados["nome"].
                        "<br>RG:".$dados["RG"].
                        "<br>Telefone".$dados["Telefone"].
                        "<br>listPlano".$dados["listplano"].
                        "<br>listFarm:".$dados["listfarm"].
                        "<br>farmacia:".$dados["farmacia"];
                    }
                }
                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do metodo
    }//fim da classe 
   
?>