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
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        <?php
        // $SQL = "SELECT * FROM user";
        // $consulta = mysqli_query($conexion, $SQL);
        // while ($resultado = mysqli_fetch_assoc($consulta)){
        //   echo "['" .$resultado['nombre']."', " .$resultado['edad']."],";

        // $SQL = "SELECT * FROM loja";
        // $consulta = mysqli_query($conexion, $SQL);
        // while ($resultado = mysqli_fetch_assoc($consulta)){
        //   echo "['" .$resultado['nome_loja']."', " .$resultado['valorGrafico']."],";

        // $SQL = "SELECT l.nome_loja, l.id_lojas, l.quant_cliente FROM clientes c
        // JOIN loja l ON c.id_cliente = l.id_lojas";

        //   $SQL = "SELECT l.id_lojas, c.id_cliente, 
        //   l.nome_loja, l.quant_cliente as q_cliente, l.localidade as loc,
        //         c.loja as num_loja 
        // FROM clientes c
        //     JOIN loja l ON c.loja = l.id_lojas";

        // $SQL = "SELECT l.id_lojas, l.nome_loja, l.localidade as loc,
        // SUM(c.q_cliente) AS soma_q_cliente
        // FROM clientes c
        // JOIN loja l ON c.loja = l.id_lojas || c.loja = l.nome_loja 
        // GROUP BY l.id_lojas, l.nome_loja, l.localidade";



        // $SQL = "SELECT l.id_lojas, l.nome_loja, l.localidade AS loc, COUNT(*) AS quantidade, v.criado_por
        // FROM vendas v
        // JOIN loja l ON v.loja = l.id_lojas OR v.loja = l.nome_loja
        // GROUP BY l.id_lojas, l.nome_loja, l.localidade";
        
        
        // $SQL = "SELECT l.id_lojas, l.nome_loja, l.localidade AS loc, COUNT(*) AS quantidade, v.criado_por,
        // u.nombre
        // FROM vendas v
        // JOIN loja l ON v.loja = l.id_lojas OR v.loja = l.nome_loja
        // JOIN user u ON u.id = l.id_lojas
        // GROUP BY l.id_lojas, l.nome_loja, l.localidade";

        $SQL = "SELECT l.id_lojas, l.nome_loja, l.localidade AS loc, COUNT(*) AS quantidade, v.criado_por,
        u.nombre
        FROM vendas v
        JOIN loja l ON v.loja = l.id_lojas OR v.loja = l.nome_loja
        JOIN user u ON u.id = v.criado_por
        GROUP BY l.id_lojas, l.nome_loja, l.localidade";
        
        //ligado por ID 
        // JOIN loja l ON c.loja = l.id_lojas
        //ligado por nome 
        //JOIN loja l ON c.loja = l.id_lojas || c.loja = l.nome_loja 

        $consulta = mysqli_query($conexion, $SQL);
        while ($resultado = mysqli_fetch_assoc($consulta)) {
          echo "['" . $resultado['id_lojas'] . ". " . $resultado['nombre'] . ", " . $resultado['loc'] . "', " . $resultado['quantidade'] . "],";
        }

        ?>
      ]);

      var options = {
        title: 'Grafico de Lojas'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
  <!-- Novo gráfico de barras -->
  <script type="text/javascript">
    google.charts.setOnLoadCallback(drawBarChart);

    function drawBarChart() {
      var dataBar = google.visualization.arrayToDataTable([
        ['Loja', 'Quantidade de Clientes'],
        <?php
        // Seu código de consulta SQL para o novo gráfico
        // $SQLBar = "SELECT nome_loja, quant_cliente FROM loja";
        $SQLBar = "SELECT nome_loja, quant_cliente FROM loja";
        $consultaBar = mysqli_query($conexion, $SQLBar);
        while ($resultadoBar = mysqli_fetch_assoc($consultaBar)) {
          echo "['" . $resultadoBar['nome_loja'] . "', " . $resultadoBar['quant_cliente'] . "],";
        }
        ?>
      ]);

      var optionsBar = {
        title: 'Quantidade de Clientes por Loja',
        bars: 'horizontal' // Altere para 'vertical' para um gráfico de barras vertical
      };

      var chartBar = new google.visualization.BarChart(document.getElementById('barchart'));
      chartBar.draw(dataBar, optionsBar);
    }
  </script>
  <style>
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
</head>
<?php include 'menu1.php'; ?>

<body>
  <h1>Graficos</h1>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
  <div id="barchart" style="width: 900px; height: 500px;"></div>

</body>

</html>