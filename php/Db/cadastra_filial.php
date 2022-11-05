<?php
	include('../conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>1){
        header('Location: main.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar Usuario</title>
	</head>
	<body>
		<?php
			$localidade   = $_POST['localidade'];
            
		$sql = "INSERT INTO filial(localidade) VALUES ('{$localidade}')";
			$query = mysqli_query($conexao, $sql);
			
			if($query) {
				header('Location: ../adm.php');
			} else {
				echo 'Não foi possível cadastrar o Usuario! Erro: ' . mysqli_error($conexao);
			}
		?>
		<a href="../main.php">Voltar</a>
	</body> 
</html>
<?php
	mysqli_close($conexao);
?>