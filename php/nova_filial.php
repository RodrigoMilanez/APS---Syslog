<?php
	include('conexao.php');
    include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>1){
        header('Location: main.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar Nova localidade</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_filial.php" method="POST">

			<label for="localidade">Localidade:</label><br>
			<input type="text" name="localidade" id="localidade" maxlength="70"><br><br>
			
			
			<button type="submit">Cadastrar</button>
		</form>
        <a href="main.php">voltar</a>
	</body>
</html>