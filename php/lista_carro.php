<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Frota</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM carro";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		<a href="main.php">< Página principal</a>
       <h1>Painel de atividades:</h1>
		<table>
			<thead>
				<tr>
					<th>Id</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['modelo']; ?></td>
                    <td><?php echo $item['placa']; ?></td>
                    <td><a href="Db/excluir_carro.php?id=<?php echo $item['id']?>">Excluir carro da frota</a></td>
					<td><a href="alterar_carro.php?id=<?php echo $item['id']?>">Alterar carro da frota</a></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="novo_carro.php">Cadastrar novo carro</a></th>
			</tbody>
            
		</table>
        
		<?php
			}
		?>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>