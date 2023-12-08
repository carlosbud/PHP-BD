<?php
$conexao = mysqli_connect("localhost", "root", "", "gerjogos", 3306);

  
$acao = $_POST['acao'];

   

switch($acao) {
    case 'inserir':
         
        $modalidade = $_POST['modalidade'];
        $datahora = $_POST['data'];
        $qtd = $_POST['quantidade'];
        $sexo = $_POST['sexo'];
        
        $sql = "INSERT INTO jogos VALUES ('', '$modalidade', '$datahora', '$qtd', '$sexo')";
        header('location: index.php'); 

        if (mysqli_query($conexao, $sql)) {
            
            echo "O jogo $modalidade foi inserido com sucesso em nossas base de dados!";
        } else {
            
            echo 'Erro: '. $sql. '<br>'. mysqli_error($conexao);
        }
        break;
    
    case 'excluir':

        
    if(!empty($_GET['id']))
    {
        

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM jogos WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM jogos WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: jogos.php');
    break;


    case 'editar':
        
        $id = $_POST['id'];
        $modalidade = $_POST['modalidade'];
        $datahora = $_POST['data'];
        $qtd = $_POST['quantidade'];
        $sexo = $_POST['sexo'];
        
        
        $sqlInsert = "UPDATE jogos 
        SET modalidade='$modalidade',datahora='$datahora',quantidade='$qtd',sexo='$sexo'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
        header('Location: jogos.php');
    
    
       
        
    break;
    

}
?>