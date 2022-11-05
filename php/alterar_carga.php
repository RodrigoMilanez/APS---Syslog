<?php
	include('conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>2 && $_SESSION['usuario']['permissao'] < 4){
        header('Location: main.php');
    }
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
			<label>Alterando carga de código:</label><br>
			<?php echo $id; ?><br><br>

			<label for="destino">Localidade Atual:</label><br>
			<input type="text" name="localidade" id="localidade" maxlength="100"><br><br>
			
			<label for="status_">Atividade:</label><br>
			<input type="radio" id="status_" name="status_" value='A'>
			<label for="status_">Ativa</label><br>
			
			<input type="radio" id="status_" name="status_" value='F'>
			<label for="status_">Finalizada</label><br>
			
			<input type="radio" id="status_" name="status_" value='C'>
			<label for="status_">Cancelada</label><br>
			<br><br>
			

			
			<button type="submit">Alterar</button> <br><br><br>
			<a href="main.php">voltar</a>
		</form>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>