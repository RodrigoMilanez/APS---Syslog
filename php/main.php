<?php
	include('ler_session.php');
	include('conexao.php');
	if ($_SESSION['usuario']['permissao']<1){
        header('Location: main.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Atividades</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
	<?php
		if ($_SESSION['usuario']['permissao']==1){
			echo "Você está logado como administrador!";
		}
	?>
	<h1>Olá <?php echo $_SESSION['usuario']['apelido']; ?>!</h1>
	
		<?php
			$sql = "SELECT * FROM motorista AS m 
            JOIN carro AS c ON m.id_carro = c.id 
            JOIN carga AS t ON m.id = t.id_motorista WHERE t.status_ = 'A' ";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
       <h1>Painel de atividades:</h1>
		<table>
			<thead>
				<tr>
					<th><a href="lista_motorista.php">Motorista</a></th>
                    <th><a href="lista_carro.php">Carro</a></th>
                    <th><a href="lista_carga.php">Carga</a></th>
                    <th>Com destino a</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['placa']; ?></td>
                    <td><?php echo $item['produto']; ?></td>
                    <td><?php echo $item['destino']; ?></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="cadastrar_motorista.php">Cadastrar novo motorista</a></th>
					<th><a href="novo_carro.php">Cadastrar novo carro</a></th>
					<th><a href="nova_carga.php" span="2">Criar nova ordem de carga</a> </th>
					<th><?php
						if ($_SESSION['usuario']['permissao']==1){
							echo "<a href=\"adm.php\">Entrar na área de adm</a>";
						}
					?></th>
				</tr>
			</tbody>
            
		</table>
        <li><a href="index.php">voltar</a></li>
		<li><a href="sair.php">Sair</a></li>
		<?php
			}
		?>
		
	</body>
</html>
<?php
	mysqli_close($conexao);
?>