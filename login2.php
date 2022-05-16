<?php include('Backend/SQL_validacion.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <br><br><br><br><br><br>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Sistema de Inventario</h2>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="wrap d-md-flex">
                                    <div class="img" style="background-image: url(images/inventario4.webp);">
                                    </div>
                                    <div class="login-wrap p-4 p-md-5">
                                        <div class="d-flex">
                                            <div class="w-100">
                                                <h3 class="mb-4">Iniciar Sesión</h3>
                                            </div>
                                            <div class="w-100">

                                            </div>
                                        </div>
                                        <form action="login2.php" method="POST" class="signin-form">
                                            <div class="form-group mb-3">
                                                <label class="label" for="usuario">Usuario</label>
                                                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="label" for="contrasenia">Contraseña</label>
                                                <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Iniciar Sesión</button>
                                            </div>
                                            <?php
                                                if($validacion == 0){ ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Credenciales incorrectas
                                            </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <?php include('includes/footer.php'); ?>
        </div>
    </div>


</body>

</html>