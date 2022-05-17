<?php
session_start();
if (!isset($_SESSION['validado'])) {
    header('location:login2.php');
}
if (isset($_GET['tipoelem'])) {
    include('elementosConfiguracion/elementoConfiguracion.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inventario</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="fontawesome-free-6.1.1-web/css/all.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <?php include('includes/nav.php'); ?>

    <div id="layoutSidenav">

        <?php include('includes/sidenav.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Formulario de Inventario</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Inventario</li>
                    </ol>
                    <nav class="navbar navbar-light bg-light">
                        <div class="justify-content-start">
                            <a href="registro.php?tipoelem=2" class="btn btn-outline-dark me-2"><i class="fa-solid fa-computer"></i> Computadora</a>
                            <a href="registro.php?tipoelem=3" class="btn btn-outline-success me-2"><i class="fa-solid fa-tv"></i> Monitor</a>
                            <a href="registro.php?tipoelem=4" class="btn btn-outline-primary me-2"><i class="fa-solid fa-computer-mouse"></i> Mouse</a>
                            <a href="registro.php?tipoelem=5" class="btn btn-outline-danger me-2"><i class="fa-solid fa-keyboard"></i> Teclado</a>
                            <a href="registro.php?tipoelem=6" class="btn btn-outline-info me-2"><i class="fa-solid fa-charging-station"></i> Estabilizador</a>
                        </div>
                    </nav>
                    <br>
                    <form action="Backend/SQL_RegistroElementoConfi.php" method="POST">

                        <?php
                        if (isset($inputs)) {
                        ?>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title"><?php echo ($rowNombreTipo['Tipo_Nombre']); ?></h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label for="codpatrimonial">CODIGO PATRIMONIAL</label>
                                                        <input type="text" class="form-control" id="codpatrimonial" name="codpatrimonial" placeholder="CODIGO PATRIMONIAL" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label for="descripcion">DESCRIPCION</label>
                                                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="DESCRIPCION" autocomplete="off">
                                                    </div>
                                                </div>
                                                <?php echo $inputs; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="tipoelemento" value=<?php echo $_GET['tipoelem'] ?> hidden>                            
                        <?php
                        }
                        ?>
                        <br>
                        <div class="form-row">
                            <button type="submit" class="btn btn-success">REGISTRAR</button>
                        </div>
                    </form>

                </div>
            </main>
            <?php include('includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>