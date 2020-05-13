<?php
session_start();
include('conexao.php');

	 $pesquisar = $_POST['pesquisar'];

	// pesquisa
	$pesquisa = $_POST['pesquisa'];

	// criar condições
	if($pesquisa == "data")
	{
		$result_reservas = "SELECT * FROM extensao WHERE data LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "hora")
	{
		$result_reservas = "SELECT * FROM extensao WHERE hora LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "nome")
	{
		$result_reservas = "SELECT * FROM extensao WHERE nome LIKE '%$pesquisar%'";
	} 
	elseif($pesquisa == "setor")
	{
		$result_reservas = "SELECT * FROM extensao WHERE setor LIKE '%$pesquisar%'";
	}
	else {
		$result_reservas = "SELECT * FROM extensao WHERE ramal LIKE '%$pesquisar%'";
	}

	// 
	$resultado_reservas = mysqli_query($conexao, $result_reservas);
// echo "<pre>";
// 		print_r($resultado_reservas);
// exit;
	while($rows_reservas = mysqli_fetch_array($resultado_reservas))
	{
		// echo "<pre>";
		// print_r($rows_reservas);
		
		if ($rows_reservas[6] != 0 && $rows_reservas[8] != 0)
	 {
		// echo "Reserva: " . $rows_reservas[0] ."<br>";
		echo "Data: "  .date('d/m/Y', strtotime($rows_reservas[1] )) . " - " . date('H:i', strtotime($rows_reservas[2] )) ."<br>";
		echo "Nome: ". $rows_reservas[3] ."<br>";
		echo "Setor: "  . $rows_reservas[4]."<br>"; 
		echo "Ramal: " . $rows_reservas[5]. ". "."<br>";
		echo "-----------------------------------------";
		echo "<br>";
	}
		// echo "Reserva: ".$rows_reservas['data']."<br>";
		// echo "Reserva: ".$rows_reservas."<br>";
	}

    
?>