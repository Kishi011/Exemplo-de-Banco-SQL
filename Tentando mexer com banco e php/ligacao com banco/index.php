<?php 

require_once 'conexao.php';
require_once 'Pessoa.php';


$pessoas = new Pessoa($mysql);

$sql = 'SELECT * FROM Pessoa, Trabalho WHERE Pessoa_idPessoa=idPessoa';
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>
            Imprimindo o Banco de Dados
        </h1>
            <?php 
                if($resultado->num_rows>0){
                    echo "<div>
                        <table class='table'>
                        <tr>
                            <td>idPessoa</td>
                            <td>Nome</td>
                            <td>Idade</td>
                            <td>Profissão</td>
                            <td>Salário</td>
                        </tr>";
                    while($row = $resultado->fetch_all()){
                        echo "<tr>
                                <td>" . $row["idPessoa"] . "</td>
                                <td>" . $row["Nome"] . "</td>
                                <td>" . $row["Idade"] . "</td>
                                <td>" . $row["Profissão"] . "</td>
                                <td>" . $row["Salário"] . "</td>
                            </tr>";
                    }
                    echo "</table>
                    </div>";
                }
                else{
                    echo "0 results";
                }                
            ?>
    </body>
</html>