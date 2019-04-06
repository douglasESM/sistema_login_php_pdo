<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">

			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
			<script src="bootstrap-4/js/bootstrap.min.css"></script>

			<title>Login | Sistema de Login ULTIMATE PHP</title>
		</head>
		
		<body>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 alert"></div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4 alert alert-secondary" >
						<h1> Login </h1>
						<hr>
						<form action="login.php" method="POST" class="was-validated">
							<div class="form-group">
								<label for="email"> Email: </label>
								<input class="form-control" type="email" name="email" id="email" placeholder="Informe o email" required>

								<div class="valid-feedback">valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>							
							
							<div class="form-group">
								<label for="password">Senha: </label>
								
								<input class="form-control" type="password" name="password" id="password" placeholder="Informe a senha" required>

								<div class="valid-feedback">valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>						
							
							<br> 
							
							<input class="btn btn-primary" type="submit" value="Entrar">
							<a class="btn btn-info" value="Voltar" href="index.php">Voltar</a>
						</form>
					</div>
					<div class="col-sm-4"></div>
				</div>
			</div>
		</body>
	</html>