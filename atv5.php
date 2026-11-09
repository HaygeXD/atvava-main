
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Dinâmica</title>
</head>
<body>

    <h1>Criação de Tabela Dinâmica</h1>

    <form method="POST" action="">

        <label>Digite o número de colunas:</label>
        <input type="number" name="colunas" min="1" max="50" required>

        <input type="submit" value="Gerar Tabela">

    </form>

    <?php

    if (isset($_POST['colunas'])) {

        $colunas = (int) $_POST['colunas'];

        if ($colunas >= 1 && $colunas <= 50) {

            echo "<h2>Tabela Gerada:</h2>";

            echo "<table border='1'>";

            echo "<tr>";

            for ($i = 1; $i <= $colunas; $i++) {

                echo "<td>Coluna $i</td>";

            }

            echo "</tr>";

            echo "</table>";

        } else {

            echo "<p>Digite um número entre 1 e 50.</p>";

        }

    }

    ?>

</body>
</html>
