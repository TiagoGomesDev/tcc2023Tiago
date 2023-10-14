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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .form-container {
            text-align: center;
            margin-top: 50px;
        }

        .form-container input[type="number"] {
            width: 200px;
            padding: 10px;
            font-size: 16px;
            margin-right: 10px;
            border: 2px solid;
            border-radius: 5px;
        }

        label,
        input {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h1,
        h2 {
            text-align: center;
        }

        .result {
            margin-top: 50px;
            text-align: center;
        }

        .result p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
    <title>Calculadora de Taxa</title>
</head>

<?php include 'menu1.php'; ?>

<body>
    <div class="container">
        <div class="form-container">

            <h1>Calculadora de Taxa</h1>
            <form action="" method="post">
                <h3><label for="valor">Valor Passado:</label></h3>
                <input type="number" name="valor" id="valor" required>
                <!-- <br> -->
                <h3><label for="taxa">Taxa (%):</label></h3>
                <!-- <input type="text" name="taxa" id="taxa" required> -->
                <input type="number" name="taxa" id="taxa" required>
                <!-- <br> -->
                <input type="submit" value="Calcular">
            </form>
        </div>
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

            // Formatar os resultados com pontuação
            $valor_formatado = number_format($valor, 2, ',', '.');
            $acrescentado_formatado = number_format($acrescentado, 2, ',', '.');
            $resultado_formatado = number_format($resultado, 2, ',', '.');
            $resultado2_formatado = number_format($resultado2, 2, ',', '.');

            // Mostrar o resultado
            echo "<div class='result'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Valor Inicial: R$ $valor_formatado</p>";
            echo "<p>Taxa: $taxa%</p>";
            echo "<p>Valor Final: R$ $resultado_formatado</p>";
            echo "<p>Valor Retirado: R$ $resultado2_formatado</p>";
            echo "<p>Valor Acrescentado: R$ $acrescentado_formatado</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>