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

        /* .form-container input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        } */
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

        .table-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .table-column {
            flex: 1;
            margin: 0 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #007bff;
            text-align: center;
            padding: 10px;
        }

        h1,
        h2 {
            text-align: center;
        }
    </style>
</head>
<?php include 'menu1.php'; ?>

<body>

    <div class="container">
        <div class="form-container">
            <!-- <h1>Calculadora de Parcelas no Cartão</h1> -->
            <h1>Calculadora de Parcelas</h1>
            <form method="post">
                <h3><label for="numero">Digite o Valor:</label></h3>
                <input type="number" name="numero" id="numero" required>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            echo "<div class='table-container'>";
            for ($col = 1; $col <= 2; $col++) {
                echo "<div class='table-column'>";
                echo "<table>";
                echo "<tr><th>Parcela</th><th>Resultado</th></tr>";
                for ($i = 1 + 12 * ($col - 1); $i <= 12 + 12 * ($col - 1); $i++) {
                    $resultado = $numero / $i;
                    // Adicionando pontuação aos números
                    $resultado_formatado = number_format($resultado, 2, ',', '.');
                    echo "<tr><td>$numero x $i</td><td>$resultado_formatado</td></tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>