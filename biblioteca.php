<!-- Conexion a la base de datos -->
<?php include('config/database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "mobile/biblioteca.php";
        }
    </script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Una salud - Biblioteca</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.svg" />

    <!-- Fuente Open Sans -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Slider -->
    <link href="css/slider.css" rel="stylesheet" />

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Carrusel Equipo -->
    <link href="css/carrousel.css" rel="stylesheet" />

    <!-- icons -->

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body id="page-top">
<!-- MENU DE NAVEGACION-->
<?php include('includes/nav.php') ?>
<!-- HEADER SLIDER-->

<section id="new-biblioteca">
    <div class="container head-biblioteca">
        <div class="d-flex flex-row justify-content-between align-items-center title-biblioteca">
            <h1>Biblioteca</h1>
            <?php include('includes/buscador.php') ?>
        </div>

    </div>

    <div id="filtro-biblioteca" class="container ">
        <div class="d-flex flex-row filtro-biblioteca align-items-center">
            <p>Categoría</p>
            <select class="form-select" id="sort-recruiters">
                <!--<option value="All">Seleccionar</option>-->
                <option value="charlas">Charlas y conversatorios</option>
                <option value="procedimientos">Procedimientos</option>
                <option value="documentos">Documentos</option>
            </select>
        </div>
    </div>

    <div class="container contenido-biblioteca">

        <div class="row recruiter">
            <!-- CHARLAS Y CONVERSATORIOS -->
            <div class="col-12 recruiter-info" data-custom-type="charlas">
                <div class="d-flex flex-wrap justify-content-between">
                    <?php
                    $query = "SELECT *
                        FROM charlas C
                        INNER JOIN usuarios U
                        ON C.id_usuario = U.id_usuario
                        JOIN categorias CA
                        ON C.id_categoria = CA.id_cat
                        JOIN categorias_2 CA2
                        ON C.id_categoria_2 = CA2.id_cat_2
                        ORDER BY C.id_char DESC";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_Array($result_task)) {
                        $nombre = $row['nombre'];
                        $descripcion = $row['descripcion'];
                    ?>
                        <!-- CARD INICIO -->
                        <div class="card">
                            <div class="card-head-charlas d-flex align-items-center justify-content-center">
                                <a href="#videoyoutube" data-bs-toggle="modal" data-bs-target="#videoyoutube">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                    </svg>
                                </a>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <div class="categorias d-flex flex-row">
                                    <h5 class="cat-charlas"><?php echo $row['nombre_cat'] ?></h5>
                                    <!--<h5 class="cat-salud"><?php echo $row['nombre_cat_2'] ?></h5>-->
                                </div>
                                <div class="tit-card">
                                    <h1><?php echo substr($nombre, 0,70)?> </h1>
                                </div>
                                <div class="card-descrip">
                                    <p><?php echo substr($descripcion, 0,250) ?></p>
                                </div>
                            </div>

                            <div class="card-footer d-flex flex-column">
                                <div class="footer-autor d-flex flex-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="18.434" viewBox="0 0 15.8 18.434">
                                        <path id="Icon_material-person-pin" data-name="Icon material-person-pin" d="M18.544,3H6.256A1.755,1.755,0,0,0,4.5,4.756V17.044A1.755,1.755,0,0,0,6.256,18.8H9.767L12.4,21.433,15.033,18.8h3.511A1.761,1.761,0,0,0,20.3,17.044V4.756A1.761,1.761,0,0,0,18.544,3ZM12.4,5.9a2.37,2.37,0,1,1-2.37,2.37A2.371,2.371,0,0,1,12.4,5.9Zm5.267,9.392H7.133V14.5c0-1.756,3.511-2.721,5.267-2.721s5.267.966,5.267,2.721Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                    </svg>
                                    <p><?php echo $row['autor'] ?></p>
                                </div>
                                <div class="footer-fecha d-flex flex-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.4" height="20.444" viewBox="0 0 18.4 20.444">
                                        <path id="Icon_material-date-range" data-name="Icon material-date-range" d="M10.633,12.2H8.589v2.044h2.044Zm4.089,0H12.678v2.044h2.044Zm4.089,0H16.767v2.044h2.044Zm2.044-7.156H19.833V3H17.789V5.044H9.611V3H7.567V5.044H6.544A2.035,2.035,0,0,0,4.51,7.089L4.5,21.4a2.044,2.044,0,0,0,2.044,2.044H20.856A2.05,2.05,0,0,0,22.9,21.4V7.089A2.05,2.05,0,0,0,20.856,5.044Zm0,16.356H6.544V10.156H20.856Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                    </svg>
                                    <p>Fecha de Publicación: <?php echo date("d/m/Y", strtotime($row['create_at'])); ?></p>
                                </div>
                                <div class="footer-download d-flex flex-column">
                                    <?php
                                    $idcharla = $row['id_char'];
                                    $query = "SELECT *
                                    FROM documentos D
                                    INNER JOIN charlas C
                                    ON D.id_charla_doc = C.id_char
                                    WHERE id_charla_doc = $idcharla";
                                    $result_task1 = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_Array($result_task1)) {
                                        ?>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                            <a href="<?php echo $row['ruta_doc'] ?>" download="<?php echo $row['nombre_doc'] ?>"><?php echo $row['nombre_doc'] ?></a></p>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- CARD FIN -->
                        <?php
                    }
                    ?>
                </div>
            </div>

            <!-- PROCEDIMIENTOS -->
            <div class="col-12 recruiter-info" data-custom-type="procedimientos" style="display: none">
                <div class="d-flex flex-wrap justify-content-between">
                    <?php
                    $query = "SELECT *
                        FROM procedimientos C
                        INNER JOIN usuarios U
                        ON C.id_usuario = U.id_usuario
                        JOIN categorias CA
                        ON C.id_categoria = CA.id_cat";
                    $result_task2 = mysqli_query($conn, $query);
                    while ($procedimientos = mysqli_fetch_Array($result_task2)) {
                    $nombre = $procedimientos['nombre'];
                    $descripcion = $procedimientos['descripcion'];
                    ?>
                    <!-- CARD INICIO -->
                        <div class="card">
                            <div class="card-head-procedimientos d-flex align-items-center justify-content-center">
                                <a href="#videoyoutube" data-bs-toggle="modal" data-bs-target="#videoyoutube"><a href="#videoyoutube" data-bs-toggle="modal" data-bs-target="#videoyoutube">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="categorias d-flex flex-row">
                                    <h5 class="cat-procedimientos">Procedimientos</h5>

                                </div>
                                <div class="tit-card">
                                    <h1><?php echo substr($nombre, 0,70)?> </h1>
                                </div>
                                <div class="card-descrip">
                                    <p><?php echo substr($descripcion, 0,250) ?></p>
                                </div>
                            </div>
                            <div class="card-footer d-flex flex-column">
                                <div class="footer-autor d-flex flex-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="18.434" viewBox="0 0 15.8 18.434">
                                        <path id="Icon_material-person-pin" data-name="Icon material-person-pin" d="M18.544,3H6.256A1.755,1.755,0,0,0,4.5,4.756V17.044A1.755,1.755,0,0,0,6.256,18.8H9.767L12.4,21.433,15.033,18.8h3.511A1.761,1.761,0,0,0,20.3,17.044V4.756A1.761,1.761,0,0,0,18.544,3ZM12.4,5.9a2.37,2.37,0,1,1-2.37,2.37A2.371,2.371,0,0,1,12.4,5.9Zm5.267,9.392H7.133V14.5c0-1.756,3.511-2.721,5.267-2.721s5.267.966,5.267,2.721Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                    </svg>
                                    <p><?php echo $procedimientos['autor'] ?></p>
                                </div>
                                <div class="footer-fecha d-flex flex-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.4" height="20.444" viewBox="0 0 18.4 20.444">
                                        <path id="Icon_material-date-range" data-name="Icon material-date-range" d="M10.633,12.2H8.589v2.044h2.044Zm4.089,0H12.678v2.044h2.044Zm4.089,0H16.767v2.044h2.044Zm2.044-7.156H19.833V3H17.789V5.044H9.611V3H7.567V5.044H6.544A2.035,2.035,0,0,0,4.51,7.089L4.5,21.4a2.044,2.044,0,0,0,2.044,2.044H20.856A2.05,2.05,0,0,0,22.9,21.4V7.089A2.05,2.05,0,0,0,20.856,5.044Zm0,16.356H6.544V10.156H20.856Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                    </svg>
                                    <p>Fecha de Publicación: <?php echo date("d/m/Y", strtotime($procedimientos['create_at'])); ?></p>
                                </div>
                                <div class="footer-download d-flex flex-column">
                                    <?php
                                    $id_proc = $procedimientos['id_proc'];
                                    $query = "SELECT *
                                    FROM documentos D
                                    INNER JOIN procedimientos P
                                    ON D.id_procedimiento_doc = P.id_proc
                                    WHERE id_procedimiento_doc = $id_proc";
                                    $result_task3 = mysqli_query($conn, $query);
                                    while ($procedimientos = mysqli_fetch_Array($result_task3)) {
                                        ?>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                            <a href="<?php echo $procedimientos['ruta_doc'] ?>" download="<?php echo $procedimientos['nombre_doc'] ?>"><?php echo $procedimientos['nombre_doc'] ?></a></p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <!-- CARD FIN -->
                    <?php
                        }
                    ?>
                </div>
            </div>

            <!-- DOCUMENTOS -->
            <div class="col-12 recruiter-info" data-custom-type="documentos" style="display:none">
                <div class="d-flex flex-wrap ">
                    <?php
                    $query = "SELECT *
                        FROM documentos C
                        WHERE id_charla_doc IS NULL
                        AND id_procedimiento_doc IS NULL 
                        ORDER BY id_doc DESC";
                        $result_task4 = mysqli_query($conn, $query);
                        while ($documentos = mysqli_fetch_Array($result_task4)) {
                            $nombre = $documentos['nombre_doc'];

                        ?>
                    <!-- CARD INICIO -->
                    <div class="card card-documentos">
                        <div class="card-head-documentos d-flex align-items-center justify-content-center">
                            <a href="<?php echo $documentos['ruta_doc'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                            </a>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <div class="categorias d-flex flex-row">
                                <h5 class="cat-documentos">Documentos</h5>
                            </div>
                            <div class="tit-card">
                                <h1><?php echo substr($nombre, 0,70)?> </h1>
                            </div>

                        </div>

                        <div class="card-footer d-flex flex-column">
                            <div class="footer-autor d-flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="18.434" viewBox="0 0 15.8 18.434">
                                    <path id="Icon_material-person-pin" data-name="Icon material-person-pin" d="M18.544,3H6.256A1.755,1.755,0,0,0,4.5,4.756V17.044A1.755,1.755,0,0,0,6.256,18.8H9.767L12.4,21.433,15.033,18.8h3.511A1.761,1.761,0,0,0,20.3,17.044V4.756A1.761,1.761,0,0,0,18.544,3ZM12.4,5.9a2.37,2.37,0,1,1-2.37,2.37A2.371,2.371,0,0,1,12.4,5.9Zm5.267,9.392H7.133V14.5c0-1.756,3.511-2.721,5.267-2.721s5.267.966,5.267,2.721Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                </svg>
                                <p><?php echo $documentos['autor'] ?></p>
                            </div>
                            <div class="footer-fecha d-flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.4" height="20.444" viewBox="0 0 18.4 20.444">
                                    <path id="Icon_material-date-range" data-name="Icon material-date-range" d="M10.633,12.2H8.589v2.044h2.044Zm4.089,0H12.678v2.044h2.044Zm4.089,0H16.767v2.044h2.044Zm2.044-7.156H19.833V3H17.789V5.044H9.611V3H7.567V5.044H6.544A2.035,2.035,0,0,0,4.51,7.089L4.5,21.4a2.044,2.044,0,0,0,2.044,2.044H20.856A2.05,2.05,0,0,0,22.9,21.4V7.089A2.05,2.05,0,0,0,20.856,5.044Zm0,16.356H6.544V10.156H20.856Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                </svg>
                                <p>Fecha de Publicación: <?php echo date("d/m/Y", strtotime($procedimientos['create_at'])); ?></p>
                            </div>

                        </div>
                    </div>
                    <!-- CARD FIN -->
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Modal -->
<div class="modal fade" id="videoyoutube" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-video-body">
                <iframe width="799" height="460" src="https://www.youtube.com/embed/<?php echo $row['link_video'] ?>" title="Standly - Panamera (Video Oficial)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Footer-->
<?php include('includes/footer.php') ?>
<!-- Feedback Modal-->

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Carrucel Equipo JS -->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<!-- Optional JavaScript; choose one -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    //Filter Recruiters
    $('select#sort-recruiters').change(function() {
        var filter = $(this).val();
        filterList(filter);
    });

    // Recruiters filter function
    function filterList(value) {
        var list = $(".recruiter .recruiter-info");
        $(list).hide();
        if (value == "All") {
            $(".recruiter").find("div").each(function (i) {
                $(this).show();
            });
        } else {
            // *=" means that if a data-custom type contains multiple values, it will find them
            $(".recruiter").find("div[data-custom-type*=" + value + "]").each(function (i) {
                $(this).show();
            });
        }
    }
</script>

</body>

</html>