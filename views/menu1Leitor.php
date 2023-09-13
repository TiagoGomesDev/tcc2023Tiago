<link rel="icon" type="image/png" href="../imgs/Glogo.jpg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- <a class="navbar-brand" href="user.php">Seu Logotipo</a> -->
        <a class="navbar-brand" href="lectorC.php">
            <img src="../imgs/Glogo.jpg" alt="Gcred" style="width: 100px; max-width: 100%; height: auto; border-radius: 50%;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a type="button" class="nav-link" data-toggle="modal" data-target="#create">
                        <span class="glyphicon glyphicon-plus"></span> Novo cliente
                        <i class="fa fa-plus"></i> </a>
                </li> -->
                <li class="nav-item">
                    <a href="lectorC.php" class="nav-link"><b>HOME</b> </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../includes/reporte.php" class="nav-link"><b>PDF</b> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/excel.php">Excel
                        <i class="fa fa-table" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="grafica.php" class="nav-link"><b>Grafico</b> </a>
                </li> -->
                <li class="nav-item">
                    <a href="calculosLeitor.php" class="nav-link"><b>Calculo Taxa</b> </a>
                </li>
                <li class="nav-item">
                    <a href="cartao2Leitor.php" class="nav-link"><b>Calculo Cartão</b> </a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Calculadoras
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="calculos.php" class="nav-link"><b>Taxa</b> </a>
                    <a href="cartao.php" class="nav-link"><b>Cartão</b> </a>
                    </div>
                </li> -->

                <li class="nav-item active">
                    <a class="nav-link">
                        <h5>Usuário: <?php echo $_SESSION['nombre']; ?></h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/_sesion/cerrarSesion.php">Sair
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                    </a>
                </li>
                <!-- <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar">
                        <hr>
                    </form>
                </div> -->
                
                
                <!-- CAMPO BUSCADOR DA TELA USER -->
                <!-- <form class="form-inline">
                    <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                <!-- </form> -->



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
            </ul>
        </div>
    </div>
</nav>
<br>
<br>