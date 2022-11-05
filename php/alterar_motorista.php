<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Motoristas - Transportadora</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM motorista WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="Db/altera_motorista.php" method="POST">


			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Código:</label><br>
			<?php echo $id; ?><br><br>
			
			<label for="id_carro">Carro:</label><br>
			<select name="id_carro" id="id_carro">
				<?php
					$sql = "SELECT id, placa FROM carro";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $dados['id_carro']) { echo 'selected="selected"'; } ?>><?php echo $item['placa']; ?></option>
				<?php
					 }
				?>
			</select><br><br>
			
			<label for="id_filial">Filial:</label><br>
			<select name="id_tipo" id="id_tipo">
				<?php
					$sql = "SELECT id, localidade FROM filial";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $dados['id_filial']) { echo 'selected="selected"'; } ?>><?php echo $item['localidade']; ?>  </option>
				<?php
					}
				?>
			</select><br><br>
			
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="100" value="<?php echo $dados['nome']; ?>"><br><br>
			

            <label for="cpf">CPF:</label><br>
			<input type="text" name="cpf" id="cpf" maxlength="100" value="<?php echo $dados['cpf']; ?>"><br><br>
			
			
			
			<button type="submit">Alterar</button>
			<a href="main.php">voltar</a>
		</form>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>