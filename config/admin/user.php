<?php
session_start();
if (!isset($_SESSION['id_admin'])) header("location: ../login/login.php");
include '../login_home/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>
</head>

<body>
    <div class="container-fluid">
        <?php include 'include/barra1.php' ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <?php include 'include/nav.php' ?>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-12 col-sm-auto">
                        <h2 class="text-start"><i class="fa-solid fa-user"></i> Clientes</h2>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <a href="config/user/vistaAgregarUser.php" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-circle-plus"></i> Agregar Cliente</a>
                        </div>
                    </div>
                    <table class="table table-sm table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>DNI</th>
                                <th>Correo</th>
                                <th>Tlf</th>
                                <th>Direcci&oacute;n</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include 'config/conexion2.php';
                            $sql = "SELECT * FROM cliente";
                            $resultado = $conexion->query($sql);
                            while ($fila = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $fila['nombres_cliente'] ?></td>
                                    <td><?php echo $fila['apellidos_cliente'] ?></td>
                                    <td><?php echo $fila['dni_cliente'] ?></td>
                                    <td><?php echo $fila['correo_cliente'] ?></td>
                                    <td><?php echo $fila['telefono_cliente'] ?></td>
                                    <td><?php echo $fila['direccion_cliente'] ?></td>
                                    <td>
                                        <a href="config/user/vistaEditarUser.php?id_cliente=<?php echo $fila["id_cliente"] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        <a href="config/user/eliminarUser.php?id_cliente=<?php echo $fila["id_cliente"] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>

                    </table>

                </div>
            </main>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
</body>

</html>