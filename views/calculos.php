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
<html>

<head>
    <script src="../js/resp/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/es.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
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

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }

        /* #botoes {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            margin: 0;
        } */
    </style>
    <title>Calculadora de Taxa</title>
</head>
<?php include 'menu1.php'; ?>


<body>
    <h1>Calculadora de Taxa</h1>
    <br>
    <br>
    <form action="" method="post">
        <label for="valor">Valor Passado: </label>
        <input type="text" name="valor" id="valor" required>
        <br>
        <label for="taxa">Taxa (%): </label>
        <input type="text" name="taxa" id="taxa" required>
        <br>
        <input type="submit" value="Calcular">
        <!-- <input type="submit" value="Calcular" onclick="calcularSubtracao()"> -->
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $taxa = $_POST["taxa"];

        // Converter a taxa para decimal
        $taxa_decimal = $taxa / 100;

        // Calcular o resultado
        $resultado = $valor + ($valor * $taxa_decimal);
        $acrescentado = $resultado - $valor;
        $resultado2 = $valor - $acrescentado;

        // Mostrar o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>Valor Inicial: R$ $valor</p>";
        echo "<p>Taxa: $taxa%</p>";
        echo "<p>Valor Final: R$ $resultado</p>";
        echo "<p>Valor Retirado: R$ $resultado2</p>";
        echo "<p>Valor Acrescentado: R$ $acrescentado</p>";
    }
    ?>
    <!-- <div id="resultado"></div>

    <script>
        function calcularSubtracao() {
            valor = parseFloat(document.getElementById("valor1").value);
            acrescentado = parseFloat(document.getElementById("valor2").value);
            resultado2 = valor - acrescentado;
            document.getElementById("resultado2").innerHTML = "Resultado: " + resultado2;
        }
    </script> -->
</body>

</html>