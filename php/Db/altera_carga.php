<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Ordem de carga - Transportadora</title>
	</head>
	<body>
		<?php
			$id = $_POST['id'];
            $localidade = $_POST['localidade'];
            $status_ = $_POST['status_'];
			
			
			$sql = "UPDATE carga SET localidade = '{$localidade}', status_ = '{$status_}' WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
		
			if($query) {
				header('Location: ../lista_carga.php?ok=1');
			} else {
				echo 'Não foi possível alterar a carga! Erro: ' . mysqli_error($conexao);
			}
            
		?>
	</body>
</html>

<?php
	mysqli_close($conexao);
?>