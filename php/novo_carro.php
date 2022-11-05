<?php
	include('conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>2 ){
        header('Location: main.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar novo carro</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_carro.php" method="POST">

			<label for="placa">Placa:</label><br>
			<input type="text" name="placa" id="placa" maxlength="70"><br><br>
			
			<label for="modelo">Modelo:</label><br>
			<input type="modelo" name="modelo" id="modelo" maxlength="70"><br><br>

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
        <br>
        <a href="main.php">voltar</a>
	</body>
</html>