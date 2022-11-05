<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - ordens de carga</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM carga";
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
                    <th>Produto</th>
                    <th>Destino</th>
					<th>Status <br>C-concluído,<br> A-Ativo</th>
					<th>Localidade atual</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['produto']; ?></td>
                    <td><?php echo $item['destino']; ?></td>
					<td><?php echo $item['status_']; ?></td>
					<td><?php echo $item['localidade']; ?></td>
                    <td><a href="Db/excluir_carga.php?id=<?php echo $item['id']?>">Excluir Ordem</a></td>
					<td><a href="alterar_carga.php?id=<?php echo $item['id']?>">Alterar Ordem</a></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="nova_carga.php">Criar nova ordem de carga</a></th>
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