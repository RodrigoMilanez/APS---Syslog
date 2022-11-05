<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar nova ordem de carro</title>
	</head>
	<body>
		<?php
			$produto    = $_POST['produto'];
			$destino    = $_POST['destino'];
            $motorista = $_POST['motorista'];

			
			$sql = "INSERT INTO  carga(produto, id_motorista, destino, status_) 
            VALUES ('{$produto}','{$motorista}', '{$destino}', 'A')";
			
            
            
            $query = mysqli_query($conexao, $sql);
			
			if($query) {
				header('Location: ../lista_carga.php?ok=1');
			} else {
				echo 'Não foi possível cadastrar a carga! Erro: ' . mysqli_error($conexao);
			}
		?>
        <a href="../main.php">Voltar</a>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>