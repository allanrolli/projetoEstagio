<?php
session_start();
if(!$_SESSION['usuario'])
{
  header('telainicial.php');
  exit();
}

?>
