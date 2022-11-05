<?php
	include('conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>1){
        header('Location: main.php');
    }
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Página do adm</title>
		<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready( function(){
				$('button').on('click', function (){
					var id = $(this).closest('td').attr('id');
					var ele = $(this).closest('tr');
					if(confirm('Tem certeza que você quer excluir o usuario?')){
						$.ajax({
							url:'Db/excluir_usuario.php?id='+ id,
							type:'GET',
					}).done(function(retorno){
						if(retorno){
							ele.remove();
						}

					})
				}
				});

			});
		</script>
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM usuario AS u";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		<a href="main.php">< Página principal</a>
       <h1>Painel de Administrador:</h1>
		<table>
			
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['apelido']; ?></td>
                    <td><?php echo $item['permissao']; ?></td>
                    <td id="<?php echo $item['id']; ?>"><button type="button" id="excluir" class="<?php echo $item['id']?>">Excluir Usuario</button>
					<td><a href="alterar_usuario.php?id=<?php echo $item['id']?>">Alterar usuario</a></td>
					<td><a href="Db/promove_usuario.php?id=<?php echo $item['id']?>">Promover para administrador</a></td>
					
				</tr>
				<?php
					}
				?>
				<tr>
					<th></th>
					<th><a href="novo_usuario.php">Cadastrar novo usuario</a></th>
					<th><a href="nova_filial.php">Cadastrar nova filial</a></th>
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