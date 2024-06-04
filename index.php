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

$respuestaEndpointServicios = getEndpointByToken('http://localhost/energy-and-water-t1/v1/categoria_servicio/', 'ciisa-get');
$respuestaEndpointServicios = json_encode($respuestaEndpointServicios);
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
                <img src="assets/img/logoclean.webp" alt="Logo de la empresa Energy and Water" width="100px"
                    height="100px" class="logo">
            </a>

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Energy and Water Spa</a>
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
                <div class="col-md-6">
                    <h2 class="mb-4">Historia</h2>
                    <h3 class="text1">Creando ambientes gratos y confortables a través del mantenimiento</h3>
                    <p> Bienvenido a Energy and Water SpA, empresa dedicada a la instalación y reparación de sistemas de
                        ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales
                        altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para
                        cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con
                        nosotros y solicita tu presupuesto sin compromiso. </p>
                    <h3 class="text1">En qué punto nos encontramos</h3>
                    <p>Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de
                        mantenimiento para hogares, oficinas, comercios e industrias. Nuestra misión es satisfacer las
                        necesidades de nuestros clientes con eficiencia, rapidez y profesionalidad. Nuestra visión es
                        ser la empresa referente en el mercado por nuestra excelencia y compromiso. Nuestros valores son
                        la honestidad, la responsabilidad, el respeto y la innovación. </p>
                </div>

                <div class="col-md-6" id="imghistoria">
                    <img src="assets\img\vilñacousinomacul.webp" class="img-fluid"
                        alt="Mantenimiento de lamparas en Cousiño Macul" id="Img1" width="75%">
                </div>
            </div>
        </div>
    </section>
    <!--Sección Historia-->


    <!--Sección Servicios-->
    <section id="seccionServicios">
        <div class="container mt-3">
            <h2 id="textService" class="mb-4">Servicios</h2>
            <div class="container mt-3">
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
            </div>

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
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h2 id="valoresEmp">Nuestros Valores</h2>
                    <p> Compartimos una visión clara del objetivo, fomentamos un clima de confianza, colaboración y
                        apoyo mutuo entre los integrantes del equipo.</p>
                </div>
                <div class="col-md-6">
                    <img id="elServicio" src="assets\img\el-servicio-nos-mueve.webp" class="img-fluid"
                        alt="El Servicio nos Mueve" id="Img1" width="85%">
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container mt-3" id="seccionEquipo">
            <div class="row">
                <div class="col-6">
                    <h2>Este es nuestro equipo</h2>
                    <br>
                    <p>En <strong>Energy And Water Spa</strong> nos dedicamos a crear ambientes gratos y confortables a
                        través del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos electrógenos
                        y electricidad, entre otros. Los miembros de nuestro equipo son:</p>
                </div>

                <div class="card-group" style="width: 45%;">
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
        <br>
        <br>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <h2 style="text-align: left;">Liderazgo</h2>
                    <br>
                    <p><strong>Mizraim Abello</strong> es el fundador de Energy and Water Spa, es un líder colaborativo
                        que se desempeña
                        en el ámbito laboral, específicamente en el sector de la climatización y electricidad. Practica
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
                        de la Universidad de los Andes y haber realizado reparaciones y cambios de grupos electrógenos
                        que son críticos para el
                        funcionamiento de los edificios. Uno de los desafíos que enfrentó como líder fue adaptarse a las
                        nuevas normativas sanitarias
                        por la pandemia y garantizar la seguridad del equipo y los clientes. Lo logró implementando
                        protocolos de prevención y
                        capacitando al personal. Su objetivo como líder es darles continuidad operacional a los clientes
                        y mejorar constantemente
                        los procesos de mantenimiento y calidad.
                    </div>
                </div>
                <div class="col-md-6">
                    <img id="mantEdificios" class="thumbnail" src="assets\img\mantenimiento-para-edificios.webp"
                        alt="Mantenimiento para Edificios" width="95%">
                </div>
            </div>
        </div>

        <br>

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
                                <img src="./assets/img/customer1.jpg" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima omnis laudantium maxime amet eius saepe ducimus enim sequi maiores quae.</p>
                            <p class="testimonialAuthor"><b>Fernando Fernández</b>, Hotel Sheratton</p>
                        </div>
                        <div class="item carousel-item testimonialItem">
                            <div class="img-box">
                                <img src="./assets/img/customer2.jpg" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus praesentium nam accusamus adipisci, aspernatur amet.</p>
                            <p class="testimonialAuthor"><b>Gonzalo González</b>, dueño de constructora</p>
                        </div>
                        <div class="item carousel-item testimonialItem">
                            <div class="img-box">
                                <img src="./assets/img/customer3.jpg" alt="Avatar de cliente">
                            </div>
                            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, voluptates aspernatur voluptas animi similique voluptatibus soluta. Commodi dignissimos nisi atque delectus porro ipsum necessitatibus dolores! Consequatur veniam tenetur ex debitis?</p>
                            <p class="testimonialAuthor"><b>Juan Jara</b>, arquitecto</p>
                        </div>
                    </div>
                    <!--Controles del carrusel-->
                    <a class="carousel-control left carousel-control-prev" href="#testimonialCarousel" data-bs-slide="prev">
                        <img src="./assets/img/prev-1.svg">
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#testimonialCarousel" data-bs-slide="next">
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
                                <option value="2">Sala de calderas</option>
                                <option value="3">Grupo Electrógeno</option>
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
                            <a href="#salaCalderas" class="text-reset">Sala de calderas</a>
                        </p>
                        <p>
                            <a href="#grupoElectrogeno" class="text-reset">Grupo electrógeno</a>
                        </p>
                        <p>
                            <a href="#salaBombas" class="text-reset">Sala de bombas</a>
                        </p>
                    </div>
                    <!-- Footer servicios -->

                    <!-- Footer contacto   -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Información de contacto</h6>
                        <p>
                            <i class="fas fa-home"></i>Manquehue Sur 520, oficina 205, Las Condes
                        </p>

                        <p>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contacto@energyandwater.cl" target="_blank">contacto@energyandwater.cl</a>
                        </p>
                        <p>
                            <i class="fas fa-phone"></i>+ 56 2 32569798
                        </p>

                        <p>
                            <i class="fas fa-print"></i>
                            <a
                                href="https://api.whatsapp.com/send/?phone=%2B56930835203&text&type=phone_number&app_absent=0"><img
                                    src="./assets/img/logo-whatsapp-png-46042.png" alt="" id="whatsapp-logo"
                                    height="25px"></a>
                            <a
                                href="https://api.whatsapp.com/send/?phone=%2B56930835203&text&type=phone_number&app_absent=0">Whatsapp</a>
                        </p>

                    </div>
                    <!-- Footer contacto -->
        </section>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        imprimeServicios(JSON.parse(<?php echo $respuestaEndpointServicios ?>));

        function imprimeServicios(_datosEndpoint) {
            let cantidadData = 0;
            _datosEndpoint.data.forEach(element => {
                if (element.activo) {
                    cantidadData++;
                }
            });
            const anchoColumnasXL = 12 / cantidadData;
            const anchoColumnasMD = Math.round((12 / cantidadData) * 2);
            const anchoColumnasSM = Math.round((12 / cantidadData) * 2 * 2);
            const rowServices = document.getElementById('rowServices');
            rowServices.innerHTML = '';
            _datosEndpoint.data.forEach(element => {
                if (element.activo) {
                    const columna = document.createElement('div');
                    columna.classList.add('col-xl-' + anchoColumnasXL);
                    columna.classList.add('col-md-' + anchoColumnasMD);
                    columna.classList.add('col-sm-' + anchoColumnasSM);
                    /* columna.classList.add('my-2'); */
                    const tarjeta = document.createElement('div');
                    tarjeta.classList.add('card');//dentro de card, va img y div card-body
                    const tarjetaBody = document.createElement('div');
                    tarjetaBody.classList.add('card-body');
                    const tarjetaTitle = document.createElement('h5');
                    tarjetaTitle.classList.add('card-title');
                    tarjetaTitle.classList.add('text-center');
                    const tarjetaImagen = document.createElement('img');
                    tarjetaImagen.src = element.imagen;
                    tarjetaImagen.classList.add('card-img-top');
                    const tarjetaText = document.createElement('p');
                    tarjetaText.classList.add('text-center');
                    const tarjetaFooter = document.createElement('div');
                    tarjetaFooter.classList.add('card-footer');
                    tarjetaFooter.classList.add('text-center');
                    tarjetaTitle.innerText = element.nombre;
                    tarjetaText.innerText = element.texto;
                    tarjetaFooter.innerHTML = '<a href="#contacto"><button class= "btn btn-primary" onclick="cambiaServicio(`' + element.id + '`)">Contáctanos</button></a>';
                    tarjeta.appendChild(tarjetaImagen);
                    tarjetaBody.appendChild(tarjetaTitle);
                    tarjetaBody.appendChild(tarjetaText);
                    tarjeta.appendChild(tarjetaBody);
                    tarjetaBody.appendChild(tarjetaFooter);
                    columna.appendChild(tarjeta);
                    rowServices.appendChild(columna);
                }
            });
        }
    </script>
</body>

</html>