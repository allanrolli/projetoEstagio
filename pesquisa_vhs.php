<?php
session_start();
include('conexao.php');

	 $pesquisar = $_POST['pesquisar'];

	// pesquisa
	$pesquisa = $_POST['pesquisa'];

	// criar condições
	if($pesquisa == "data")
	{
		$result_reservas = "SELECT * FROM fita_vhs WHERE data LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "hora")
	{
		$result_reservas = "SELECT * FROM fita_vhs WHERE hora LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "nome")
	{
		$result_reservas = "SELECT * FROM fita_vhs WHERE nome LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "setor")
	{
		$result_reservas = "SELECT * FROM fita_vhs WHERE setor LIKE '%$pesquisar%'";
	}
	else {
		$result_reservas = "SELECT * FROM fita_vhs WHERE ramal LIKE '%$pesquisar%'";
	}

	$resultado_reservas = mysqli_query($conexao, $result_reservas);
// echo "<pre>";
// 		print_r($resultado_reservas);
// exit;

	echo '<table style="width: 640px;margin: 0 auto; background: white;">';
		echo '<tr>';
			echo '<td>Data</td>';
			echo '<td>Nome</td>';
			echo '<td>Setor</td>';
			echo '<td>Ramal</td>';
		echo '</tr>';
	while($rows_reservas = mysqli_fetch_array($resultado_reservas))
	{
		if ($rows_reservas[6] != 0 && $rows_reservas[8] != 0) continue;

		echo '<tr>';
			echo '<td>'.date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . date('H:i', strtotime($rows_reservas[2] )).'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[5] .'</td>';
		echo '</tr>';
	}
	echo '</table>';

    
?>