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
<?php include 'menu.php'; ?>

<div class="container is-fluid">


  <div class="col-xs-12">
    <!-- <h1>Usuário: <?php echo $_SESSION['nombre']; ?></h1> -->

    <!-- <p> Mostrar cantidad de <select name="sel" id="value"> 
        <option value="1">1 Registro</option>
        <option value="2">2 Registros</option>
        <option value="3">3 Registros</option>
    </select>
    <br>-->




    <!-- <div id="botoes">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
        <span class="glyphicon glyphicon-plus"></span> Novo cliente <i class="fa fa-plus"></i> </a></button>

      <a class="btn btn-primary" href="../includes/excel.php">Excel
        <i class="fa fa-table" aria-hidden="true"></i>
      </a>
      <a href="../includes/reporte.php" class="btn btn-danger"><b>PDF</b> </a>
      <a href="grafica.php" class="btn btn-primary"><b>Grafico</b> </a>

      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Sair
        <i class="fa fa-power-off" aria-hidden="true"></i>
      </a>
    </div> -->

    <div class="col-xs-12">
      <!-- <br>

      <br>-->
      <h1>LISTA DE VENDAS</h1>

      <!-- <p> Mostrar cantidad de <select name="sel" id="value"> 
        <option value="1">1 Registro</option>
        <option value="2">2 Registros</option>
        <option value="3">3 Registros</option>
    </select>
    <br>-->

      <div>

        <!-- Aquí puedes escribir tu comentario 
    <div class="container-fluid"> 
  <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar con PHP" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form>
  </div>-->
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "gcred");
        $where = "";

        if (isset($_GET['enviar'])) {
          $busqueda = $_GET['busqueda'];


          if (isset($_GET['busqueda'])) {
            $where = "WHERE user.correo LIKE'%" . $busqueda . "%' OR nombre  LIKE'%" . $busqueda . "%'
    OR telefono  LIKE'%" . $busqueda . "%'";
          }
        }


        ?>



        </form>
        <!-- <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar con JS">
      <hr>
      </form>
  </div>  -->

        <br>


        <table class="table table-striped table-dark table_id " id="table_id">

          <!-- CÓD	NOME	CPF	BANCO	
      DADOS DA CONTA	PIX	VALOR	VALOR R	RESPONSAVEL	AÇÕES  -->
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
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>

            <?php
            // $conexion = mysqli_connect("localhost", "root", "", "gcred");
            // $SQL = mysqli_query($conexion, "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.loja, vend.situacao,
            // l.nome_loja as lj_nome, l.localidade,
            // st.nome_status,
            // tc.id_tipoC, tc.nome_Conta as nomC,
            // u.nombre
            // from vendas as vend
            // inner join loja as l on l.id_lojas=vend.loja
            // inner join status as st on st.id_status = vend.situacao
            // inner join tipconta as tc on tc.id_tipoC = vend.tipConta
            // inner join user u ON u.id = vend.criado_por");
            $conexion = mysqli_connect("localhost", "root", "", "gcred");
            $SQL = mysqli_query($conexion, "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.loja, vend.situacao,
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
            inner join banco as b on b.id_banco = vend.banco;");

            while ($fila = mysqli_fetch_assoc($SQL)) :

            ?>
              <tr>
                <!-- id_vendas, nome, taxa, numNsu, fotoNsu, valor, valorR, pix, operacao, conta, agencia, banco, cpf, tipConta, data_cadastro	
ultima_alteracao, criado_por, alterado_por, situacao -->
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



                <!-- <td><img src="../imgs/<?php echo $fila['imagen']; ?>" onerror=this.src="../imgs/noimage.png" width="50" heigth="70"></td> -->

                <td>


                  <a class="btn btn-warning" href="editar_user.php?id_vendas=<?php echo $fila['id_vendas'] ?> ">
                    <i class="fa fa-edit"></i> </a>


                  <a class="btn btn-danger btn-del" href="eliminar_user.php?id_vendas=<?php echo $fila['id_vendas'] ?> ">
                    <i class="fa fa-trash"></i></a>
                </td>
              </tr>


            <?php endwhile; ?>

            </body>
        </table>

        <script>
          $('.btn-del').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')

            Swal.fire({
              title: 'Tem certeza que quer excluir este vendas?',
              text: "¡Não podá revertir esto!!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sim, excluir!',
              cancelButtonText: 'Cancelar!',
            }).then((result) => {
              if (result.value) {
                if (result.isConfirmed) {
                  Swal.fire(
                    'Eliminado!',
                    'Este vendas foi excluido.',
                    'Sucesso'
                  )
                }

                document.location.href = href;
              }

            })
          })
        </script>
        <!-- <div id="paginador" class=""></div>-->
        <script src="../package/dist/sweetalert2.all.js"></script>
        <script src="../package/dist/sweetalert2.all.min.js"></script>
        <script src="../package/jquery-3.6.0.min.js"></script>

        <script type="text/javascript" src="../DataTables/js/datatables.min.js"></script>
        <script type="text/javascript" src="../DataTables/js/jquery.dataTables.min.js"></script>
        <script src="../DataTables/js/dataTables.bootstrap4.min.js"></script>

        <script src="../js/page.js"></script>
        <script src="../js/buscador.js"></script>
        <script src="../js/user.js"></script>




        <?php include('../index.php'); ?>

</html>