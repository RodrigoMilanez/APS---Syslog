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
            $produto = $_POST['produto'];
            $id_motorista = $_POST['id_motorista'];
            $destino = $_POST['destino'];
            $status_ = $_POST['status_'];
			
			
			$sql = "UPDATE carga SET produto = '{$produto}', id_motorista = '{$id_motorista}', destino = '{$destino}', status_ = '{$status_}' WHERE id = {$id}";
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