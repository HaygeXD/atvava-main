
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questionário de Opinião</title>
</head>
<body>

    <h1>Questionário de Opinião</h1>
    <p>Responda às perguntas abaixo:</p>

    <form method="GET" action="">

        <h3>1. Qual seu gênero de filme preferido??</h3>

        <input type="radio" name="sistema" value="Comédia" required> Comédia<br>
        <input type="radio" name="sistema" value="Ação"> Ação<br>
        <input type="radio" name="sistema" value="Romance"> Romance<br>
        <input type="radio" name="sistema" value="Drama"> Drama<br>

        <h3>2. Qual tipo de jogo você prefere?</h3>

        <input type="radio" name="jogo" value="FPS" required> FPS<br>
        <input type="radio" name="jogo" value="RPG"> RPG<br>
        <input type="radio" name="jogo" value="Esporte"> Esporte<br>
        <input type="radio" name="jogo" value="Estratégia"> Estratégia<br>

        <h3>3. Qual eletrônico você mais utiliza?</h3>

        <input type="radio" name="dispositivo" value="Computador" required> Computador<br>
        <input type="radio" name="dispositivo" value="Celular"> Celular<br>
        <input type="radio" name="dispositivo" value="TV"> TV<br>
        <input type="radio" name="dispositivo" value="Console"> Console<br>

        <br>
        <input type="submit" value="Enviar respostas">

    </form>

    <?php

    if (isset($_GET['sistema']) && isset($_GET['jogo']) && isset($_GET['dispositivo'])) {

        $sistema = htmlspecialchars($_GET['sistema']);
        $jogo = htmlspecialchars($_GET['jogo']);
        $dispositivo = htmlspecialchars($_GET['dispositivo']);

        echo "<h2>Resumo das suas respostas:</h2>";

        echo "<p><strong>Sistema operacional favorito:</strong> $sistema</p>";

        echo "<p><strong>Tipo de jogo favorito:</strong> $jogo</p>";

        echo "<p><strong>Dispositivo mais utilizado:</strong> $dispositivo</p>";

    }

    ?>

</body>
</html>
