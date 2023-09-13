
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
<script src="../js/resp/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/es.css">

    <title>Tabuada Automática</title>
    <style>
         form {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }
        h1, h2, p {
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
        }
        /* #botoes {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            margin: 0;
        } */
    </style>
</head>
<?php include 'menu1.php'; ?>

<body>
    <h1>Calculadora de vezes Cartão</h1>
    <form method="post">
        <label for="numero">Digite o Valor:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular">
        <br><br>
    </form>
    <form method="post">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h2>Calculo do $numero:</h2>";
        echo "<table border='5'>";
        for ($i = 1; $i <= 24; $i++) {
            $resultado = $numero / $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td><hr>$resultado<hr></td></tr>";
        }
        echo "</table>";
    }
    ?>
</from>
</body>
</html>
