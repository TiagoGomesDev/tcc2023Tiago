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
<html lang="en">

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
  <h1>LISTA DE VENDAS</h1>
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
        <th>ID</th>
        <th>NOME</th>
        <th>TAXA</th>
        <th>VALOR PASSADO</th>
        <th>VALOR RETIRADO</th>
        <th>PIX</th>
        <th>DADOS DE OP</th>
        <th>Tipo de Cc</th>
        <th>VENDEDOR(A)</th>
        <th>LOJA</th>
        <th>STATUS</th>

      </tr>
    </thead>
    <tbody>

      <?php

      $conexion = mysqli_connect("localhost", "root", "", "gcred");
      //         $SQL = "SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
      // user.fecha, permisos.rol FROM user
      // LEFT JOIN permisos ON user.rol = permisos.id";

      //         $SQL = "SELECT clientes.id_cliente, clientes.nome, clientes.cpf, 
      //         clientes.rg, clientes.celular, clientes.situacao, clientes.estado, clientes.loja,
      // clientes.cidade FROM clientes";

      //         $SQL = "SELECT cli.id_cliente, cli.nome as cli_nome, cli.cpf,
      //         cli.rg, cli.celular, cli.situacao, cli.estado, cli.loja,
      // cli.cidade, l.nome_loja as lj_nome, l.localidade FROM clientes as cli
      // inner join loja as l on l.id_lojas=cli.loja";

      //         $SQL = "SELECT cli.id_cliente, cli.nome as cli_nome, cli.cpf,
      //         cli.rg, cli.celular, cli.situacao, cli.estado, cli.loja,
      // cli.cidade, l.nome_loja as lj_nome, l.localidade FROM clientes as cli
      // inner join loja as l on l.id_lojas=cli.loja";

      $SQL = "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.loja, vend.situacao,
      l.nome_loja as lj_nome, l.localidade,
      st.nome_status,
      tc.id_tipoC, tc.nome_Conta as nomC,
      u.nombre,
      b.id_banco, b.nome_banco
      from vendas as vend
      inner join loja as l on l.id_lojas=vend.loja
      inner join status as st on st.id_status = vend.situacao
      inner join tipconta as tc on tc.id_tipoC = vend.tipConta
      inner join user as u ON u.id = vend.criado_por
      inner join banco as b on b.id_banco = vend.banco";
      $dato = mysqli_query($conexion, $SQL);

      if ($dato->num_rows > 0) {
        while ($fila = mysqli_fetch_array($dato)) {

      ?>
          <tr>
            <td><?php echo $fila['id_vendas']; ?></td>
            <td><?php echo $fila['nome']; ?></td>
            <td><?php echo $fila['taxa']; ?></td>
            <td><?php echo $fila['valor']; ?></td>
            <td><?php echo $fila['valorR']; ?></td>
            <td><?php echo $fila['pix']; ?></td>
            <td>
              <?php echo $fila['operacao']; ?>&nbsp;
              <?php echo $fila['conta']; ?>&nbsp;
              <?php echo $fila['agencia']; ?>
            </td>
            <td><?php echo $fila['nomC']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td>
              <?php echo $fila['lj_nome']; ?>&nbsp;
              <?php echo $fila['localidade']; ?>&nbsp;
            </td>
            <td><?php echo $fila['nome_status']; ?></td>





          <?php
        }
      } else {

          ?>
          <tr class="text-center">
            <td colspan="16">Nâo existe registros</td>
          </tr>


        <?php

      }

        ?>


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