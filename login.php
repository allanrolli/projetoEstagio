<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha']))
{
  header('Location: index.php');
  exit();
}

$usuario = addslashes($_POST['usuario']); // mysqli_real_escape_string($_POST['usuario']);
$senha = md5(addslashes($_POST['senha']));

$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario='{$usuario}' AND senha='{$senha}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
  $_SESSION['usuario'] = $usuario;
  header('Location: ProjetoACS/menu.php');
  exit();
}else{
  $_SESSION['nao_autenticado'] = true;
  header("Location: index.php");
  exit();
}

?>
