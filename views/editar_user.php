<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

    header("Location: ../includes/login.php");
    die();
}
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// session_start();
// error_reporting(0);

// $validar = $_SESSION['nombre'];

// if ($validar == null || $validar = '') {
//     header("Location: ../includes/login.php");
//     die();
// }


// $id = $_GET['id'];
// $conexion = mysqli_connect("localhost", "root", "", "g");
// $consulta = "SELECT * FROM user WHERE id = $id";
$id_vendas = $_GET['id_vendas'];
$conexion = mysqli_connect("localhost", "root", "", "gcred");
// $consulta = "SELECT * FROM vendas WHERE id_vendas = $id_vendas";
$consulta = "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.loja, vend.situacao,
l.nome_loja as lj_nome, l.localidade,
st.nome_status,
tc.id_tipoC, tc.nome_Conta as nomC
FROM vendas as vend
INNER JOIN loja as l ON l.id_lojas = vend.loja
INNER JOIN status as st ON st.id_status = vend.situacao
INNER JOIN tipconta as tc ON tc.id_tipoC = vend.tipConta
WHERE vend.id_vendas = $id_vendas";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>


    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">


    <form action="../includes/_functions.php" method="POST">
        <div>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <br>
                            <br>
                            <h3 class="text-center">Editar Vendas</h3>
                            <!-- <div class="form-group">
                                <label for="nombre" class="form-label">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $usuario['nome']; ?>" required>
                            </div> -->
                            <div class="form-group row">
                                <label for="nome" class="form-label">Identificador:</label>
                                <div class="col-sm-15">
                                    <div class="col-sm-1">
                                        <input type="text" readonly class="form-control" id="staticId_vendas" name="id_vendas" value="<?php echo $usuario['id_vendas']; ?>">
                                    </div>
                                    <label for="nome" class="form-label">Nome:</label>

                                    <input type="text" readonly class="form-control" id="staticNome" name="nome" value="<?php echo $usuario['nome']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="valor" class="form-label">Valor Passado:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticValor" name="valor" value="<?php echo $usuario['valor']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="valorR" class="form-label">Valor Retirado:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticValorR" name="valorR" value="<?php echo $usuario['valorR']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="taxa" class="form-label">Taxa:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticTaxa" name="taxa" value="<?php echo $usuario['taxa']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombre" class="form-label">Nome:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticNome" name="nome" value="<?php echo $usuario['nome']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pix" class="form-label">Pix:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticPix" name="pix" value="<?php echo $usuario['pix']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tipConta" class="form-label">Tipo Conta:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticTipConta" name="tipConta" value="<?php echo $usuario['tipConta']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="conta" class="form-label">Conta:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticConta" name="conta" value="<?php echo $usuario['conta']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agencia" class="form-label">Agencia:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticAgencia" name="agencia" value="<?php echo $usuario['agencia']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="operacao" class="form-label">Operacao:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticOperacao" name="operacao" value="<?php echo $usuario['operacao']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="banco" class="form-label">Banco:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticBanco" name="banco" value="<?php echo $usuario['banco']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="criado_por" class="form-label">Vendedor(a):</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticCriado_por" name="criado_por" value="<?php echo $usuario['criado_por']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="loja" class="form-label">Loja:</label>
                                <div class="col-sm-15">
                                    <input type="text" readonly class="form-control" id="staticLoja" name="loja" value="<?php echo $usuario['loja']; ?>">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticNome" value="<?php echo $usuario['nome']; ?>">
                                </div>
                            </div> -->

                            <!-- <div class="form-group">
                                <label for="situacao" class="form-label">Status:</label>
                                <input type="text" id="situacao" name="situacao" class="form-control" value="<?php echo $usuario['nome_status']; ?>" required>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="situacao">Status:</label><br>
                                <select name="situacao" value="<?php echo $usuario['situacao']; ?>" required>
                                    <option value="1">Pago</option>
                                    <option value="2">Não Pago</option>
                                    <option value="3">Concluído</option>
                                    <option value="4">Pendente</option>
                                    <option value="5">Ativo</option>
                                    <option value="6">Inativo</option>
                                    <option value="7">Aberto</option>
                                    <option value="8">Fechado</option>
                                    <option value="9">Em Andamento</option>
                                    <option value="10">Encerrado</option>
                                    <option value="11">Aprovado</option>
                                    <option value="12">Reprovado</option>
                                    <option value="13">Enviado</option>
                                    <option value="14">Não Enviado</option>
                                    <option value="15">Agendado</option>
                                    <option value="16">Cancelado</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="situacao">Status:</label><br>
                                <select name="situacao" required>
                                    <option value="1" <?php if ($usuario['situacao'] == 1) echo 'selected'; ?>>Pago</option>
                                    <option value="2" <?php if ($usuario['situacao'] == 2) echo 'selected'; ?>>Não Pago</option>
                                    <option value="3" <?php if ($usuario['situacao'] == 3) echo 'selected'; ?>>Concluído</option>
                                    <!-- Outras opções aqui... -->
                                    <option value="4" <?php if ($usuario['situacao'] == 4) echo 'selected'; ?>>Pendente</option>
                                    <option value="5" <?php if ($usuario['situacao'] == 5) echo 'selected'; ?>>Ativo</option>
                                    <option value="6" <?php if ($usuario['situacao'] == 6) echo 'selected'; ?>>Inativo</option>
                                    <option value="7" <?php if ($usuario['situacao'] == 7) echo 'selected'; ?>>Aberto</option>
                                    <option value="8" <?php if ($usuario['situacao'] == 8) echo 'selected'; ?>>Fechado</option>
                                    <option value="9" <?php if ($usuario['situacao'] == 9) echo 'selected'; ?>>Em Andamento</option>
                                    <option value="10" <?php if ($usuario['situacao'] == 10) echo 'selected'; ?>>Encerrado</option>
                                    <option value="11" <?php if ($usuario['situacao'] == 11) echo 'selected'; ?>>Aprovado</option>
                                    <option value="12" <?php if ($usuario['situacao'] == 12) echo 'selected'; ?>>Reprovado</option>
                                    <option value="13" <?php if ($usuario['situacao'] == 13) echo 'selected'; ?>>Enviado</option>
                                    <option value="14" <?php if ($usuario['situacao'] == 14) echo 'selected'; ?>>Não Enviado</option>
                                    <option value="15" <?php if ($usuario['situacao'] == 15) echo 'selected'; ?>>Agendado</option>
                                    <option value="16" <?php if ($usuario['situacao'] == 16) echo 'selected'; ?>>Cancelado</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="nombre" class="form-label">Cpf</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo $usuario['cpf']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Rg:</label><br>
                                <input type="text" id="rg" name="rg" class="form-control" value="<?php echo $usuario['rg']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="celular" class="form-label">Celular </label>
                                <input type="text" id="celular" name="celular" class="form-control" value="<?php echo $usuario['celular']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade:</label><br>
                                <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $usuario['cidade']; ?>" required>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="profissao" class="form-label">profissao </label>
                                <input type="text" id="profissao" name="profissao" class="form-control" value="<?php echo $usuario['profissao']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sexo" class="form-label">sexo </label>
                                <input type="text" id="sexo" name="sexo" class="form-control" value="<?php echo $usuario['sexo']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cep" class="form-label">cep </label>
                                <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $usuario['cep']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="rua" class="form-label">rua </label>
                                <input type="text" id="rua" name="rua" class="form-control" value="<?php echo $usuario['rua']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="numero" class="form-label">numero </label>
                                <input type="text" id="numero" name="numero" class="form-control" value="<?php echo $usuario['numero']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="bairro" class="form-label">bairro </label>
                                <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $usuario['bairro']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="uf" class="form-label">uf </label>
                                <input type="text" id="uf" name="uf" class="form-control" value="<?php echo $usuario['uf']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nascimento" class="form-label">nascimento </label>
                                <input type="text" id="nascimento" name="nascimento" class="form-control" value="<?php echo $usuario['nascimento']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="origem" class="form-label">origem </label>
                                <input type="text" id="origem" name="origem" class="form-control" value="<?php echo $usuario['origem']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="loja" class="form-label">loja </label>
                                <input type="text" id="loja" name="loja" class="form-control" value="<?php echo $usuario['loja']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="complemento" class="form-label">complemento </label>
                                <input type="text" id="complemento" name="complemento" class="form-control" value="<?php echo $usuario['complemento']; ?>" required>
                            </div> -->




                            <!-- <div class="form-group">
                                <label for="nombre" class="form-label">Nome *</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Idade *</label>
                                <input type="text" id="edad" name="edad" class="form-control" value="<?php echo $usuario['edad']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correspondência:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="" value="<?php echo $usuario['correo']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Telefone </label>
                                <input type="tel" id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['telefono']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password">senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password']; ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="rol" class="form-label">Cargo de usuario *</label>
                                <input type="number" id="rol" name="rol" class="form-control" placeholder="Escreva o Cargo, 1 Admin, 2 Leitor.." value="<?php echo $usuario['rol']; ?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div> -->

                            <br>

                            <div class="mb-3">

                                <button type="submit" class="btn btn-success">Editar</button>
                                <a href="user.php" class="btn btn-danger">Cancelar</a>

                            </div>
                        </div>
                    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
</body>

</html>
