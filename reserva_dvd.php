<?php
session_start();
include('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);

$query = "INSERT INTO dvd (data, hora, nome, setor, ramal, ativo) VALUES ('$data', '$hora','$nome','$setor', '$ramal', '1')";
$resultado = mysqli_query($conexao, $query);

if(mysqli_insert_id($conexao))
{
  header('Location: ProjetoACS/cadastroDvd.php');
} else {
  header('Location: ProjetoACS/cadastroDvd.php');
}

 ?>