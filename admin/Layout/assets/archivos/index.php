<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Una salud</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.svg" />

    <!-- Fuente Open Sans -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
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
</head>

<body id="page-top">
    <!-- MENU DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container p-left-7 p-right-7">
            <div class="logo">
                <a href=""><img class="img-menu-sponsor" src="assets/img/logo-Una-salud-18.svg" alt="logo" /></a>
            </div>
            <div class="logos-corp">
                <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-04.svg" alt="San sebastian" />
                <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-06.svg" alt="Rio negro" />
                <span><img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-01.svg" alt="AgcidChilew" /></span>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <a href="biblioteca.php" class="btn btn-primary">Biblioteca</a>
                </ul>
                <div class="icon-rrss">
                    <a href="https://www.instagram.com/unasalud_chile_argentina/" target="_blank"><img class="img-menu-sponsor" src="assets/img/rrss/RRSS-Una-salud-13.svg" alt="instagram" /></a>
                    <a href="https://www.youtube.com/channel/UCQ7HHoDed24QGu0ROHwd85w" target="_blank"><img class="img-menu-sponsor" src="assets/img/rrss/RRSS-Una-salud-14.svg" alt="Youtube" /></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- HEADER SLIDER-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides">
                        <img src="assets/img/slider-index/On-Health-04.jpg" style="width: 100%" />
                        <!-- <div class="text">TEXTO 1</div> -->
                    </div>

                    <div class="mySlides">
                        <img src="assets/img/slider-index/One-Health-05.jpg" style="width: 100%" />
                        <!-- <div class="text">TEXTO 2</div> -->
                    </div>

                    <div class="mySlides">
                        <img src="assets/img/slider-index/One-Health-06.jpg" style="width: 100%" />
                        <!-- <div class="text">TEXTO 3</div> -->
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- The dots/circles -->
            </div>
        </div>

        <!-- SECCION NAVTABS-->

        <div class="row gris">
            <div class="col-5">
                <div class="content-tabs-link">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 ps-lg-5 pt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                El Proyecto
                                <hr />
                            </button>
                            <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                ¿Qué es una salud?
                                <hr />
                            </button>

                            <button class="nav-link " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                ¿Qué temas aborda el proyecto?
                                <hr />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/1.jpeg" alt="" />
                            <p>
                                Una Salud Chile-Argentina es un
                                <span>
                                    Proyecto Colaborativo binacional
                                </span>
                                liderado por la

                                <span>Universidad San Sebastián,Sede Patagoniayla Universidad de Río Negro,Sede
                                    Valle Medio-Alto Valle.
                                </span>
                            </p>
                            <p>

                                El objetivo es compartir experienciasytransferir conocimientos entre investigadores,
                                académicosyestudiantes de ambas universidades,que permitan reflexionar sobre el
                                desarrollo sostenible de la zona austral de ChileyArgentina bajo el concepto
                                'Una Salud'.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/unasalud2.png" alt="" />
                            <p>
                                El concepto'Una salud'postula que
                                <span>
                                    la salud de las personas está
                                    estrechamente conectada con la salud de los animales,
                                </span>
                                la queasu vez se encuentra
                                interconectada con la
                                <span>
                                    salud del medio ambiente
                                </span>
                                en el que coexisten.

                            </p>
                            <p>
                                En este sentido,la Organización Mundial de la Salud(OMS),plantea la necesidad de
                                aplicaranivel mundial estrategias'One Health'para facilitar la
                                <span>
                                    gestión integrada
                                    de la saludycon ello prevenir posibles eventos emergentes futuros.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="content-tabs-right">
                            <img src="assets/img/inicio-tabs/2.jpeg" alt="" />
                            <p>
                                Se abordan temas atingentes a ambos
                                territorios, tales como:
                            </p>
                            <ul>
                                <li><span>●</span> Enfermedades zoonóticas
                                    infecciosas.</li>
                                <li><span>●</span> Salud en tiempos de
                                    pandemia.</li>
                                <li>
                                    <span>●</span> La necesidad de
                                    desarrollar nuevos
                                    antibacterianos.
                                </li>
                                <li><span>●</span> Sanidad animal.</li>
                                <li><span>●</span> Monitoreo de la calidad
                                    del agua.</li>
                                <li><span>●</span> Producción sostenible de
                                    alimentos.</li>
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
            <iframe width="1166" height="656" src="https://www.youtube.com/embed/Z_srrmbPAYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>

        <!-- EQUIPO -->

        <div class="row align-items-center justify-content-center
                justify-content-lg-between py-5">
            <h3>Equipo</h3>
            <div class="row">
                <div class="col-12">
                    <ul class="caption-style-4">
                        <li>
                            <img src="assets/img/logos/Logos-Una-salud-04.svg" alt="" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Institucion Ejecutora</h1>
                                    <p>Universidad San Sebastian</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/logos/Logos-Una-salud-06.svg" alt="" />

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>INSTITUCIÓN EJECUTORA</h1>
                                    <p>Universidad Nacional De Río Negro</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/logos/Logos-Una-salud-01.svg" alt="" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Institucion Ejecutora</h1>
                                    <p>
                                        Agencia Chilena de Cooperación
                                        Internacional para el
                                        Desarrollo
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="carousel js-flickity">
                <div class="carousel-cell">
                    <img class="p-66" src="assets/img/equipo/Una-salud-equipo-08.png" alt="orange tree" />
                    <div class="overlay">
                        <div class="text">
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
                            <a href="" class="row py-5 gx-5 align-items-center
                                    justify-content-center">maria.diaz@uss.cl</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="p-66" src="assets/img/equipo/Una-salud-equipo-10.png" alt="orange tree" />
                    <div class="overlay">
                        <div class="text">
                            <h2>COORDINADORA ARGENTINA</h2>
                            <h1>Ing. Marcela Viviana Filippi</h1>
                            <h4>Docente Investigadora</h4>
                            <p>
                                Universidad Nacional de Río Negro en la
                                Escuela de producción
                                TecnologíayMedio Ambiente.
                            </p>
                            <a href="" class="row py-5 gx-5 align-items-center
                                    justify-content-center">
                                Omfilippi@unrn.edu.ar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="p-66" src="assets/img/equipo/Una-salud-equipo-12.png" alt="orange tree" />
                    <div class="overlay">
                        <div class="text">
                            <h2>DIRECTOR DE PROYECTO</h2>
                            <h1>Dr. Daniel Medina Salas</h1>
                            <h4>Académico Investigador</h4>
                            <p>
                                Facultad de Ciencias de la Naturaleza,
                                Universidad San
                                Sebastián, Sede De la Patagonia, Chile.
                            </p>
                            <a href="" class="row py-5 gx-5 align-items-center
                                    justify-content-center">
                                angelica.guerrero@uss.cl
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="p-66" src="assets/img/equipo/Una-salud-equipo-09.png" alt="orange tree" />
                    <div class="overlay">
                        <div class="text">
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
                            <a href="" class="row py-5 gx-5 align-items-center
                                    justify-content-center">
                                Oppaez@unrn.edu.ar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="p-66" src="assets/img/equipo/Una-salud-equipo-11.png" alt="orange tree" />
                    <div class="overlay">
                        <div class="text">
                            <h2>COORDINADOR CHILE</h2>
                            <h1>Dr. Javier Campanini</h1>
                            <h4>Académico Investigador</h4>
                            <p>
                                Facultad de MedicinayCiencia, Universidad
                                San Sebastián, Sede
                                De la Patagonia, Chile.
                            </p>
                            <a href="" class="row py-5 gx-5 align-items-center
                                    justify-content-center">
                                javier.campanini@uss.cl
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center
                justify-content-lg-between py-5">
            <div class="container-expositores">
                <h2>Expositores</h2>
                <div class="carousel js-flickity">
                    <div class="carousel-cell">
                        <div class="block-expositores p-66">
                            <h1>Charla</h1>
                            <h4>"Diasnóstico para patógenos zoonótico."</h4>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h1>Dr. Frank Vera</h1>

                                <p>
                                    Académico, Escuela de Medicina
                                    Veterinaria, Universidad San
                                    Sebastián, Sede De La Patagonia, Chile.
                                </p>
                                <a href="" class="row py-5 gx-5 align-items-center
                                        justify-content-center">
                                    frank.vera@uss.cl
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="block-expositores p-66">
                            <h1>Charla</h1>
                            <h4>"Resistencia a antibacterianos en salud
                                humana."</h4>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h1>Dra. Fernanda Ávila</h1>

                                <p>
                                    Servicio de Infectología Hospital
                                    Clínico, Universidad de
                                    Chile,
                                </p>
                                <a href="" class="row py-5 gx-5 align-items-center
                                        justify-content-center">
                                    fdaavilao@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="block-expositores p-66">
                            <h1>Charla</h1>
                            <h4>
                                "Efectos de contaminantes ambientales de
                                origen antropogénico
                                sobre Zebrafish."
                            </h4>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h1>Dr. Angélica Guerrero</h1>

                                <p>
                                    Directora Carrera QuímicayFarmacia, Sede
                                    Valdivia.
                                    Universidad San Sebastián, Chile.
                                </p>
                                <a href="" class="row py-5 gx-5 align-items-center
                                        justify-content-center">
                                    angelica.guerrero@uss.cl
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="bg-light text-center py-5">
        <div class="container">
            <div class="text-black-50 small">
                <div class="logos-corp-footer">
                    <div class="col-10">
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-04.svg" alt="San sebastian" />
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-05.svg" alt="Rio negro" />
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-06.svg" alt="AgcidChilew" />
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-03.svg" alt="San sebastian" />
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-02.svg" alt="Rio negro" />
                        <img class="img-menu-sponsor" src="assets/img/logos/Logos-Una-salud-01.svg" alt="AgcidChilew" />
                    </div>
                    <div class="col-2">
                        <div class="contacto-corp-footer">
                            <h1>Contacto</h1>
                            <a href="#">unasalud@uss.cl</a>
                        </div>
                    </div>
                </div>

                <div class="mb-2">&copy; Desarrollado por Indaga</div>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/carrousel.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/slider.js"></script>
    <!-- Carrucel Equipo JS -->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>