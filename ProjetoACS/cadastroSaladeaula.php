<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
    <title>Cadastro da Sala de aula</title>
    <link rel="icon" type="imagem/x-icon" href="bootstrap/img/estudo.png">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/grid.css">


	</head>
	<body>
    <main>
			<!--area de consulta  -->
        <section class="container-grid cadastroFormulario">
					<form  method="POST" action="">
								<label for:"data" >Consulta:</label>
								<input class="campo_consulta" id="dataSala" type="text" name="pesquisar" placeholder="consulta">
								

							<select name="pesquisa" id="appearance-select-sala">
                                <option value="data">data</option>
                                <option value="turno">turno</option>
                                <option value="nome">nome</option>
                                <option value="setor">setor</option>
                                <option value="ramal">ramal</option>
							</select> 
							
							<input id="consultaSalaDeAula" class="botao botao-tela1" type="submit" value="CONSULTAR">

                	</form>
        </section>
			<!--___________________________________________________________________________________________________________________ -->
			
			<!--LISTAGEM PESQUISA-->
        <?php
            if (isset($_POST['pesquisar'])) {
                echo '<a class="botao botao-tela1" href="" style="width: 200px;margin: 0 auto;display: block;margin-bottom: 40px;text-align: center;text-decoration: none;"><img class="tela1" src="bootstrap/img/voltar.svg"> Voltar</a>';
                include '../pesquisarsala.php';
            }else{
        ?>



        <!--LISTAGEM PESQUISA--><!--_______________________________________________Reserva________________________________________________ -->
        <section class="container-grid cadastroFormulario">
        <form action="../reserva_sala.php" method="post" id="locacaoDeSalasParaAData">
	        <div id="#" class="#">
	            <label for:"dataSala" >Data do uso:</label>
	            <input id="dataSala" type="date" class="campo" name=data>
	            <label for:"nome" >Nome:</label>
	            <input id="nomeSala" type="name" placeholder="digite o nome da pessoa que reservou" class="campo" name=nome>
	            <label for:"nome" >Ramal:</label>
	            <input id="ramalSala" type="text" placeholder="digite o ramal da pessoa que reservou" class="campo" name=ramal>
	            <label for:"nome" >Sala:</label>
	            <input id="recursoSala" type="number" placeholder="digite qual sala reservou" class="campo" name=recurso>
	            <label for:"nome" >Turno:</label>
	            <input id="turnoSala" type="text" placeholder="digite o turno (matutino, vespertino ou noite)" class="campo" name=turno>
	        </div>
            <!-- <button id="cadastroSalaDeAula" class="botao botao-tela1" type="submit">Cadastrar</button> -->
						<input id="cadastroSalaDeAula"  class="botao botao-tela1" type=submit value="Reservar">
		    </form>
			<!--___________________________________________________________________________________________________________________ -->
            <a href="javascript:window.history.back()" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/voltar.svg">Voltar</a>
            <a href="menu.php" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/home.svg">Pagina Inicial</a>

        </section>

		</main>
        <footer class="rodape-pagina">
            &copy; Allan e Mario 2019
        </footer>

				
				<?php } ?>
        <script src="bootstrap/js/dataShow.js"></script>
    </body>
</html>
