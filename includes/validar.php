<?php

$conexion = mysqli_connect("localhost", "root", "", "gcred");

if (
    // Id	Nome	Cpf	Rg	Celular	Cidade	Estado	Loja	Localidade	Status	Ações
    isset($_POST["nome"]) && !empty($_POST["nome"]) &&
    isset($_POST["cpf"]) && !empty($_POST["cpf"]) &&
    isset($_POST["operacao"]) && !empty($_POST["operacao"]) &&
    isset($_POST["conta"]) && !empty($_POST["conta"]) &&
    isset($_POST["agencia"]) && !empty($_POST["agencia"]) &&
    isset($_POST["banco"]) && !empty($_POST["banco"]) &&
    isset($_POST["tipConta"]) && !empty($_POST["tipConta"]) &&
    isset($_POST["taxa"]) && !empty($_POST["taxa"]) &&
    isset($_POST["valor"]) && !empty($_POST["valor"]) &&
    isset($_POST["valorR"]) && !empty($_POST["valorR"]) &&
    isset($_POST["pix"]) && !empty($_POST["pix"])  &&
    isset($_POST["criado_por"]) && !empty($_POST["criado_por"]) &&
    isset($_POST["numNsu"]) && !empty($_POST["numNsu"]) &&
    isset($_POST["loja"]) && !empty($_POST["loja"])
    // isset($_POST["origem"]) && !empty($_POST["origem"]) &&
    // isset($_POST["loja"]) && !empty($_POST["loja"]) &&
    // isset($_POST["complemento"]) && !empty($_POST["complemento"])

    // isset($_POST["estado"]) && !empty($_POST["estado"])&&
    // isset($_POST["loja"]) && !empty($_POST["loja"])&&
    // isset($_POST["situacao"]) && !empty($_POST["situacao"])
) {

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $operacao = $_POST["operacao"];
    $conta = $_POST["conta"];
    $agencia = $_POST["agencia"];
    $banco = $_POST["banco"];
    $tipConta = $_POST["tipConta"];
    $taxa = $_POST["taxa"];
    $valor = $_POST["valor"];
    $valorR = $_POST["valorR"];
    $pix = $_POST["pix"];
    $criado_por = $_POST["criado_por"];
    $numNsu = $_POST["numNsu"];
    $loja = $_POST["loja"];
    // $origem = $_POST["origem"];
    // $loja = $_POST["loja"];
    // $complemento = $_POST["complemento"];
    // $data_cadastro = date("Y-m-d H:i:s"); // Obtém a data e hora atual

    // $estado = $_POST["estado"];
    // $loja = $_POST["loja"];
    // $situacao = $_POST["situacao"];



    if (isset($_POST["selImg"]) && !empty($_POST["selImg"])) {
        $imagen = $_POST["selImg"];
    } else {
        $imagen = '';
    }

    // $sql = "INSERT INTO clientes (nome, cpf, rg, celular, cidade, estado, loja, situacao)
    // VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $sql = "INSERT INTO vendas (nome, cpf, operacao, conta, agencia, banco, tipConta, taxa, valor, valorR, pix, criado_por, numNsu, loja)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($statement = mysqli_prepare($conexion, $sql)) {

        // mysqli_stmt_bind_param($statement, "sssssss", $nome, $cpf, $rg, $celular, $cidade);
        // mysqli_stmt_bind_param($statement, $nome, $cpf, $rg, $celular, $cidade);
        mysqli_stmt_bind_param($statement, "ssssssssssssss", $nome, $cpf, $operacao, $conta, $agencia, $banco, $tipConta, $taxa, $valor, $valorR, $pix, $criado_por, $numNsu, $loja);
        // mysqli_stmt_bind_param($statement, "sssss", $nome, $cpf, $rg, $celular, $cidade, $estado, $loja, $situacao);

        if (mysqli_stmt_execute($statement)) {
            header('Location: ../views/user.php');
        } else {
            echo "No se pudo realizar la accion";
        }
        mysqli_stmt_close($statement);
    }

    mysqli_close($conexion);
} else {
?>
<?php  } ?>