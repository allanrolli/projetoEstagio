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
		echo '<td>Devolver</td>';
	echo '</tr>';


	while($rows_reservas = mysqli_fetch_array($resultado_reservas))
	
	{ if ($rows_reservas[8] != 0 && $rows_reservas[9] != 1) continue;
		if ($pesquisa == "sala_de_aula") {
		echo '<tr>';
			echo '<td>'. $rows_reservas[0] .'</td>';
			echo '<td>'. date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . $rows_reservas[5].'</td>';
			echo '<td>'. $rows_reservas[2] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
			if ($pesquisa == "sala_de_aula")
				echo '<td>'. '<a href="?devolver_sala_de_aula='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';

		echo '</tr>';
		
		
	}
	else{
		echo '<tr>';
			echo '<td>'. $rows_reservas[0] .'</td>';
			echo '<td>'. date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . date('H:i', strtotime($rows_reservas[2] )) .'</td>';
			echo '<td>'. $rows_reservas[3] .'</td>';
			echo '<td>'. $rows_reservas[4] .'</td>';
			echo '<td>'. $rows_reservas[5] .'</td>';
                      
			if ($pesquisa == "datashow")
				echo '<td>'. '<a href="?devolver_datashow='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';

 			if ($pesquisa == "dvd")
				echo '<td>'. '<a href="?devolver_dvd='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';
			
			if ($pesquisa == "vhs")
				echo '<td>'. '<a href="?devolver_vhs='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';

 			if ($pesquisa == "equip_audio")
				echo '<td>'. '<a href="?devolver_equipamento_audio='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';
			
			if ($pesquisa == "equip_video")
				echo '<td>'. '<a href="?devolver_equipamento_video='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';

			if ($pesquisa == "radio")
				echo '<td>'. '<a href="?devolver_radio='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';
			
				if ($pesquisa == "extensao")
				echo '<td>'. '<a href="?devolver_extnsao='. $rows_reservas[0] .'" class="botao_dev_ret">X</a> '.'</td>';
		echo '</tr>';
		}
	}

	echo '</table>';
    
?>