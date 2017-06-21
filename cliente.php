<?php
	require_once __DIR__.'/vendor/autoload.php';
	$cliente = Cliente::listar($_GET['usuario_id']);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bem Vindo !</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <a href="index.php" style="text-align: right;"><h4>Sair  &nbsp;&nbsp;&nbsp;</h4></a>
		</nav>
		<div style="margin-top: 2%">
			<h2 style="text-align: center;">Seus dados:</h2>
			<ul>
				<br>
				<hr>
					<p><strong>Nome:</strong>  <?php echo $cliente['nome'] ?> </p>
					<p><strong>Telefone:</strong> <?php echo $cliente['telefone'] ?> </p>
					<p><strong>Email:</strong> <?php echo $cliente['email'] ?> </p>
				<hr>
			</ul>
			<h4 style="text-align: center;">&reg; Analise e Desenvolvimento de Sistemas - Teste de Segurança IFTM</h4>
		</div>
	</body>
</html>