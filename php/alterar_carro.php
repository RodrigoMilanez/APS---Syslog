<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Carros - Transportadora</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM carro WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="Db/altera_carro.php" method="POST">


			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Código:</label><br>
			<?php echo $id; ?><br><br>

			<label for="placa">Placa:</label><br>
			<input type="text" name="placa" id="placa" maxlength="100" value="<?php echo $dados['placa']; ?>"><br><br>
			
			<label for="modelo">Modelo:</label><br>
			<input type="text" name="modelo" id="modelo" maxlength="100" value="<?php echo $dados['modelo']; ?>"><br><br>
			

			
			<label for="id_filial">Filial:</label><br>
			<select name="id_filial" id="id_filial">
				<?php
					$sql = "SELECT id, localidade FROM filial";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $dados['id_filial']) { echo 'selected="selected"'; } ?>><?php echo $item['localidade']; ?></option>
				<?php
					 }
				?>
			</select><br><br>
			
			
			
			
			
			<button type="submit">Alterar</button>
			<a href="main.php">voltar</a>
		</form>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>