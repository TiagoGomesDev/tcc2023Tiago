<?php

    $id_vendas= $_GET['id_vendas'];
    $conexion=mysqli_connect("localhost","root","","gcred");
    $consulta= mysqli_query($conexion,"DELETE FROM vendas WHERE id_vendas= '$id_vendas'");

    header('Location: user.php');
