<?php

require_once ("_db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");
?>


<table class="table table-striped table-dark " id= "table_id">

                   
<thead>    
<tr>
<th>Id</th>
<th>Nome</th>
<th>Cpf</th>
<th>Rg</th>
<th>Celular</th>
<th>Cidade</th>


</tr>
</thead>
<tbody>

<?php

$conexion=mysqli_connect("localhost","root","","sist_gcred");               
// $SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
// user.fecha, permisos.rol FROM user
// LEFT JOIN permisos ON user.rol = permisos.id";
$SQL="SELECT clientes.id_cliente, clientes.nome, clientes.cpf, clientes.rg, clientes.celular,
clientes.cidade FROM clientes";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){

?>
<tr>
<td><?php echo $fila['id_cliente']; ?></td>
<td><?php echo $fila['nome']; ?></td>
<td><?php echo $fila['cpf']; ?></td>
<td><?php echo $fila['rg']; ?></td>
<td><?php echo $fila['celular']; ?></td>
<td><?php echo $fila['cidade']; ?></td>



<?php
}

}
