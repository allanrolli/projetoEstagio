<?php
session_start();
include('../conexao.php');

	// $pesquisar = $_POST['pesquisar'];

	// pesquisa
	$pesquisa = $_POST['pesquisa'];

	// criar condições
	if($pesquisa == "datashow")
	{
		$result_reservas = "SELECT * FROM datashow_reserva";
	} 
	elseif($pesquisa == "sala_de_aula")
	{
		$result_reservas = "SELECT * FROM sala_de_aula ";
	} 
	elseif($pesquisa == "vhs")
	{
		$result_reservas = "SELECT * FROM fita_vhs ";
	} 
	elseif($pesquisa == "dvd")
	{
		$result_reservas = "SELECT * FROM dvd ";
	}
	elseif($pesquisa == "radio")
	{
		$result_reservas = "SELECT * FROM radio ";
	} 
	elseif($pesquisa == "extensao")
	{
		$result_reservas = "SELECT * FROM extensao ";
	} 
	elseif($pesquisa == "equip_audio")
	{
		$result_reservas = "SELECT * FROM equipamento_audio ";
	}
	else {
		$result_reservas = "SELECT * FROM equipamento_video ";
	}

	// 
	$resultado_reservas = mysqli_query($conexao, $result_reservas);


	echo '<table style="width: 640px;margin: 0 auto; background: white;font-size: 16px;">';
	echo '<tr>';
		echo '<td>Reserva</td>';
		echo '<td>Data</td>';
		echo '<td>Nome</td>';
		echo '<td>Setor</td>';
		echo '<td>Ramal</td>';
		echo '<td>Retirar</td>';
	echo '</tr>';


	while($rows_reservas = mysqli_fetch_array($resultado_reservas))
	
	{ if ($rows_reservas[8] != 0) continue;
		if ($pesquisa == "sala_de_aula") {
		echo '<tr>';
			echo '<td>'. $rows_reservas[0] .'</td>';
			echo '<td>'. date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . $rows_reservas[5].'</td>';
			echo '<td>'. $rows_reservas[2] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
			echo '<td>'. '<a href="" class="botao_dev_ret">X</a> '.'</td>';

		echo '</tr>';
		
		
	}
	else{
		echo '<tr>';
			echo '<td>'. $rows_reservas[0] .'</td>';
			echo '<td>'. date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . date('H:i', strtotime($rows_reservas[2] )) .'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[5] .'</td>';
			echo '<td>'. '<a href="" class="botao_dev_ret">X</a> '.'</td>';

		echo '</tr>';
		}
	}

	echo '</table>';

    
?>