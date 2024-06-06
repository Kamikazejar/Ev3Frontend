<?php

function getEndpointByToken($_endpoint, $_token)
{
    $ch = curl_init($_endpoint);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Authorization: Bearer ' . $_token
        )
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    if ($respuesta === false) {
        return 'Error: No se pudo realizar la solicitud ' . curl_error($ch);
    } else {
        return $respuesta;
    }
}

$respuestaEndpointEquipo = getEndpointByToken('http://localhost/energy-and-water-t1/v1/equipo/', 'ciisa-get');
$respuestaEndpointEquipo = json_encode($respuestaEndpointEquipo);

$respuestaEndpointHistoria = getEndpointByToken('http://localhost/energy-and-water-t1/v1/historia/', 'ciisa-get');
$respuestaEndpointHistoria = json_encode($respuestaEndpointHistoria);

$respuestaEndpointContacto = getEndpointByToken('http://localhost/energy-and-water-t1/v1/info_contacto/', 'ciisa-get');
$respuestaEndpointContacto = json_decode($respuestaEndpointContacto);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy And Water SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.webp" alt="Logo de la empresa Energy and Water" width="100px" height="100px"
                    class="logo">
                <img src="assets/img/titulo.webp"></a>
            </a>

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link" href="#seccionHistoria">Nuestra Historia</a>
                        <a class="nav-link" href="#seccionServicios">Servicios</a>
                        <a class="nav-link" href="#valoresEmp">Equipo</a>
                        <a class="nav-link" href="#formulario">Contáctanos</a>
                        <a class="nav-link" href="#seccionFAQs">Preguntas frecuentes</a>
                        <a></a>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkModeSwitch" checked>
                            <label class="form-check-label" for="darkModeSwitch">Modo claro/oscuro</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!--Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner.webp" class="d-block w-100 h-100 img-fluid"
                    alt="Renovacion de un establecimiento">
            </div>
            <div class="carousel-item">
                <img src="assets/img/photo-collage1600.webp" class="d-block w-100 img-fluid"
                    alt="Collage de 3 imagenes de trabajos realizados por Energy and Water">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carrusel-->

    <!--Sección Historia-->
    <section id="seccionHistoria">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6" id="contenidoHistoria">

                </div>
                <div class="col-md-6" id="imghistoria">
                    <img src="assets/img/vilñacousinomacul.webp" class="img-fluid"
                        alt="Mantenimiento de lamparas en Cousiño Macul" id="Img1" width="75%">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Sección Historia-->


    <!--Sección Servicios-->
    <section id="seccionServicios">
        <div class="container mt-3">
            <h2 id="textService" class="mb-4">Servicios</h2>

            <div id="carouselMantenimiento" class="carousel slide text-center  p-5 mb-2">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMantenimiento" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselMantenimiento" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselMantenimiento" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3 class="text1">Mantenimiento</h3>
                        <p> Conjunto de operaciones y cuidados necesarios para que tus instalaciones continúen
                            funcionando
                            correctamente. </p>
                    </div>
                    <div class="carousel-item">
                        <h3 class="text1">Mantenimiento preventivo</h3>
                        <p>Ayuda a prolongar la vida útil de tus activos y aumenta la productividad, a través de una
                            revisión.</p>
                    </div>
                    <div class="carousel-item">
                        <h3 class="text1">Mantenimiento correctivo</h3>
                        <p>Corrige problemas o daños en las instalaciones o equipos.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMantenimiento"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMantenimiento"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            <!-- <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mb-4 text1">Mantenimiento</h3>
                        <p> Conjunto de operaciones y cuidados necesarios para que tus instalaciones continúen
                            funcionando
                            correctamente. </p>
                        <h3 class="text1">Mantenimiento preventivo</h3>
                        <p>Ayuda a prolongar la vida útil de tus activos y aumenta la productividad, a través de una
                            revisión.</p>
                        <h3 class="text1">Mantenimiento correctivo</h3>
                        <p>Corrige problemas o daños en las instalaciones o equipos.</p>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row row-cols-1 row-cols-md-4 g-4"> -->
            <div class="row" id="rowServices">
                <!--Card Aire acondiconado-->
                <div class="col" id="aireAcondicionado">
                    <div class="card">
                        <img src="assets\img\aire-acondicionado.webp" class="card-img-top"
                            alt="Imagen de equipo industrial de aire acondicionado">
                        <div class="card-body">
                            <h5 class="card-title text-center">Lorem ipsum</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consectetur tempore officia molestias mollitia rerum quae.</p>
                        </div>
                    </div>
                </div>

                <!--Card Sala de calderas-->
                <div class="col" id="salaCalderas">
                    <div class="card">
                        <img src="assets\img\calderas.webp" class="card-img-top"
                            alt="Imagen de equipo industrial de sala de calderas">
                        <div class="card-body">
                            <h5 class="card-title text-center">Lorem ipsum</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Quisquam beatae id omnis quasi labore sapiente!</p>
                        </div>
                    </div>
                </div>

                <!--Card Grupo electrógeno-->
                <div class="col" id="grupoElectrogeno">
                    <div class="card">
                        <img src="assets\img\grupoelectrogeno.webp" class="card-img-top"
                            alt="Imagen de equipo industrial de grupo electrógeno">
                        <div class="card-body">
                            <h5 class="card-title text-center">Lorem ipsum</h5>
                            <p class="card-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Tenetur sunt natus debitis quos vel quibusdam.</p>
                        </div>
                    </div>
                </div>

                <!--Card Sala de bombas-->
                <div class="col" id="salaBombas">
                    <div class="card">
                        <img src="assets\img\salabombas.webp" class="card-img-top"
                            alt="Equipo industrial de sala de bombas">
                        <div class="card-body">
                            <h5 class="card-title text-center">Lorem Ipsum</h5>
                            <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Iusto, dolor!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Sección Servicios-->

    <br>

    <!--Sección Equipo y valores-->
    <section id="equipo">
        <div class="container mt-3">
            <div class="row" id="seccionEquipo">
                <div class="col-6">
                    <h2 id="equipoTitulo">Nuestro equipo</h2>
                    <br>
                    <p id="equipoTexto">En <strong>Energy And Water Spa</strong> nos dedicamos a crear ambientes gratos
                        y confortables a
                        través del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos electrógenos
                        y electricidad, entre otros. Los miembros de nuestro equipo son:</p>
                </div>
                <div class="col-6">
                    <div class="card-group" style="width: 90%;">
                        <div class="card" style="margin-right: 3%;">
                            <img src="assets/img/foto-miembro.webp" class="card-img-top" alt="Mizraim Abello Avello"
                                id="fotoMiembros">
                            <div class="card-body">
                                <p class="card-text">Mizraim Abello Avello</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/foto-miembro.webp" class="card-img-top" alt="Marcelo Fuentes Orellana"
                                id="fotoMiembros">
                            <div class="card-body">
                                <p class="card-text">Marcelo Fuentes Orellan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row" id="seccionValores">
                    <div class="col-6">
                        <br>
                        <h2 id="valoresEmp">Nuestros Valores</h2>
                        <p> Compartimos una visión clara del objetivo, fomentamos un clima de confianza, colaboración y
                            apoyo mutuo entre los integrantes del equipo.</p>
                    </div>
                    <div class="col-6">
                        <img id="elServicio" src="assets\img\el-servicio-nos-mueve.webp" class="img-fluid"
                            alt="El Servicio nos Mueve" id="Img1" width="90%">
                    </div>
                </div>
            </div>
            <br>
            <div class="container mt-3">
                <div class="row" id="seccionLiderazgo">
                    <div class="col-6">
                        <h2 style="text-align: left;">Liderazgo</h2>
                        <br>
                        <p><strong>Mizraim Abello</strong> es el fundador de Energy and Water Spa, es un líder
                            colaborativo
                            que se desempeña
                            en el ámbito laboral, específicamente en el sector de la climatización y electricidad.
                            Practica
                            un liderazgo democrático...
                            <button type="button" onclick="mostrar()" id="leerMas">Leer más</button>
                        </p>
                        <div id="masTexto" style="display: none">
                            Es decir, involucra al equipo de trabajo en la toma de decisiones y valora sus opiniones y
                            sugerencias. Sus principales habilidades como líder son la resolución de problemas, la
                            comunicación efectiva, el pensamiento crítico,
                            la capacidad de coordinación y gestión. Algunos de los logros más destacados son haber
                            participado en la acreditación
                            de los centros de salud de la municipalidad de San Joaquín, reparación del equipo de
                            climatización para el museo
                            de la Universidad de los Andes y haber realizado reparaciones y cambios de grupos
                            electrógenos
                            que son críticos para el
                            funcionamiento de los edificios. Uno de los desafíos que enfrentó como líder fue adaptarse a
                            las
                            nuevas normativas sanitarias
                            por la pandemia y garantizar la seguridad del equipo y los clientes. Lo logró implementando
                            protocolos de prevención y
                            capacitando al personal. Su objetivo como líder es darles continuidad operacional a los
                            clientes
                            y mejorar constantemente
                            los procesos de mantenimiento y calidad.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="mantEdificios" class="thumbnail" src="assets\img\mantenimiento-para-edificios.webp"
                            alt="Mantenimiento para Edificios" width="90%">
                    </div>
                </div>
            </div>
        </div>
        <section id="equipoFooter">
            <br>
            <br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12" style="text-align: center;">
                        <h4 style="text-align: center;">Únete al equipo</h4>
                        Describe brevemente qué cualidades deben tener tus compañeros.
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12" style="text-align: center;">
                        <button type="button" class="btn btn-primary">Enviar Solicitud</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </section>
    </section>

    <br>
    <br>

    <!--Carrusel testimonios-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h2 id="testimonialTitle">¿Qué dicen nuestros clientes?</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item carousel-item active testimonialItem">
                            <div class="img-box">
                                <img src="./assets/img/customer1.webp" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima omnis
                                laudantium maxime amet eius saepe ducimus enim sequi maiores quae.</p>
                            <p class="testimonialAuthor"><b>Fernando Fernández</b>, Hotel Sheratton</p>
                        </div>
                        <div class="item carousel-item testimonialItem">
                            <div class="img-box">
                                <img src="./assets/img/customer2.webp" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Necessitatibus praesentium nam accusamus adipisci, aspernatur amet.</p>
                            <p class="testimonialAuthor"><b>Gonzalo González</b>, dueño de constructora</p>
                        </div>
                        <div class="item carousel-item testimonialItem">
                            <div class="img-box">
                                <img src="./assets/img/customer3.webp" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde,
                                voluptates aspernatur voluptas animi similique voluptatibus soluta. Commodi dignissimos
                                nisi atque delectus porro ipsum necessitatibus dolores! Consequatur veniam tenetur ex
                                debitis?</p>
                            <p class="testimonialAuthor"><b>Juan Jara</b>, arquitecto</p>
                        </div>
                    </div>
                    <!--Controles del carrusel-->
                    <a class="carousel-control left carousel-control-prev pe-4" href="#testimonialCarousel"
                        data-bs-slide="prev">
                        <img src="./assets/img/prev-1.svg">
                    </a>
                    <a class="carousel-control right carousel-control-next ps-4" href="#testimonialCarousel"
                        data-bs-slide="next">
                        <img src="assets/img/next-14.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Formulario-->
    <form id="formulario">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-5">Contáctanos</h2>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="nombreCompleto" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreCompleto" required>
                        </div>

                        <div class="col">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" required>
                        </div>
                    </div>

                    <div class="row mb-6">
                        <div class="col-md-6">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" required>
                        </div>

                        <div class="col-md-4">
                            <label for="casaDepartamento" class="form-label">Casa, Departamento</label>
                            <input type="text" class="form-control" id="casaDepartamento" required>
                        </div>

                        <div class="col-md-2">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control" id="numero" required>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <select id="servicios" class="form-select needs-validation" required novalidate>
                                <option value="">Seleccione un servicio</option>
                                <option value="1">Aire Acondicionado</option>
                                <option value="2">Grupo Electrógeno</option>
                                <option value="3">Sala de calderas</option>
                                <option value="4">Sala de bombas</option>
                            </select>
                            <div class="invalid-feedback">Por favor, seleccione un servicio.</div>
                            <br>
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comentarios adicionales</label>
                    </div>
                    <br>
                    <p>Confirma que es un ser humano?</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">No</label>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" required>
                            <label class="form-check-label" for="exampleCheck1">Acepto que he leído los términos de uso
                                y condición</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-2">
                        <button id="enviarForm" class="btn btn-primary" onclick=mostrarformulario()>Enviar</button>
                    </div>


                </div>
            </div>
        </div>
    </form>

    <!--Sección FAQs-->
    <section id="seccionFAQs">
        <div class="faq-header"></div>
        <h2 id="textfaq" class="container">Preguntas frecuentes</h2>
        <div id="faqcontent" class="container">
            <div class="faq-content">
                <div class="faq-question">
                    <input id="q1" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q1" class="panel-title">¿Cómo solicito una cotización?</label>
                    <div class="panel-content">Puedes contactarnos al correo &nbsp; <a
                            href="mailto:Contacto@energyandwater.cl" target="_blank">contacto@energyandwater.cl</a> o al
                        número
                        <a href="https://wa.me/56232569798" target="_blank">+56232569798</a>.
                    </div>
                </div>

                <div class="faq-question">
                    <input id="q2" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q2" class="panel-title">¿Necesitas visita técnica?</label>
                    <div class="panel-content">Puedes solicitar visita técnica para evaluación mediante correo
                        electrónico&nbsp; <a href="mailto:contacto@energyandwater.cl"
                            target="_blank">contacto@energyandwater.cl</a> o al número
                        <a href="https://wa.me/56232569798" target="_blank">+56232569798</a>.
                    </div>
                </div>

                <div class="faq-question">
                    <input id="q3" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q3" class="panel-title">¿Qué tipo de aire acondicionado pueden revisar?</label>
                    <div class="panel-content">Revisamos, reparamos e instalamos equipos domiciliarios e industriales.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Sección FAQs-->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted pt-1">

        <!-- Columna empresa  -->
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Energy and Water SPA
                        </h6>
                        <p>Energy and Water es una empresa que se dedica a ofrecer servicios integrales de
                            mantenimiento para edificios, con un enfoque especializado en climatización,
                            electricidad y obras menores de construcción</p>
                    </div>

                    <!-- Columna servicios -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Servicios</h6>
                        <p>
                            <a href="#aireAcondicionado" class="text-reset">Aire acondicionado</a>
                        </p>
                        <p>
                            <a href="#grupoElectrogeno" class="text-reset">Grupo electrógeno</a>
                        </p>
                        <p>
                            <a href="#salaCalderas" class="text-reset">Sala de calderas</a>
                        </p>
                        <p>
                            <a href="#salaBombas" class="text-reset">Sala de bombas</a>
                        </p>
                    </div>
                    <!-- Footer servicios -->

                    <!-- Footer contacto   -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="contenedorContacto">
                        <h6 class="text-uppercase fw-bold">Información de contacto</h6>
                    </div>
                    <!-- Footer contacto -->
        </section>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        imprimeEquipo(JSON.parse(<?php echo $respuestaEndpointEquipo ?>));

        function imprimeEquipo(_datosEndpoint) {
            let cantidadData = 0;
            _datosEndpoint.data.forEach(element => {

            }); (element => {
                if (element.activo) {
                    cantidadData++;
                }
            });

            const anchoColumna = 12 / cantidadData;
            const seccionEquipo = document.getElementById('seccionEquipo');
            seccionEquipo.innerHTML = '';


            _datosEndpoint.data.forEach(element => {
                // if (element.activo) {
                const columna = document.createElement('div');
                columna.classList.add('col-6');

                const equipoTitulo = document.createElement('h2');
                const equipoTexto = document.createElement('p');

                //equipoTitulo.innerHTML = '<h2 id="equipoTitulo">Nuestro equipo</h2>';
                //equipoTexto.innerHTML = '<p id="equipoTexto">En Energy And Water Spa nos dedicamos a crear ambientes gratos y confortables a través del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos electrógenos y electricidad, entre otros. Los miembros de nuestro equipo son: </p>';

                const tarjeta = document.createElement('div');
                tarjeta.classList.add('card');
                const tarjetaImagen = document.createElement('img');
                tarjetaImagen.src = element.imagen;
                tarjetaImagen.classList.add('card-img-top');
                const tarjetaBody = document.createElement('div');
                tarjetaBody.classList.add('card-body');
                const textoTarjeta = document.createElement('p');
                textoTarjeta.classList.add('card-text');
                textoTarjeta.innerText = element.texto;
                columna.appendChild(equipoTexto);
                columna.appendChild(equipoTitulo);
                tarjeta.appendChild(tarjetaImagen);
                tarjetaBody.appendChild(textoTarjeta);
                tarjeta.appendChild(tarjetaBody);
                columna.appendChild(tarjeta);
                seccionEquipo.appendChild(columna);
                //seccionEquipo.appendChild(tarjeta);
            }
            )
        };
        //}

        function cambiarServicio(serviceId) {
            // Scroll to the form section
            document.querySelector("#formulario").scrollIntoView({ behavior: "smooth" });

            // Find all option elements inside the select element
            const options = document.querySelectorAll("#formulario option");

            // Iterate over the options
            options.forEach(option => {
                // If the option value matches the serviceId, set it as selected
                if (option.value === serviceId) {
                    option.selected = true;
                } else {
                    // Otherwise, make sure it's not selected
                    option.selected = false;
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function () {
            imprimeHistoria(JSON.parse(<?php echo $respuestaEndpointHistoria; ?>));
        });

        function imprimeHistoria(_datosEndpoint) {
            const contenidoHistoria = document.getElementById('contenidoHistoria');

            _datosEndpoint.data.forEach(historia => {
                if (historia.activo) {
                    const titulo = document.createElement('h3');
                    titulo.classList.add('text1');
                    titulo.innerText = historia.tipo;

                    const parrafo = document.createElement('p');
                    parrafo.innerText = historia.texto;

                    contenidoHistoria.appendChild(titulo);
                    contenidoHistoria.appendChild(parrafo);
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function () {
            // Simular la respuesta del endpoint de contacto para fines de ejemplo
            const respuestaEndpointContacto = <?php echo json_encode($respuestaEndpointContacto); ?>;

            imprimeInfoContacto(respuestaEndpointContacto);
        });
        function imprimeInfoContacto(datosContacto) {
            const contenedorContacto = document.getElementById('contenedorContacto');

            // Itera sobre los datos obtenidos del endpoint
            datosContacto.data.forEach(item => {
                // Crea un párrafo para cada propiedad del contacto
                const parrafo = document.createElement('p');
                parrafo.innerHTML = `<i class="${item.icono}"></i> ${item.texto}`;

                // Agrega el párrafo al contenedor
                contenedorContacto.appendChild(parrafo);
            });
        }
    </script>
</body>

</html>