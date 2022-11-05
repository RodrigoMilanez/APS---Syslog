<?php
	include('conexao.php');
?>
<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM motorista WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Adicionar foto de motorista</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
        <form action="Db/upload.php?id=<?php echo $dados['id']?>" method="POST" enctype="multipart/form-data">
			<input type="file" name="arquivo"><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
		
    <a href="main.php">voltar</a>
	
	</body>
</html>