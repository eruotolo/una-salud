<?php include('config/database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "mobile/index.php";
        }
    </script>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Una Salud</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.svg"/>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css"/>

    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

    <!-- Slider -->
    <link rel="stylesheet" href="css/slider.css"/>

    <!-- Carrusel Equipo -->
    <link rel="stylesheet" href="css/carrousel.css"/>

    <!-- icons -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>

    <!-- Animaciones -->
    <link rel="stylesheet" href="css/animaciones.css"/>

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
          rel="stylesheet"/>

    <!-- Fuente Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet"/>

</head>

<body id="page-top">

<?php include('includes/header.php') ?>

<section id="slider">
    <div class="container" id="cargaFade">
        <div class="row">
            <div class="col-12">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides active">
                        <img src="assets/img/slider-index/On-Health-04.jpg" style="width: 100%"/>
                        <!-- <div class="text">TEXTO 1</div> -->
                    </div>

                    <div class="mySlides">
                        <img src="assets/img/slider-index/One-Health-05.jpg" style="width: 100%"/>
                        <!-- <div class="text">TEXTO 2</div> -->
                    </div>

                    <div class="mySlides">
                        <img src="assets/img/slider-index/One-Health-06.jpg" style="width: 100%"/>
                        <!-- <div class="text">TEXTO 3</div> -->
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- The dots/circles -->
            </div>
        </div>
    </div>
</section>
<section id="contenido-video">
    <div class="container">
        <!-- SECCION NAVTABS-->

        <div class="row gris">
            <div class="col-5">
                <div class="content-tabs-link">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 ps-lg-5 pt-5" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active " id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">
                                El Proyecto
                                <hr/>
                            </button>
                            <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">
                                ¿Qué es una salud?
                                <hr/>
                            </button>

                            <button class="nav-link " id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">
                                ¿Qué temas aborda el proyecto?
                                <hr/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/1.jpeg" alt=""/>
                            <p>
                                Una Salud Chile-Argentina es un
                                <span>
                                    Proyecto Colaborativo binacional
                                </span>
                                liderado por la

                                <span>Universidad San Sebastián,Sede Patagonia y la Universidad de Río Negro,Sede
                                    Valle Medio-Alto Valle.
                                </span>
                            </p>
                            <p>

                                El objetivo es compartir experiencias y transferir conocimientos entre investigadores,
                                académicos y estudiantes de ambas universidades,que permitan reflexionar sobre el
                                desarrollo sostenible de la zona austral de Chile y Argentina bajo el concepto
                                'Una Salud'.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/unasalud2.png" alt=""/>
                            <p>
                                El concepto 'Una salud' postula que
                                <span>
                                    la salud de las personas está
                                    estrechamente conectada con la salud de los animales,
                                </span>
                                la que a su vez se encuentra
                                interconectada con la
                                <span>
                                    salud del medio ambiente
                                </span>
                                en el que coexisten.

                            </p>
                            <p>
                                En este sentido,la Organización Mundial de la Salud (OMS),plantea la necesidad de
                                aplicar a nivel mundial estrategias 'One Health' para facilitar la
                                <span>
                                    gestión integrada
                                    de la salud y con ello prevenir posibles eventos emergentes futuros.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/2.jpeg" alt=""/>
                            <p>
                                Se abordan temas atingentes a ambos
                                territorios, tales como:
                            </p>
                            <ul>
                                <li><span>●</span> Enfermedades zoonóticas
                                    infecciosas.
                                </li>
                                <li><span>●</span> Salud en tiempos de
                                    pandemia.
                                </li>
                                <li>
                                    <span>●</span> La necesidad de
                                    desarrollar nuevos
                                    antibacterianos.
                                </li>
                                <li><span>●</span> Sanidad animal.</li>
                                <li><span>●</span> Monitoreo de la calidad
                                    del agua.
                                </li>
                                <li><span>●</span> Producción sostenible de
                                    alimentos.
                                </li>
                            </ul>
                            <p>
                                El objetivo final es aportar al
                                <span>
                                    desarrollo social de las comunidades,
                                    promover el uso
                                    eficiente de los recursos naturales,
                                </span>
                                y fomentar
                                <span> la resiliencia frente a desastres
                                    naturales. </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- REPRODUCTOR DE VIDEO-->
        <div class="row">
            <iframe width="1166" height="656" src="https://www.youtube.com/embed/tk5Xr_a9uK0"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<section id="tarjetas">
    <div class="container">

        <div class="d-flex flex-column align-items-center tar-inst-titulo">
            <h1>El Equipo</h1>
            <img src="assets/img/nuevoequipo/linea-01.svg" alt="">
        </div>

        <div class="d-flex flex-row justify-content-between tar-instituciones">
            <img src="assets/img/nuevoequipo/institucion-01.png" alt="Universidad San Sebastian"/>
            <img src="assets/img/nuevoequipo/institucion-02.png" alt="Universidad Nacional de Río Negro"/>
            <img src="assets/img/nuevoequipo/institucion-03.png" alt="agcidChile"/>
        </div>

        <div class="d-flex flex-row justify-content-between">

            <figure class="snip1576">
                <img src="assets/img/nuevoequipo/equipo-01.png" alt=""/>
                <figcaption class="info-equipo">
                    <h2>DIRECTOR DE PROYECTO</h2>
                    <h1>Dr. Daniel Medina Salas</h1>
                    <h4>Académico Investigador</h4>
                    <p>
                        Facultad de Ciencias de la Naturaleza,
                        Universidad San
                        Sebastián, Sede De la Patagonia, Chile.
                    </p>
                    <a href="mailto:daniel.medina@uss.cl" target="_blank">
                        <i class='bx  bx-envelope'></i> daniel.medina@uss.cl
                    </a>
                </figcaption>
                <a href="#"></a>
            </figure>

            <figure class="snip1576">
                <img src="assets/img/nuevoequipo/equipo-02.png" alt=""/>
                <figcaption class="info-equipo">
                    <h2>DIRECTORA DE PROYECTO</h2>
                    <h1>M. Sc. Paula Andrea Páez</h1>
                    <h4>
                        Docente Línea curricular clínica, carrera
                        Nutrición y
                        Dietética
                    </h4>
                    <p>
                        Universidad Nacional de Río Negro, Villa
                        Regina-Río Negro,
                        Argentina.
                    </p>
                    <a href="mailto:oppaez@unrn.edu.ar" target="_blank">
                        <i class='bx  bx-envelope'></i> oppaez@unrn.edu.ar
                    </a>
                </figcaption>
                <a href="#"></a>
            </figure>

            <figure class="snip1576">
                <img src="assets/img/nuevoequipo/equipo-03.png" alt=""/>
                <figcaption class="info-equipo">
                    <h2>COORDINADOR CHILE</h2>
                    <h1>Dr. Javier Campanini</h1>
                    <h4>Académico Investigador</h4>
                    <p class="p">
                        Facultad de Medicina y Ciencia, Universidad
                        San Sebastián, Sede
                        De la Patagonia, Chile.
                    </p>
                    <a href="mailto:javier.campanini@uss.cl" target="_blank">
                        <i class='bx  bx-envelope'></i> javier.campanini@uss.cl
                    </a>
                </figcaption>
                <a href="#"></a>
            </figure>

        </div>
        <div class="d-flex flex-row justify-content-start">

            <figure class="snip1576">
                <img src="assets/img/nuevoequipo/equipo-04.png" alt=""/>
                <figcaption class="info-equipo">
                    <h2>Cordinadora Chile</h2>
                    <h1>Nta. MSc. M Consuelo Díaz</h1>
                    <h4>
                        Docente Línea curricular clínica, carrera
                        Nutrición y
                        Dietética
                    </h4>
                    <p>
                        Facultad de Ciencias para el Cuidado de la
                        salud, Univeridad
                        San Sebastián, Sede de la patagonia, Chile.
                    </p>
                    <a href="mailto:maria.diaz@uss.cl" target="_blank">
                        <i class='bx  bx-envelope'></i> maria.diaz@uss.cl
                    </a>
                </figcaption>
                <a href="#"></a>
            </figure>

            <figure class="snip1576 figura-5">
                <img src="assets/img/nuevoequipo/equipo-05.png" alt=""/>
                <figcaption class="info-equipo">
                    <h2>COORDINADORA ARGENTINA</h2>
                    <h1>Ing. Marcela Viviana Filippi</h1>
                    <h4>Docente Investigadora</h4>
                    <p>
                        Universidad Nacional de Río Negro en la
                        Escuela de producción
                        Tecnología y Medio Ambiente.
                    </p>
                    <a href="mailto:omfilippi@unrn.edu.ar" target="_blank">
                        <i class='bx  bx-envelope'></i> omfilippi@unrn.edu.ar
                    </a>
                </figcaption>
                <a href="#"></a>
            </figure>

        </div>

    </div>
</section>

<section id="ultimas-publicaciones">
    <div class="container">
        <div class="d-flex flex-column align-items-center tar-inst-titulo-1">
            <h1>Últimas Publicaciones</h1>
            <img src="assets/img/nuevoequipo/linea-02.svg" alt="">
        </div>

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
                        LIMIT 3";
            $result_task = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_Array($result_task)) {
                $nombre = $row['nombre'];
                $descripcion = $row['descripcion'];
            ?>
            <!-- CARD INICIO -->
            <div class="card">
                <div class="card-head d-flex align-items-center justify-content-center">
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
                        <h5 class="cat-salud"><?php echo $row['nombre_cat_2'] ?></h5>
                    </div>
                    <div class="tit-card">
                        <h1><?php echo substr($nombre, 0,70)?> </h1>
                    </div>
                    <div class="card-descrip">
                        <p><?php echo substr($descripcion, 0,250) ?> ...</p>
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
                    <div class="footer-download d-flex flex-row">
                        <?php
                        $idcharla = $row['id_char'];
                        $query = "SELECT *
                                    FROM documentos D
                                    INNER JOIN charlas C
                                    ON D.id_charla_doc = C.id_char
                                    WHERE id_charla_doc = $idcharla";
                        $result_task1 = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_Array($result_task1)) {
                            ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" fill="#707070">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            <p><a href="<?php echo $row['ruta_doc'] ?>" download="<?php echo $row['nombre_doc'] ?>"><?php echo $row['nombre_doc'] ?></a></p>
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

        <div class="d-flex flex-row justify-content-center news-vermas">
            <a href="biblioteca.php">Ver más</a>
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

<?php include('includes/footer.php') ?>

<!-- Feedback Modal-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>


<script>
    $(document).ready(function () {
        $("#cargaFade").fadeIn();
    });
</script>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })
</script>
<!-- Core theme JS-->
<script src="js/carrousel.js"></script>
<script src="js/scripts.js"></script>
<script src="js/slider.js"></script>

</body>
</html>