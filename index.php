<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>
		login
		</title>
		<link rel="stylesheet" href="login.css">

	</head>

	<body>
            
		<form class="box" action="login.php" method="POST">
            <h1> Sistema de login</h1><br>
            
            <?php
              if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div class="notification_is_danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
       
			<input type="text" name="usuario" placeholder="Username">
			<input type="password" name="senha" value="Login">
            <button type="submit" class="login" >Entrar</button>
	    </form>

	</body>
</html>