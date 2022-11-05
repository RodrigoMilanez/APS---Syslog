<!DOCTYPE html>
<html>
	<head>
		<title>Entrar - Transportadora</title>
		
		<link rel="stylesheet" href="assests/style.css">
		<style type="text/css">
			.error {
				color: red;
			}
		</style>
	</head>
	<body>
		<form action="Db/login_db.php" method="POST">
			<label for="apelido">Apelido:</label><br>
			<input type="text" name="apelido" id="apelido" maxlength="20"><br><br>
			
			<label for="senha">Senha:</label><br>
			<input type="password" name="senha" id="senha" maxlength="20"><br><br>
			
			<button type="submit">Ok</button>
		</form>
	</body>
</html>