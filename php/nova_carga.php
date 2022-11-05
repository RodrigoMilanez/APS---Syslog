<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar novo carro</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_carga.php" method="POST">

			<label for="produto">Produto a ser transportado:</label><br>
			<input type="produto" name="produto" id="produto" maxlength="70"><br><br>
			
			<label for="destino">Destino (onde o produto deve ser entregue):</label><br>
			<input type="destino" name="destino" id="destino" maxlength="70"><br><br>

            <label for="motorista">Motorista responsável:</label><br>
			<select name="motorista" id="motorista">
				<?php
					$sql = "SELECT * FROM motorista ";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        echo($item);
				?>
				<option value="<?php echo $item['id']?>"><?php echo $item['nome']; ?></option>
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