<?php
	include('../conexao.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM motorista WHERE id = {$id}";
	$query = mysqli_query($conexao, $sql);
	if($query) {
		header('Location: ../lista_motorista.php?ok=1');
	} else {
		header('Location:  lista_motorista.php?error=' . mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>