<?php
// Configurações para exibir erros do PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("_db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'editar_registro':
            editar_registro();
            break;
        case 'eliminar_registro':
            eliminar_registro();
            break;
        case 'acceso_user':
            acceso_user();
            break;
    }
}

function editar_registro()
{
    $conexion = mysqli_connect("localhost", "root", "", "gcred");
    $nome = mysqli_real_escape_string($conexion, $_POST['nome']);
    $taxa = mysqli_real_escape_string($conexion, $_POST['taxa']);
    $valor = mysqli_real_escape_string($conexion, $_POST['valor']);
    $valorR = mysqli_real_escape_string($conexion, $_POST['valorR']);
    $pix = mysqli_real_escape_string($conexion, $_POST['pix']);
    $operacao = mysqli_real_escape_string($conexion, $_POST['operacao']);
    $conta = mysqli_real_escape_string($conexion, $_POST['conta']);
    $agencia = mysqli_real_escape_string($conexion, $_POST['agencia']);
    $tipConta = mysqli_real_escape_string($conexion, $_POST['tipConta']);
    $criado_por = mysqli_real_escape_string($conexion, $_POST['criado_por']);
    $loja = mysqli_real_escape_string($conexion, $_POST['loja']);
    $situacao = mysqli_real_escape_string($conexion, $_POST['situacao']);
    $id_vendas = mysqli_real_escape_string($conexion, $_POST['id_vendas']);

    $consulta = "UPDATE vendas SET nome = '$nome', taxa = '$taxa', valor = '$valor', valorR = '$valorR', pix = '$pix', operacao = '$operacao', conta = '$conta', agencia = '$agencia', tipConta = '$tipConta', criado_por = '$criado_por', loja = '$loja', situacao = '$situacao' WHERE id_vendas = '$id_vendas'";
    
    echo "Nome: $nome<br>";
    mysqli_query($conexion, $consulta);

    header('Location: ../views/user.php');
}

function eliminar_registro()
{
    $conexion = mysqli_connect("localhost", "root", "", "gcred");
    // extract($_POST);
    $id_vendas = $_POST['id_vendas'];
    $consulta = "DELETE * FROM vendas WHERE id_vendas = $id_vendas";

    mysqli_query($conexion, $consulta);

    header('Location: ../views/user.php');
}

function acceso_user()
{
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['nombre'] = $nombre;

    $conexion = mysqli_connect("localhost", "root", "", "gcred");
    $consulta = "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);

    if ($filas['rol'] == 1) { //admin
        header('Location: ../views/user.php');
    } else if ($filas['rol'] == 2) { //lector
        header('Location: ../views/lector.php');
    } else {
        header('Location: login.php');
        session_destroy();
    }
}