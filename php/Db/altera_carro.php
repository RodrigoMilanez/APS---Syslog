<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar carro - Transportadora</title>
	</head>
	<body>
		<?php
			$id = $_POST['id'];
            $placa = $_POST['placa'];
            $modelo = $_POST['modelo'];
			$id_filial = $_POST['id_filial'];
			
			
			$sql = "UPDATE carro SET placa = '{$placa}', modelo = '{$modelo}', id_filial = '{$id_filial}' WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
		
			if($query) {
				header('Location: ../lista_carro.php?ok=1');
			} else {
				echo 'Não foi possível alterar o carro! Erro: ' . mysqli_error($conexao);
			}
            
		?>
	</body>
</html>

<?php
	mysqli_close($conexao);
?>