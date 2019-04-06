<?php
	session_start();
	
	require 'init.php';
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charser="utf-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">

			<script src="bootstrap-4/js/bootstrap.min.css"></script>
			<title>Sistema de Login ULTIMATE PHP</title>
		</head>
		
		<body>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Sistema de Login ULTIMATE PHP</h1>
						<hr>
					</div>
				</div>
			
			
			
				<?php if (isLoggedIn()): ?>
					<p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
				<?php else: ?>
					<p>Olá, Visitante. <a href="form-login.php" class="btn btn-primary">Login</a></p>
				<?php endif; ?>
			</div>
		<body>
	</html>
				