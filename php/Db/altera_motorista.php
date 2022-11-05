<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Motoristas - Transportadora</title>
	</head>
	<body>
		<?php
			$id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
			$id_carro = $_POST['id_carro'];
			$id_filial = $_POST['id_filial'];
			
			
			$sql = "UPDATE motorista SET nome = '{$nome}', cpf = '{$cpf}', id_carro = '{$id_carro}' , id_filial = '{$id_filial}' WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
		
			if($query) {
				header('Location: ../lista_motorista.php?ok=1');
			} else {
				echo 'Não foi possível alterar o motorista! Erro: ' . mysqli_error($conexao);
			}
            
		?>
	</body>
</html>

<?php
	mysqli_close($conexao);
?>