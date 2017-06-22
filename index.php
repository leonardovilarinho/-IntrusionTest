<?php session_start(); session_destroy(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de clientes</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div style="text-align: center; margin-top: 25px ">
		<div style="text-align: center;"><h2>Login</h2></div>
			<form action="src/index.php?objeto=usuario&metodo=logar" method="post" class="form-inline">
				<div class="form-group">
					<label>Usuário:</label>
					<input class="form-control" type="text" name="usuario">
				</div>
				<div class="form-group" style="margin-left: 10px">
					<label>Senha:</label>
					<input class="form-control" type="password" name="senha">
				</div>
				<input class="btn btn-default" type="submit" value="Entrar">
			</form>

			<!-- <?php if(isset($_GET['mensagem'])): ?>
				<h4><?php echo $_GET['mensagem'] ?></h4>
			<?php endif ?> -->
		</div>
		<hr>
		<h4 style="text-align: center;">&reg; Analise e Desenvolvimento de Sistemas - Teste de Segurança IFTM</h4>
	</body>
</html>