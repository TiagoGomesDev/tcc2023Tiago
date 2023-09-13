<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Editar Informações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Editar Informações</h1>

    <?php

    // Conexão com o banco de dados
    $conn = mysqli_connect("localhost", "root", "", "gcred");

    // Pega o ID do usuário que será editado
    $id = $_GET["id"];

    // Faz a consulta para pegar os dados do usuário
    // $sql = "SELECT * FROM user WHERE id = $id";
    $sql = "SELECT * FROM user WHERE id = ''";
    $result = mysqli_query($conn, $sql);

    // Pega o resultado da consulta
    $usuario = mysqli_fetch_assoc($result);

    ?>

    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario["nombre"]; ?>">
        </div>

        <div class="form-group">
            <label for="correo">correo</label>
            <input type="correo" class="form-control" id="correo" name="correo" value="<?php echo $usuario["correo"]; ?>">
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

</body>
</html>
