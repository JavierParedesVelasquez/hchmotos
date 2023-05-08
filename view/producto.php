<?php
include '../config/admin/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo.png">
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">

    <title>Hchmotos</title>
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <img src="../assets/img/logo.png" alt="logo">
        </div>
        <nav class="header_nav">
            <a href="index.php">Inicio</a>
            <a href="productos.php" class="active">Productos</a>
            <a href="ubicacion.php">Ubicación</a>
        </nav>
        <nav class="header_nav2">
            <i class="fa-solid fa-user"></i>
        </nav>
        <div class="header_store">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        </div>
    </header>

    <section class="container1">
        <div class="container1_main">
            <h1>CONSIGUE LOS MEJORES IMPLEMENTOS Y ACCESORIOS PARA MOTEROS</h1>
        </div>
    </section>
    <section class="productos">

        <div class="container-items">
            <?php
            $sql = "SELECT * FROM producto";
            $result1 = mysqli_query($conexion, $sql);
            while ($mostrar1 = mysqli_fetch_array($result1)) {
            ?>
                <div class="item">
                    <figure>
                        <img style="" src="data:image/jpg;base64,<?php echo base64_encode($mostrar1['imagen_producto']) ?>" alt="">
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $mostrar1['nombre_producto'] ?></h2>
                        <p class="price">S/ <?php echo $mostrar1['precio_producto'] ?></p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>


    </section>


    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../assets/img/logo.png" alt="logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>HCH MOTOS , ofrece implementos y accesorios para moteros.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>HCH MOTOS</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>



















</body>
<script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>

</html>