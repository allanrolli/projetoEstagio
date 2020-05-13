<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Radio</title>
    <link rel="icon" type="imagem/x-icon" href="bootstrap/img/estudo.png">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">


	</head>
	<body>
    <main>

        <section class="container-grid cadastroFormulario">
					<!--area de consulta  -->
		        <section class="container-grid cadastroFormulario">
							<form  method="POST" action="">
								<label for:"data" >Consulta:</label>
								<input class="campo_consulta" id="dataSala" type="text" name="pesquisar" placeholder="consulta">
								

							<select name="pesquisa" id="appearance-select">
                                <option value="data">data</option>
                                <option value="hora">hora</option>
                                <option value="nome">nome</option>
                                <option value="setor">setor</option>
                                <option value="ramal">ramal</option>
							</select> 
							
							<input id="consultaSalaDeAula" class="botao botao-tela1" type="submit" value="CONSULTAR">
                             </form>
                             
		        </section>
					<!--___________________________________________________________________________________________________________________ -->

        </section>
			<!--LISTAGEM PESQUISA-->
        <?php
            if (isset($_POST['pesquisar'])) {
                echo '<a class="botao botao-tela1" href="" style="width: 200px;margin: 0 auto;display: block;margin-bottom: 40px;text-align: center;text-decoration: none;"><img class="tela1" src="bootstrap/img/voltar.svg"> Voltar</a>';
                include '../pesquisa_radio.php';
            }else{
        ?>



        <!--LISTAGEM PESQUISA-->	<!-- ____________________________________reserva____________________________________________________________________________ -->
        <section class="container-grid cadastroFormulario">
        <form action="../reserva_radio.php" method="post" id="termoDeLocacaoDeProjetores">
        <div id="#" class="#">
            <label for="dataUso" >Data do uso:</label>
            <input id="dataDataShow" type="date"  class="campo" name=data>
			<label for:"horaMemorando">Horário:</label>
            <input id="horaMemorando" type="time"  class="campo" name=hora>
            <label for="nome" >Nome:</label>
            <input id="nomeDataShow" type="name" placeholder="digite o nome da pessoa que reservou" class="campo" name=nome>
            <label for="nome" >Setor:</label>
            <input id="setorDataShow" type="text" placeholder="digite o setor da pessoa que reservou" class="campo" name=setor>
            <label for="nome" >Ramal:</label>
            <input id="ramalDataShow" type="text" placeholder="digite o ramal da pessoa que reservou" class="campo" name=ramal>

        </div>
            <!-- <button id="cadastroDatashow" class="botao botao-tela1" type="submit">Cadastrar</button> -->
						<input id="cadastroSalaDeAula" onclick="ok()" class="botao botao-tela1" type=submit value="Reservar">
       </form>
			 	<!--___________________________________________________________________________________________________________________ -->
            <!-- <a href="cadastroPerifericos.php" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/extensao.svg">Extensão e periféricos</a> -->
            <a href="javascript:window.history.back()" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/voltar.svg">Voltar</a>
            <a href="menu.php" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/home.svg">Pagina Inicial</a>
        </section>

		</main>
        <footer class="rodape-pagina">
            &copy; Allan e Mario 2019
        </footer>
				<script>
					function ok()
					{
					alert("Reserva realizada!!");
					}
				</script>
                <?php } ?>
        <script src="bootstrap/js/dataShow.js"></script>
    </body>
</html>

