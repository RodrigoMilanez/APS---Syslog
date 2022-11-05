<?php
	include('../conexao.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM carro WHERE id = {$id}";
	$query = mysqli_query($conexao, $sql);
	if($query) {
		header('Location: ../lista_carro.php?ok=1');
	} else {
		header('Location:  lista_carro.php?error=' . mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>