<?php 

require_once 'conexao.php';

$resultados = $conn->query("SELECT * FROM Pessoa");

?>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_REQUEST["nome"];
		$idade = $_REQUEST["idade"];
		$altura = $_REQUEST["altura"];
		$peso = $_REQUEST["peso"];
		
		$sql = "INSERT INTO $dbname(Nome, Idade, Altura, Peso) VALUES
		('$nome', $idade, $altura, $peso);";
		
		if(mysqli_query($conn, $sql)){
			echo "Dados Adicionados";
		}
	}
?>

<h1>Imprimindo resultados</h1>
<?php 
	if($resultados->num_rows>0){
?>
<div>
	<table width='100%' border='1'>
		<tr>
			<td>id</td>
			<td>Nome</td>
			<td>Idade</td>
			<td>Altura</td>
			<td>Peso</td>
		</tr>
	<?php
		while($row = $resultados->fetch_assoc()){
				echo "<tr>";
					echo "<td>". $row["idPessoa"] ."</td>";
					echo "<td>". $row["Nome"] ."</td>";
					echo "<td>". $row["Idade"] ."</td>";
					echo "<td>". $row["Altura"] ."</td>";
					echo "<td>". $row["Peso"] ."</td>";
				echo "</tr>";
			}
	?>
	</table>
</div>

<?php
	} else{
			echo "0 results";
		}
?>

<br>
<div>
	<button><a href='insert.php'>Adicionar Pessoa</a></button>
</div>

