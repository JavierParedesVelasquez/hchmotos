<?php
session_start();
if (!isset($_SESSION['id_cliente'])) header("location: ../config/login_home/ingresar/login.php");
include '../config/admin/conexion.php';
include '../config/admin/conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <title>Hchmotos</title>
</head>

<body class="body">
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../assets/img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top me-2">
            <a class="navbar-brand fw-bold" href="#">Hchmotos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contactos">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn btn-primary text-white mx-2" href="../config/login_home/ingresar/login.php">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn btn-secondary text-white mx-2 " href="../config/login_home/registrar/index.php">REGISTRARSE</a>
                    </li>
                </ul>
                <a class="nav-link text-danger fw-bold  me-5"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres_cliente'] ?> <?php echo $_SESSION['apellidos_cliente'] ?></a>
                <form class="d-flex">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- SECTION1 -->
    <section id="inicio">
        <div class="container my-5">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <h2 class="text_banner">Bienvenido! <br>PAGINA OFICIAL DE VENTA DE ACCESORIOS REPUESTOS E INDUMENTARIA PARA MOTORIZADOS Y MOTOCICLETAS.</h2>
                </div>
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/img/banner1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/banner2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/banner3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="productos">
        <div class="container ">
            <div class="row">
                <h2 class="fw-bold my-5 title_productos text-center">CONSIGUE LOS MEJORES IMPLEMENTOS <br> Y ACCESORIOS PARA MOTEROS</h2>
                <?php
                $sql = "SELECT * FROM producto";
                $result1 = mysqli_query($conexion, $sql);
                while ($mostrar1 = mysqli_fetch_array($result1)) {
                ?>
                    <div class="col-4 my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar1['imagen_producto']) ?>" class="img_producto card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $mostrar1['nombre_producto'] ?></h5>
                                <p class="card-text text-danger fw-bold">S/ <?php echo $mostrar1['precio_producto'] ?></p>
                                <a href="http://wa.me/940108903?text=!Hola¡ estuve navegando en el sitio web de Hchmotos y me interesa obtener mas información sobre sus productos." target="_blank" class="btn btn-success">Pedir</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section id="wsp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="http://wa.me/940108903?text=!Hola¡ estuve navegando en el sitio web de Hchmotos y me interesa obtener mas información sobre sus productos." target="_blank" class="btn_wsp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <footer id="contactos" class="text-center text-white mt-5" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/hchmotos" role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>


            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <span class="text-dark fw-bold">Hchmotos</span>
        </div>
        <!-- Copyright -->
    </footer>



    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonyms"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>ou
    -->
</body>

</html>