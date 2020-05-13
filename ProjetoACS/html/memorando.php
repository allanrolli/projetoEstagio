<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
    <title>Cadastro do Memorando</title>
    <link rel="icon" type="imagem/x-icon" href="bootstrap/img/estudo.png">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">

	</head>
	<body>
    <main>
			<section class="container-grid cadastroFormulario">
				<!--area de consulta  -->
	        <section class="container-grid cadastroFormulario">
						<form  method="POST" action="pesquisar.php">
							<label for:"data" >Consulta:</label>
							<input class="campo" id="dataSala" type="text" name="pesquisar" placeholder="consulta">
							<input id="consultaSalaDeAula" class="botao botao-tela1" type="submit" value="CONSULTAR">
						 </form>
	        </section>
				<!--___________________________________________________________________________________________________________________ -->

        <section class="container-grid meio-tela cadastroFormulario">
        <form action="script.php" method="post" id="memorando">
        <div id="#" class="#">
            <label for:"nomeMemorando" >Nome:</label>
            <input id="nomeMemorando" type="name" placeholder="digite o nome da pessoa" class="campo" name=nome>
            <label for:"setorMemorando" >Setor:</label>
            <input id="setorMemorando" type="text" placeholder="digite o setor da pessoa" class="campo" name=setor>
            <label for:"numeroRamal" >Ramal:</label>
            <input id="numeroRamal" type="number" placeholder="digite o ramal da pessoa" class="campo" name=ramal>
            <label for:"dataMemorando" >Data do uso:</label>
            <input id="dataMemorando" type="date" placeholder="digite a data a ser usado equipamento" class="campo" name=data>
            <label for:"horaMemorando">Horário:</label>
            <input id="horaMemorando" type="time" class="campo" name=hora>
            <label for:"recursoMemorando">Recurso(s)</label>
            <div class="esquerda">
            <input type="checkbox" name="equipAudio" value="radio"><a>Rádio</a><br>
            <input type="checkbox" name="equipAudio" value="amplificador"><a>Amplificador</a><br>
            <input type="checkbox" name="equipAudio" value="caixa de som"><a>Caixa de Som</a><br>
            <input type="checkbox" name="equipAudio" value="aparelho de dvd"><a>Aparelho de DVD</a><br>
            <input type="checkbox" name="equipVideo" value="televisao"><a>Televisão</a><br>
            <input type="checkbox" name="equipVideo" value="camera"><a>Câmera Fotográfica</a><br>
            <input type="checkbox" name="equipVideo" value="filmadora"><a>Filmadora</a><br>
            <input type="checkbox" name="auditorio" value="Auditorio"><a>Auditório</a>
            </div>
        </div>
            <!-- <button id="cadastroMemorando" class="botao botao-tela1" type="submit">Cadastrar</button> -->
						<input id="cadastroSalaDeAula" class="botao botao-tela1" type=submit value="Reservar">
    </form>
            <a href="javascript:window.history.back()" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/voltar.svg">Voltar</a>
            <a href="menu.html" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/home.svg">Pagina Inicial</a>
        </section>

		</main>
        <footer class="rodape-pagina">
            &copy; Allan e Mario 2019
        </footer>
        <script src="bootstrap/js/dataShow.js"></script>
    </body>
</html>
