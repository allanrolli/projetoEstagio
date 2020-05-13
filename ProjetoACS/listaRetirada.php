<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
    <title>Lista de Retiradas</title>
    <link rel="icon" type="imagem/x-icon" href="bootstrap/img/estudo.png">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">

	</head>
	<body>
    <main>

       <section class="container-grid meio-tela">
        <form method="POST" action="">
            <select name="pesquisa" id="appearance-select-devolucao">
                    <option value="datashow">Data Show</option>
                    <option value="sala_de_aula">Sala de aula</option>
                    <option value="vhs">Fita VHS</option>
                    <option value="dvd">Dvd</option>
                    <option value="radio">Rádio</option>
                    <option value="extensao">Extensão</option>
                    <option value="equip_audio">Equipamento de audio</option>
                    <option value="equip_video">Equipamento de video</option>
                </select>
        
        <input id="consultaSalaDeAula" name="pesquisar" class="botao botao-tela1" type="submit" value="CONSULTAR">
        </form>

        <?php
            if (isset($_POST['pesquisar'])) {
                echo '<a class="botao botao-tela1" href="" style="width: 200px;margin: 0 auto;display: block;margin-bottom: 40px;text-align: center;text-decoration: none;"><img class="tela1" src="bootstrap/img/voltar.svg"> Voltar</a>';
                include 'retirada.php';
            }else{
                echo '<a href="javascript:window.history.back()" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/voltar.svg">Voltar</a>';
                echo '<a href="menu.php" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/home.svg">Pagina Inicial</a>';
            }
        ?>

        
            <!-- <a href="retiradaDatashow.html" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/datashow.svg">Datashow</a>
            <a href="retiradaSaladeaula.html" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/salaDeAula.svg">Sala de Aula</a>
            <a href="retiradaPerifericos.html" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/extensao.svg">Perifericos</a> -->
            <!-- <a href="menu.html" class="botao botao-tela1 nomeBotao"><img class="tela1" src="bootstrap/img/home.svg">Pagina Inicial</a> -->

        </section>
    </main>
        <footer class="rodape-pagina">
            &copy; Allan e Mario 2019
        </footer>
        <script src="bootstrap/js/dataShow.js"></script>
        </body>
</html>
