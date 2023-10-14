<?php
require_once "../includes/_db.php";
session_start();
error_reporting(0);
$validar = $_SESSION['nombre'];
if ($validar == null || $validar = '') {
  header("Location: ../includes/login.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <script src="../js/resp/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/es.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        // ['Task', 'Hours per Day'],
        ['Funcionário', 'Total de Vendas'],
        <?php
        $SQL = " SELECT u.id, u.nombre, l.id_lojas, l.localidade AS loc,
                v.taxa,COUNT(v.id_vendas) AS numero_de_vendas
                FROM user u
                JOIN loja AS l ON u.loja = l.id_lojas
                JOIN vendas AS v ON v.criado_por = u.id
                GROUP BY u.id, u.nombre, l.id_lojas
                ORDER BY u.id ASC";

        //         $SQL = "SELECT l.id_lojas, l.nome_loja, l.localidade AS loc, COUNT(*) AS quantidade, v.criado_por, u.nombre
        // FROM vendas v
        // JOIN loja l ON v.loja = l.id_lojas OR v.loja = l.nome_loja
        // JOIN user u ON u.id = v.criado_por
        // GROUP BY l.id_lojas, l.nome_loja, l.localidade";

				// SELECT u.id, u.nombre, l.id_lojas, l.localidade AS loc, v.taxa,COUNT(v.id_vendas) AS numero_de_vendas
				// FROM user u
				// JOIN loja AS l ON u.loja = l.id_lojas
				// JOIN vendas AS v ON v.criado_por = u.id
				// GROUP BY u.id, u.nombre, l.id_lojas
				// ORDER BY u.id ASC;


        $consulta = mysqli_query($conexion, $SQL);
        while ($resultado = mysqli_fetch_assoc($consulta)) {
          echo "['" . $resultado['id'] . ". " . $resultado['nombre'] . ", " . $resultado['loc'] . "', " . $resultado['numero_de_vendas'] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'Total Vendas Individuas:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBarChart);

    function drawBarChart() {
      var dataBar = google.visualization.arrayToDataTable([
        ['Funcionario', 'Média Porcentagem'],
        <?php
        // $SQLBar = "SELECT nome_loja, quant_cliente FROM loja";
        $SQLBar = " SELECT u.id, u.nombre, l.id_lojas, l.localidade AS loc,
                    AVG(v.taxa) AS media_taxa
                    FROM user u
                    JOIN loja AS l ON u.loja = l.id_lojas
                    JOIN vendas AS v ON v.criado_por = u.id
                    GROUP BY u.id, u.nombre, l.id_lojas, l.localidade
                    ORDER BY u.id ASC";

// $SQLBar = "SELECT l.id_lojas, l.nome_loja, l.localidade AS loc, COUNT(*) AS quantidade, v.criado_por, u.nombre
// FROM vendas v
// JOIN loja l ON v.loja = l.id_lojas OR v.loja = l.nome_loja
// JOIN user u ON u.id = v.criado_por
// GROUP BY l.id_lojas, l.nome_loja, l.localidade";

        // SELECT u.id, u.nombre, l.id_lojas, l.localidade AS loc,
				// AVG(v.taxa) AS media_taxa
				// FROM user u
				// JOIN loja AS l ON u.loja = l.id_lojas
				// JOIN vendas AS v ON v.criado_por = u.id
				// GROUP BY u.id, u.nombre, l.id_lojas, l.localidade
				// ORDER BY u.id ASC;
        $consultaBar = mysqli_query($conexion, $SQLBar);
        while ($resultadoBar = mysqli_fetch_assoc($consultaBar)) {
          echo "['" . $resultadoBar['nombre'] . "', " . $resultadoBar['media_taxa'] . "],";
        }
        ?>
      ]);

      var optionsBar = {
        title: 'Porcentagem de Taxa:',
        bars: 'horizontal' // Altere para 'vertical' para um gráfico de barras vertical
      };

      var chartBar = new google.visualization.BarChart(document.getElementById('barchart'));
      chartBar.draw(dataBar, optionsBar);
    }
  </script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      margin-top: 30px;
    }

    #piechart,
    #barchart {
      width: 100%;
      height: 500px;
      margin: 20px auto;
    }
  </style>
</head>

<?php include 'menu1.php'; ?>

<body>
  <h1>Gráficos Funcionarioa</h1>
  <div id="piechart"></div>
  <div id="barchart"></div>
</body>

</html>