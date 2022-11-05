<?php
	include('conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>2){
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
		<form action="Db/cadastra_motorista.php" method="POST">

			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="70"><br><br>
			
			<label for="cpf">CPF:</label><br>
			<input type="cpf" name="cpf" id="cpf" maxlength="11"><br><br>

            
            <label for="carro">Carro:</label><br>
			<select name="carro" id="carro">
				<?php
					$sql = "SELECT * FROM carro ";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        echo($item);
				?>
				<option value="<?php echo $item['id']?>"><?php echo $item['placa']; ?></option>
				<?php
					}
                    
				?>
            </select><br><br>
			
            <label for="filial">Filial:</label><br>
			<select name="filial" id="filial">
				<?php
					$sql = "SELECT * FROM filial ";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        echo($item);
				?>
				<option value="<?php echo $item['id']?>"><?php echo $item['localidade']; ?></option>
				<?php
					}
                    
				?>
            </select><br><br>

			
			<button type="submit">Cadastrar</button>
		</form>
        <a href="main.php">voltar</a>
	</body>
</html>