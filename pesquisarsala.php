<?php
session_start();
include('conexao.php');

	 $pesquisar = $_POST['pesquisar'];

	// pesquisa
	$pesquisa = $_POST['pesquisa'];

	// criar condições
	if($pesquisa == "data")
	{
		$result_reservas = "SELECT * FROM sala_de_aula WHERE data LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "turno")
	{
		$result_reservas = "SELECT * FROM sala_de_aula WHERE turno LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "nome")
	{
		$result_reservas = "SELECT * FROM sala_de_aula WHERE nome LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "setor")
	{
		$result_reservas = "SELECT * FROM sala_de_aula WHERE setor LIKE '%$pesquisar%'";
	}
	else {
		$result_reservas = "SELECT * FROM sala_de_aula WHERE ramal LIKE '%$pesquisar%'";
	}


$resultado_reservas = mysqli_query($conexao, $result_reservas);
// echo "<pre>";
// 		print_r($resultado_reservas);
// exit;

	echo '<table style="width: 640px;margin: 0 auto; background: white;">';
		echo '<tr>';
			echo '<td>Data</td>';
			echo '<td>Turno</td>';
			echo '<td>Nome</td>';
			echo '<td>Setor</td>';
			echo '<td>Ramal</td>';
		echo '</tr>';
	while($rows_reservas = mysqli_fetch_array($resultado_reservas))
	{
		if ($rows_reservas[6] != 0 && $rows_reservas[8] != 0) continue;

		echo '<tr>';
			echo '<td>'.date('d/m/Y', strtotime($rows_reservas[1] )) .'</td>';
			echo '<td>'. $rows_reservas[5] .'</td>';
			echo '<td>'. $rows_reservas[2] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
		echo '</tr>';
	}
	echo '</table>';
    
?>