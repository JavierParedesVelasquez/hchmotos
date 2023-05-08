<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrarse</title>
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Registrarse</h4>
                                    </div>
                                    <form action="registrar.php" method="post" accept-charset="utf-8" >
                                        <p>Porfavor, ingrese sus datos:</p>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Nombre</label>
                                            <input type="text" id="txtnombre" name="txtnombre" class="form-control" placeholder="Ingrese su nombre" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Apellidos</label>
                                            <input type="text" id="txtapellidos" name="txtapellidos" class="form-control" placeholder="Ingrese sus Apellidos" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">DNI</label>
                                            <input type="text" id="txtdni" name="txtdni" class="form-control" placeholder="Ingrese su DNI" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Correo</label>
                                            <input type="text" id="txtcorreo" name="txtcorreo" class="form-control" placeholder="Ingrese su Correo" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Telefono</label>
                                            <input type="text" id="txttelefono" name="txttelefono" class="form-control" placeholder="Ingrese su Telefono" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Direcci&oacute;n</label>
                                            <input type="text" id="txtdireccion" name="txtdireccion" class="form-control" placeholder="Ingrese su Direcci&oacute;n" />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form2Example11">Contraseña</label>
                                            <input type="password" id="txtpass" name="txtpass" class="form-control" placeholder="Ingrese su Direcci&oacute;n" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Registrarse</button>
                                         
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿Ya te has registrado?</p>
                                            <a href="../ingresar/login.php" type="button" class="btn btn-outline-danger">Entrar</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 right">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">BIENVENIDOS</h4>
                                    <p class="small mb-0">Hola! bienvenidos a la nuestra pagina, que cuenta con los mejores productos con respecto a motocicletas, porfavor registrese para poder ingresar a la pagina.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>