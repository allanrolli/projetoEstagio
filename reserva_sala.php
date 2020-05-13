<?php
session_start();
include('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
$recurso = filter_input(INPUT_POST,'recurso', FILTER_SANITIZE_STRING);
$turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_STRING);

$dataAtual = date("d/m/Y", strtotime('+ 15 day'));
$datePassada = date("d/m/Y", strtotime($data));
// echo $dataAtual."<br>";
// echo $datePassada;exit;

if (  $dataAtual <=  $datePassada) 
{
 echo "Data invalida! Volte e preencha os dados novamente.";
echo '<a href="javascript:window.history.back()" class="botao botao-tela1 nomeBotao"> Voltar</a>';
 exit;
}
$query = "INSERT INTO sala_de_aula (data, nome, ramal, recurso, turno, ativo) VALUES ('$data', '$nome','$ramal','$recurso','$turno', '1')";
$resultado = mysqli_query($conexao, $query);

if(mysqli_insert_id($conexao))
{
  header('Location: ProjetoACS/cadastroSaladeaula.php');
} else {
  header('Location: ProjetoACS/cadastroSaladeaula.php');
}

 ?>
