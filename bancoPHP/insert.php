<?php 
	require_once 'conexao.php';
?>

<html>
	<head>
	
	</head>
	
	<body>
	<h1>Inserindo no banco de dados</h1>
	<form action='index.php' method='post'>
		<div>
			<label>Nome:</label>
			<input type='text' name='nome'>
		</div>
		<div>
			<label>Idade:</label>
			<input type='number' name='idade'>
		</div>
		<div>
			<label>Altura:</label>
			<input type='number' name='altura'>
		</div>
		<div>
			<label>Peso:</label>
			<input type='number' name='peso'>
		</div>
		<br>
		<div>
			<button type='submit'>Adicionar</button>
		</div>
	</form>
	</body>
</html>