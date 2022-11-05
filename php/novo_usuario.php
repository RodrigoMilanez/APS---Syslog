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
		<title>Transportadora - Cadastrar Novo motorista</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_usuario.php" method="POST">

			<label for="usuario">Usuário:</label><br>
			<input type="text" name="usuario" id="usuario" maxlength="70"><br><br>
			
			<label for="senha">Senha:</label><br>
			<input type="password" name="senha" id="senha" maxlength="70"><br><br>

			<label for="permissao">Permissão:</label><br>
			<input type="radio" id="permissao" name="adm" value="1">
			<label for="adm">Administrador</label><br>
			<input type="radio" id="permissao" name="adm" value="2">
			<label for="adm">Moderador</label><br>
			<input type="radio" id="permissao" name="adm" value="3">
			<label for="adm">Atendente</label><br>
			<input type="radio" id="permissao" name="adm" value="4">
			<label for="adm">Motorista</label><br>
			<br>
			
			<button type="submit">Cadastrar</button>
		</form>
        <a href="main.php">voltar</a>
	</body>
</html>