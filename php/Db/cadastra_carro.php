<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar Carro</title>
	</head>
	<body>
		<?php
			$placa     = $_POST['placa'];
			$filial    = $_POST['filial'];
			$modelo    = $_POST['modelo'];
			
			$sql = "INSERT INTO carro(placa, id_filial, modelo) VALUES ('{$placa}', '{$filial}', '{$modelo}')";
			$query = mysqli_query($conexao, $sql);
			
			if($query) {
				echo 'Carro cadastrado com sucesso!';
			} else {
				echo 'Não foi possível cadastrar o Carro! Erro: ' . mysqli_error($conexao);
			}
		?>
        <a href="../main.php">Voltar</a>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>