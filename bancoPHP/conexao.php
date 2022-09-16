<?php 
	$servername	=	'localhost';
	$username	=	'root';
	$pwd		=	'';
	$dbname		=	'exemplo';
	
	$conn = new mysqli($servername, $username, $pwd, $dbname);
	
	if(!$conn){
		echo "Falha na conexão";
	} else{
		echo "Conectado";
	}
?>