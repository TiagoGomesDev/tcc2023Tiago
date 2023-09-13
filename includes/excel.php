<?php

require_once("_db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");
?>


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
            <th>VENDEDOR(A)</th>
            <th>LOJA</th>
            <th>STATUS</th>

        </tr>
    </thead>
    <tbody>

        <?php

        $conexion = mysqli_connect("localhost", "root", "", "gcred");
        // $SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
        // user.fecha, permisos.rol FROM user
        // LEFT JOIN permisos ON user.rol = permisos.id";
        $SQL = "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.situacao, vend.loja,
        l.nome_loja as lj_nome, l.localidade
        from vendas as vend
        inner join loja as l on l.id_lojas=vend.loja";
        $dato = mysqli_query($conexion, $SQL);

        if ($dato->num_rows > 0) {
            while ($fila = mysqli_fetch_array($dato)) {

        ?>
                <tr>
                    <!-- <td><?php echo $fila['id_cliente']; ?></td> -->
                   <!-- id_vendas, nome, taxa, numNsu, fotoNsu, valor, valorR, pix, operacao, conta, agencia, banco, cpf, tipConta, data_cadastro	
ultima_alteracao, criado_por, alterado_por, situacao -->
                <td><?php echo $fila['id_vendas']; ?></td>
                <td><?php echo $fila['nome']; ?></td>
                <td><?php echo $fila['taxa']; ?></td>
                <td><?php echo $fila['valor']; ?></td>
                <td><?php echo $fila['valorR']; ?></td>
                <td><?php echo $fila['pix']; ?></td>
                <!-- vend.operacao, vend.conta, vend.agencia -->
                <!-- <td><?php echo $fila['operacao']; ?><?php echo $fila['conta']; ?><?php echo $fila['agencia']; ?></td>
               -->
                <td>
                  <?php echo $fila['operacao']; ?>&nbsp;
                  <?php echo $fila['conta']; ?>&nbsp;
                  <?php echo $fila['agencia']; ?>
                </td>

                <td><?php echo $fila['criado_por']; ?></td>
                <!-- <td><?php echo $fila['lj_nome']; ?></td> -->
                <td>
                  <?php echo $fila['lj_nome']; ?>&nbsp;
                  <?php echo $fila['localidade']; ?>&nbsp;
                </td>
                <td><?php echo $fila['situacao']; ?></td>




            <?php
            }
        }
