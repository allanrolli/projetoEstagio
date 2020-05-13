<?php
session_start();
include('conexao.php');



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);


// if ( date('d/m/Y',strtotime($data )) ) {
//   echo 'Data inválida';
//   // exit;
// }

// echo date('d/m/Y',strtotime($data) );
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
$query = "INSERT INTO datashow_reserva (data, hora, nome, setor, ramal, ativo) VALUES ('$data', '$hora','$nome','$setor', '$ramal', '1')";
$resultado = mysqli_query($conexao, $query);

if(mysqli_insert_id($conexao))
{ 
  header('Location: ProjetoACS/cadastroDatashow.php');
} else {
  header('Location: ProjetoACS/cadastroDatashow.php');
}

 ?>
