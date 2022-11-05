<?php
	session_start();
	include('../conexao.php');
	

	
	$apelido = $_POST['apelido'];
	$senha = md5($_POST['senha']);
	
	$sql = "SELECT * FROM usuario WHERE apelido = '{$apelido}' AND senha = '{$senha}'";
	$query = mysqli_query($conexao, $sql);
	if($query) {
		if(mysqli_num_rows($query) == 1) {
			$item = mysqli_fetch_array($query, MYSQLI_ASSOC);
			$_SESSION['usuario'] = $item;
			header('Location: ../main.php');
		} else {
			echo '<p class="vermelho">Usuário ou senha inválida!</p>';
		}
	} 
	
	mysqli_close($conexao);
?>