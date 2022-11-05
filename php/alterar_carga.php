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
			$sql = "SELECT * FROM carga WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="Db/altera_carga.php" method="POST">


			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Código:</label><br>
			<?php echo $id; ?><br><br>

			<label for="produto">Produto:</label><br>
			<input type="text" name="produto" id="produto" maxlength="100" value="<?php echo $dados['produto']; ?>"><br><br>
			
			
			<label for="id_motorista">Motorista Responsável:</label><br>
			<select name="id_motorista" id="id_motorista">
				<?php
					$sql = "SELECT id, nome FROM motorista";
					$query = mysqli_query($conexao, $sql);
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $dados['id_motorista']) { echo 'selected="selected"'; } ?>><?php echo $item['nome']; ?></option>
				<?php
					 }
				?>
			</select><br><br>
			
			<label for="destino">Destino:</label><br>
			<input type="text" name="destino" id="destino" maxlength="100" value="<?php echo $dados['destino']; ?>"><br><br>
			
			<label for="status_">Atividade (Digite A para ativo, C para concluído):</label><br>
			<input type="text" name="status_" id="status_" maxlength="100" value="<?php echo $dados['status_']; ?>"><br><br>
			

			
			
			<button type="submit">Alterar</button>
			<a href="main.php">voltar</a>
		</form>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>