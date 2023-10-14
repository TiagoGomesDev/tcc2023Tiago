<?php
$id = $_GET['id'];
$conexion=mysqli_connect("localhost","root","","gcred"); 
// $query = mysqli_query($conexion,"DELETE FROM user WHERE id = '$id'");
$query = mysqli_query($conexion,"DELETE FROM vendas WHERE id_vendas = '$id_vendas'");

header ('Location: prueba.php?m=1');