<!DOCTYPE html>
<html>
<head>
	<title> Formulário</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="formulario.php">
		<p> Nome: <input type="text" name="nome" id="nome"> </p>
		<p> Telefone: <input type="number" name="telefone" id="telefone"> </p> 
		<input type="submit" name="Enviar">

	</form>
</body>
</html>
 <?php

	session_start();
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];

	$_SESSION['nome'] = $nome;
	$_SESSION['telefone'] = $telefone;
?>

<a href="visualizar.php"> Clique aqui para visualizar </a>
 <?php
	session_start();
	
	echo "Nome: ". $_SESSION['nome'];
	echo "<br> Telefone: ". $_SESSION['telefone'];
	session_unset();
	session_destroy();

?>
<br>
<a href="formulario.html"> Cadastrar novamente </a>