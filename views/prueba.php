<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="../package/dist/sweetalert2.all.js"></script>
    <script src="../package/dist/sweetalert2.all.min.js"></script>
    <script src="../package/jquery-3.6.0.min.js"></script>

</head>

<body>

    <button id="btn">Click</button>

    <table class="table table-striped table-dark table_id " id="table_id">


        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Rg</th>
                <th>Celular</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Loja</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>

            <?php

            $conexion = mysqli_connect("localhost", "root", "", "gcred");
            $result = mysqli_query($conexion, "SELECT clientes.id_cliente, clientes.nome, clientes.cpf, 
        clientes.rg, clientes.celular, clientes.situacao, clientes.estado, clientes.loja,
clientes.cidade FROM clientes");
            while ($fila = mysqli_fetch_assoc($result)) :


            ?>
                <tr>
                    <td><?php echo $fila['id_cliente']; ?></td>
                    <td><?php echo $fila['nome']; ?></td>
                    <td><?php echo $fila['cpf']; ?></td>
                    <td><?php echo $fila['rg']; ?></td>
                    <td><?php echo $fila['celular']; ?></td>
                    <td><?php echo $fila['cidade']; ?></td>
                    <td><?php echo $fila['estado']; ?></td>
                    <td><?php echo $fila['loja']; ?></td>
                    <td><?php echo $fila['situacao']; ?></td>



                    <td>


                        <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id_cliente'] ?> ">
                            <i class="fa fa-edit"></i>Editar </a>


                        <a href="delete.php?id=<?= $fila['id_cliente'] ?> " class="btn-del">
                            <i class="fa fa-trash"></i> Eliminar</a>
                    </td>
                </tr>


            <?php endwhile; ?>



            <script>
                $('.btn-del').on('click', function(e) {
                    e.preventDefault();
                    const href = $(this).attr('href')

                    Swal.fire({
                        title: 'Estas seguro de eliminar este usuario?',
                        text: "¡No podrás revertir esto!!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminalo!',
                    }).then((result) => {
                        if (result.value) {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Eliminado!',
                                    'El archivo fue eliminado.',
                                    'success'
                                )
                            }

                            document.location.href = href;
                        }
                    })

                })

                $('#btn').on('click', function() {

                    Swal.fire({
                        'title': '¡Mensaje!',
                        'icon': 'success',
                        'showConfirmButton': 'false',
                        'timer': '1500'

                    })
                })
            </script>

</body>
</table>

</html>