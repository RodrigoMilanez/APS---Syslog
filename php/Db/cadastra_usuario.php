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
			$usuario     = $_POST['usuario'];
			$senha    = md5($_POST['senha']);
			$adm    = $_POST['adm'];
            
		$sql = "INSERT INTO usuario(apelido, senha, permissao) VALUES ('{$usuario}', '{$senha}', '{$adm}')";
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