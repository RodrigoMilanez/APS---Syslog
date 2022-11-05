<?php
	include('../conexao.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM carga WHERE id = {$id}";
	$query = mysqli_query($conexao, $sql);
	if($query) {
		header('Location: ../lista_carga.php?ok=1');
	} else {
		header('Location:  lista_carga.php?error=' . mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>