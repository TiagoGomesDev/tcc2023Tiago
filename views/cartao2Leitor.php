<!-- <?php
        require_once "../includes/_db.php";

        ?> -->
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {
    require_once "../includes/_db.php";

    header("Location: ../includes/login.php");
    die();
}


?>
<!DOCTYPE html>
<html>

<head>

    <!-- ... (restante do código) ... -->
    <script src="../js/resp/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/es.css">
    <style>
        /* ... (restante dos estilos) ... */
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }

        h1,
        h2,
        p {
            text-align: center;
        }

        /* tr {
            text-align: center;
        } */
        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }

        .table-container {
            display: flex;
            justify-content: center;
            margin: 0;
            
        }

        /* #botoes {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            margin: 0;
        } */
        /* Adicione o seguinte CSS para dividir a tabela em duas partes */
        .table-container {
            display: flex;
            justify-content: center;
            

        }

        .table-column {
            flex: 10;
            margin: 0 0 0 200px; /* Adicione margem entre as colunas */
            /* left: 200px; */
        }
    </style>
</head>
<?php include 'menu1Leitor.php'; ?>

<body>
    <br>
    <br>
    <h1>Calculadora de vezes Cartão</h1>
    <br>
    <br>
    <form method="post">
        <form method="post">
            <label for="numero">Digite o Valor:</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Calcular">
            <br><br>
        </form>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<br><br><h2>Divisão do $numero</h2>";
        echo "<div class='table-container'>"; // Adicione a div container
        echo "<div class='table-column'>"; // Div para a primeira coluna da tabela
        echo "<table border='5'>";
        // Primeira metade da tabela (linhas de 1 a 12)
        for ($i = 1; $i <= 12; $i++) {
            $resultado = $numero / $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td><hr>$resultado<hr></td></tr>";
        }
        echo "</table>";
        echo "</div>"; // Feche a div para a primeira coluna

        echo "<div class='table-column'>"; // Div para a segunda coluna da tabela
        echo "<table border='5'>";
        // Segunda metade da tabela (linhas de 13 a 24)
        for ($i = 13; $i <= 24; $i++) {
            $resultado = $numero / $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td><hr>$resultado<hr></td></tr>";
        }
        echo "</table>";
        echo "</div>"; // Feche a div para a segunda coluna

        echo "</div>"; // Feche a div container
    }
    ?>
</body>

</html>