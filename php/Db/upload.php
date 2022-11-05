<?php
include('../conexao.php');
	$tmp  = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	
			$id = $_GET['id'];
			$sql = "UPDATE motorista SET foto = '{$nome}' WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($query, MYSQLI_ASSOC);

	
	if(move_uploaded_file($tmp, '../img/' . $nome)) {
		echo 'Upload realizado com sucesso!';
		header('Location:../lista_motorista.php');
	} else {
		echo 'Não foi possível realizar o Upload!';
	}
	
?>