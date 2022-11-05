<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Motoristas</title>
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM motorista AS m";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		<a href="main.php">< Página principal</a>
       <h1>Painel de Motoristas:</h1>
		<table>
			
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><img src="img/<?php echo $item['foto']; ?>" alt="pfp" title="pfp"></td>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['cpf']; ?></td>
                    <td><a href="Db/excluir_motorista.php?id=<?php echo $item['id']?>">Excluir motorista</a></td>
					<td><a href="alterar_motorista.php?id=<?php echo $item['id']?>">Alterar motorista</a></td>
					<td><a href="add_pfp.php?id=<?php echo $item['id']?>">inserir foto de perfil</a></td>
					
				</tr>
				<?php
					}
				?>
				<tr>
					<th></th>
					<th><a href="cadastrar_motorista.php">Cadastrar novo motorista</a></th>
				</tr>
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