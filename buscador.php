<!-- Conexion a la base de datos -->
<?php include('config/database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <section id="sh-buscador">
        <div class="container head-biblioteca">
            <div class="row">
                <div class="col-5 title-biblioteca">
                    <h1>Biblioteca</h1>
                </div>
                <div class="col-7">
                    <?php include('includes/buscador.php') ?>
                </div>
            </div>
        </div>
    </section>

    <section id="sh-resultado">
        <div class="container cont-resultado">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-charlas-tab">
                            <!-- Consulta bdd -->
                            <?php

                            $buscar = $_POST['buscar'];

                            if (!empty($buscar)) {
                                $query = "SELECT *
                                          FROM charlas C
                                          INNER JOIN usuarios U
                                          ON C.id_usuario = U.id_usuario
                                          JOIN categorias CA
                                          ON C.id_categoria = CA.id_cat
                                          JOIN categorias_2 CA2
                                          ON C.id_categoria_2 = CA2.id_cat_2
                                          WHERE nombre LIKE '%$buscar%' or autor LIKE '%$buscar%'";
                                          $resultado = mysqli_query($conn, $query);
                                        }
                                        ?>
                            <?php while ($row = mysqli_fetch_array($resultado)) {?>
                            <?php if (isset($row['id_char'])) { ?>

                                        <div class="row item-search">
                                            <div class="col-1 sh-icon">
                                                <a class='youtubevideo' src='https://www.youtube.com/embed/<?php echo $row['link_video'] ?>' href="#videoyoutube" data-bs-toggle="modal" data-bs-target="#videoyoutube"><img src="assets/img/biblioteca/icon-video.svg" alt="Icono Video"></a>
                                            </div>

                                            <div class="col-2 sh-categoria">
                                                <h5 class="cat-charlas"><?php echo $row['nombre_cat']?></h5>
                                            </div>

                                            <div class="col-7 sh-titulo">
                                                <h5><?php echo $row['nombre'] ?></h5>
                                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="18.434" viewBox="0 0 15.8 18.434">
                                                        <path id="Icon_material-person-pin" data-name="Icon material-person-pin" d="M18.544,3H6.256A1.755,1.755,0,0,0,4.5,4.756V17.044A1.755,1.755,0,0,0,6.256,18.8H9.767L12.4,21.433,15.033,18.8h3.511A1.761,1.761,0,0,0,20.3,17.044V4.756A1.761,1.761,0,0,0,18.544,3ZM12.4,5.9a2.37,2.37,0,1,1-2.37,2.37A2.371,2.371,0,0,1,12.4,5.9Zm5.267,9.392H7.133V14.5c0-1.756,3.511-2.721,5.267-2.721s5.267.966,5.267,2.721Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                                    </svg><?php echo $row['autor']; ?>
                                                </h4>

                                                <!-- FILTRO DOCUMENTOS -->
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
                                                <!-- FIN FILTRO DOCUMENTOS -->
                                            </div>

                                            <div class="col-2 sh-fecha">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                    </svg>
                                                    <?php echo date("d-m-Y", strtotime($row['create_at'])); ?></p>
                                                <p><?php echo $row['nombre_cat'] ?></p>
                                            </div>


                                        </div>

                                    <?php
                                }
                            }
                            ?>

                            <?php
                            $buscar = $_POST['buscar'];
                            if (!empty($buscar)) {
                                $query = "SELECT *
                                          FROM procedimientos C
                                          INNER JOIN usuarios U
                                          ON C.id_usuario = U.id_usuario
                                          JOIN categorias CA
                                          ON C.id_categoria = CA.id_cat
                                          WHERE nombre LIKE '%$buscar%' or autor LIKE '%$buscar%'";
                                          $resultado = mysqli_query($conn, $query);
                            }
                            ?>
                            <?php
                            while ($row = mysqli_fetch_array($resultado)) {
                                ?>
                                <?php
                                if (isset($row['id_proc'])) {
                                    ?>
                                    <div class="row item-search">
                                        <div class="col-1 sh-icon">
                                            <a class='youtubevideo' src='https://www.youtube.com/embed/<?php echo $row['link_video'] ?>' href="#videoyoutube" data-bs-toggle="modal" data-bs-target="#videoyoutube">
                                                <img src="assets/img/biblioteca/icon-video.svg" alt="Icono Video">
                                            </a>
                                        </div>

                                        <div class="col-2 sh-categoria">
                                            <h5 class="cat-procedimientos">Procedimientos</h5>
                                        </div>

                                        <div class="col-7 sh-titulo">
                                            <h5><?php echo $row['nombre'] ?></h5>
                                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="18.434" viewBox="0 0 15.8 18.434">
                                                    <path id="Icon_material-person-pin" data-name="Icon material-person-pin" d="M18.544,3H6.256A1.755,1.755,0,0,0,4.5,4.756V17.044A1.755,1.755,0,0,0,6.256,18.8H9.767L12.4,21.433,15.033,18.8h3.511A1.761,1.761,0,0,0,20.3,17.044V4.756A1.761,1.761,0,0,0,18.544,3ZM12.4,5.9a2.37,2.37,0,1,1-2.37,2.37A2.371,2.371,0,0,1,12.4,5.9Zm5.267,9.392H7.133V14.5c0-1.756,3.511-2.721,5.267-2.721s5.267.966,5.267,2.721Z" transform="translate(-4.5 -3)" fill="#707070"/>
                                                </svg><?php echo $row['autor']; ?>
                                            </h4>

                                            <!-- FILTRO DOCUMENTOS -->
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
                                            <!-- FIN FILTRO DOCUMENTOS -->
                                        </div>

                                        <div class="col-2 sh-fecha">
                                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                </svg>
                                                <?php echo date("d-m-Y", strtotime($row['create_at'])); ?></p>
                                            <p><?php echo $row['nombre_cat'] ?></p>
                                        </div>


                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center justify-content-center news-vermas">
                <a href="biblioteca.php">Volver</a>
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
                    <iframe id='youtubeplay' width="799" height="460" src="" title="Standly - Panamera (Video Oficial)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <?php include('includes/footer.php') ?>
    <!-- Feedback Modal-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

    <script src="js/scripts.js"></script>

    <!-- Carrucel Equipo JS -->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>