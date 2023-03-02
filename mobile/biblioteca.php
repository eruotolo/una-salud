<!-- Conexion a la base de datos -->
<?php include('../config/database.php') ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Una Salud | Biblioteca</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.svg"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Fonts Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>

<section class="cabezal">
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand logo" href="../index.php"><img src="assets/img/logo-Una-salud-18.svg" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end toogle-dark" tabindex="-1" id="offcanvasNavbar"
                 aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../mobile/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../mobile/biblioteca.php">Biblioteca</a>
                        </li>
                    </ul>
                    <a class="icono-redes icono-insta" href="https://www.instagram.com/unasalud_chile_argentina/" target="_blank"><img src="assets/img/icono-instagram.svg" alt="Instagram"></a>
                    <a class="icono-redes" href="https://www.youtube.com/channel/UCQ7HHoDed24QGu0ROHwd85w" target="_blank"><img src="assets/img/icono-youtube.svg" alt="Youtube"></a>
                </div>
            </div>

        </div>
    </nav>
</section>

<section id="main">

    <div class="first-biblioteca">
        <div class="container">
            <div class="row">
                <div class="col-12 title-biblioteca ">
                    <h2>Biblioteca</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="cont-biblioteca">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                            <!-- DETALLE CHARLA -->

                            <!-- Consulta bdd -->
                            <?php
                            if (!empty($_REQUEST["nume"])) {
                                $_REQUEST["nume"] = $_REQUEST["nume"];
                            } else {
                                $_REQUEST["nume"] = '1';
                            }
                            if ($_REQUEST["nume"] == "") {
                                $_REQUEST["nume"] = "1";
                            }
                            $articulos = mysqli_query($conn, "SELECT * FROM charlas  ;");
                            $num_registros = @mysqli_num_rows($articulos);
                            $registros = '100';
                            $pagina = $_REQUEST["nume"];
                            if (is_numeric($pagina))
                                $inicio = (($pagina - 1) * $registros);
                            else
                                $inicio = 0;
                            $busqueda = mysqli_query($conn, "SELECT *
                            FROM charlas C
                            INNER JOIN usuarios U
                            ON C.id_usuario = U.id_usuario
                            JOIN categorias CA
                            ON C.id_categoria = CA.id_cat
                            JOIN categorias_2 CA2
                            ON C.id_categoria_2 = CA2.id_cat_2
                            ORDER BY C.id_char DESC 
                            LIMIT $inicio,$registros;");
                            $paginas = ceil($num_registros / $registros);

                            ?>
                            <?php while ($row = mysqli_fetch_assoc($busqueda)) { ?>
                                <div class="menu-content">
                                    <div class="etiquetas">
                                        <div class="categoria">
                                            <h5 class="h5"><?php echo $row['nombre_cat'] ?></h5>
                                        </div>
                                        <div class="categoria2">
                                            <h5 class="h5"><?php echo $row['nombre_cat_2'] ?></h5>
                                        </div>
                                        <!--<a href="" class="btn color2"> Medio ambiente </a> -->
                                    </div>
                                    <div class="row col-12 titulos-biblioteca">
                                        <h1><?php echo $row['nombre'] ?></h1>
                                        <h4><?php echo $row['autor']; ?></h4>
                                    </div>
                                    <div class="row col-12 pt-2">
                                        <div class="col-10 date-biblioteca">
                                            <p>Fecha publicación: <?php echo date("d/m/Y", strtotime($row['create_at'])); ?></p>


                                        </div>
                                        <div class="col-2">
                                            <form action="detalle-charla.php" method="post">
                                                <input type="hidden" name="id_char" id="id_char" value="<?php echo $row['id_char'] ?>">
                                                <input class="btn color3 ps-xxl-4 pe-xxl-4 btn-ver" type="submit" name="edit" value="Ver">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- DETALLE PROCEDIMIENTO -->

                            <!-- Consulta bdd -->
                            <?php
                            if (!empty($_REQUEST["nume"])) {
                                $_REQUEST["nume"] = $_REQUEST["nume"];
                            } else {
                                $_REQUEST["nume"] = '1';
                            }
                            if ($_REQUEST["nume"] == "") {
                                $_REQUEST["nume"] = "1";
                            }
                            $articulos = mysqli_query($conn, "SELECT * FROM procedimientos  ;");
                            $num_registros = @mysqli_num_rows($articulos);
                            $registros = '100';
                            $pagina = $_REQUEST["nume"];
                            if (is_numeric($pagina))
                                $inicio = (($pagina - 1) * $registros);
                            else
                                $inicio = 0;
                            $busqueda = mysqli_query($conn, "SELECT *
                            FROM procedimientos C
                            INNER JOIN usuarios U
                            ON C.id_usuario = U.id_usuario
                            JOIN categorias CA
                            ON C.id_categoria = CA.id_cat
                            ORDER BY C.id_proc DESC 
                            LIMIT $inicio,$registros;");
                            $paginas = ceil($num_registros / $registros);

                            ?>
                            <?php while ($row = mysqli_fetch_assoc($busqueda)) { ?>
                                <div class="menu-content">
                                    <div class="etiquetas">
                                        <div class="categoria">
                                            <h5 class="h5">Procedimientos</h5>
                                        </div>

                                        <!--<a href="" class="btn color2"> Medio ambiente </a> -->
                                    </div>
                                    <div class="row col-12 titulos-biblioteca">
                                        <h1><?php echo $row['nombre'] ?></h1>
                                        <h4><?php echo $row['autor']; ?></h4>
                                    </div>
                                    <div class="row col-12 pt-2">
                                        <div class="col-10 date-biblioteca">
                                            <p>Fecha publicación: <?php echo date("d/m/Y", strtotime($row['create_at'])); ?></p>
                                        </div>
                                        <div class="col-2">

                                            <form action="detalle-procedimiento.php" method="post">
                                                <input type="hidden" name="id_proc" id="id_proc" value="<?php echo $row['id_proc'] ?>">
                                                <input class="btn color3 ps-xxl-4 pe-xxl-4 btn-ver" type="submit" name="edit" value="Ver">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- DETALLE DOCUMENTO -->

                            <!-- Consulta bdd -->
                            <?php
                            if (!empty($_REQUEST["nume"])) {
                                $_REQUEST["nume"] = $_REQUEST["nume"];
                            } else {
                                $_REQUEST["nume"] = '1';
                            }
                            if ($_REQUEST["nume"] == "") {
                                $_REQUEST["nume"] = "1";
                            }
                            $articulos = mysqli_query($conn, "SELECT * FROM documentos  ;");
                            $num_registros = @mysqli_num_rows($articulos);
                            $registros = '100';
                            $pagina = $_REQUEST["nume"];
                            if (is_numeric($pagina))
                                $inicio = (($pagina - 1) * $registros);
                            else
                                $inicio = 0;
                            $busqueda = mysqli_query($conn, "SELECT * 
                            FROM documentos
                            WHERE id_charla_doc IS NULL
                            AND id_procedimiento_doc IS NULL 
                            ORDER BY id_doc DESC
                            LIMIT $inicio,$registros;");
                            $paginas = ceil($num_registros / $registros);

                            ?>
                            <?php while ($row = mysqli_fetch_assoc($busqueda)) { ?>
                                <div class="menu-content-box menu-content">
                                    <div class="etiquetas">
                                        <div class="categoria" style="width: 55%;">
                                            <h5 class="h5">Otros documentos</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-12 titulos-biblioteca">
                                        <h1><?php echo $row['nombre_doc'] ?></h1>
                                        <h4><?php echo $row['autor'] ?></h4>
                                    </div>

                                    <div class="row col-12 pt-2">
                                        <div class="col-9 date-biblioteca">
                                            <p>Fecha publicación: <?php echo date("d/m/Y", strtotime($row['create_at'])); ?></p>
                                        </div>
                                        <div class="col-3 icon-option">
                                            <!--<a href="../<?php echo $row['ruta_doc'] ?>" readfile="<?php echo $row['nombre_doc'] ?>"><img class="img-menu-sponsor" src="assets/img/biblioteca/BIBLIOTECA-Una-salud-16.svg" alt="logo" target="_blank"></a>-->
                                            <a href="../<?php echo $row['ruta_doc'] ?>" download="<?php echo $row['nombre_doc'] ?>"><img class="img-menu-sponsor" src="assets/img/biblioteca/descarga-unasalud-06.svg" alt="logo" target="_blank"></a>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 sub-pie">
                    <h5>CONTACTO</h5>
                    <p class="pie-email"><a href="mailto:unasalud@uss.cl"><i class="fa fa-envelope-o" aria-hidden="true"></i> unasalud@uss.cl</a></p>
                    <hr>
                </div>

                <div class="col-7 sub-pie img-right">
                    <img src="assets/img/corporaciones/uss.svg" alt="USS" class="img-fluid uss-img">
                </div>
                <div class="col-5 sub-pie">
                    <img src="assets/img/corporaciones/vcm.svg" alt="vcm" class="img-fluid vcm-img">
                </div>

                <div class="col-7 sub-pie img-right">
                    <img src="assets/img/corporaciones/u-rio-negro.svg" alt="URN" class="img-fluid urn-img">
                </div>
                <div class="col-5 sub-pie">
                    <img src="assets/img/corporaciones/massalud.svg" alt="Más Salud" class="img-fluid ms-img">
                </div>

                <div class="col-7 sub-pie img-right">
                    <img src="assets/img/corporaciones/masazul.svg" alt="Más Azul" class="img-fluid ma-img">
                </div>
                <div class="col-5 sub-pie">
                    <img src="assets/img/corporaciones/agcid.svg" alt="Agcid" class="img-fluid agc-img">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 footer-copy">
                    <p>Desarrollado por <a href="https://indaga.me" target="_blank">Indaga</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

