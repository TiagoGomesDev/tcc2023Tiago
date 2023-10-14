<?php

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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../DataTables/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../css/es.css">


  <script src="../js/jquery.min.js"></script>

  <script src="../js/resp/bootstrap.min.js"></script>


  <title>Vendas</title>

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
<?php include 'menu12.php'; ?>
<div class="container is-fluid">




  <!-- <div class="col-xs-12">
    <h1>Usuário: <?php echo $_SESSION['nombre']; ?></h1>


    <br> -->
  <h1>Lista de Planejamento</h1>
  <!-- <br>
    <div>

      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Sair
        <i class="fa fa-power-off" aria-hidden="true"></i>
      </a>
      <a class="btn btn-primary" href="../includes/lectorexcel.php">Excel
        <i class="fa fa-table" aria-hidden="true"></i>
      </a>

    </div>
    <br>




    <br> -->


  </form>



  <table class="table table-striped table-dark " id="table_id">


    <thead>
      <tr>
        <th>Grafico</th>
        <th>menu atendente</th>
        <th>juntar o cadastro de cliente</th>
        <th>verificar o editar</th>
        <!-- <th>VALOR RETIRADO</th>
        <th>PIX</th>
        <th>DADOS DE OP</th>
        <th>Tipo de Cc</th>
        <th>VENDEDOR(A)</th>
        <th>LOJA</th>
        <th>STATUS</th> -->

      </tr>
    </thead>
    <tbody>




      </body>
  </table>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script> -->
  <script src="../package/dist/sweetalert2.all.js"></script>
  <script src="../package/dist/sweetalert2.all.min.js"></script>
  <script src="../package/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="../DataTables/js/datatables.min.js"></script>
  <script type="text/javascript" src="../DataTables/js/jquery.dataTables.min.js"></script>
  <script src="../DataTables/js/dataTables.bootstrap4.min.js"></script>

  <script src="../js/page.js"></script>
  <script src="../js/buscador.js"></script>
  <script src="../js/user.js"></script>

</html>