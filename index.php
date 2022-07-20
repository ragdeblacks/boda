<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>La boda de Evelyn y Edgar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/assets/ring.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/general.scss" rel="stylesheet">
    <script src="js/date_final.js"></script>
</head>

<body onload="checarTiempo()">

    <div class="container-logo container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div style="position:relative">
            <div class="text-center container-save-date-3" ></div>
            <img src="img/assets/photos/z-1.jpg" class="img-fluid img-principal-logo" style="width: -webkit-fill-available;" />
            <div class="text-center contenedor-header" >
                <img  src="img/assets/header-2.png" class="img-fluid img-logo"  />
            </div>
            <div class="text-center container-save-date" >
                <div class="text-carrusel">
                    <div class="title-save text-center">Save The Date</div>
                    <div class="date-save text-center pt-1">19 / Noviembre / 2022</div>
                    <p class="content-save text-center pt-3">Hace cinco años emprendimos un viaje que cambio nuestras vidas. En nuestro camino la vida nos ha llenado de momentos de confianza, paciencia, amor e inspiración. Hoy nos complace invitarlos a que sean testigos de una nueva etapa que hemos decidido comenzar y queremos que de corazón, formen parte de este momento tan importante para nosotros.  </p>
                    <p class="content-save text-center pt-1">FALTAN</p>
                    <div class="date-final">
                        <div class="row content-date">
                            <div class="col-3">
                                <div class="row">
                                    <p class="text-center date-esp mb-0" id="date-day"></p>
                                </div>
                                <div class="row">
                                    <p class="text-center date-label">Días</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <p class="text-center date-esp mb-0" id="date-hr"></p>
                                </div>
                                <div class="row">
                                    <p class="text-center date-label">Horas</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <p class="text-center date-esp mb-0" id="date-min"></p>
                                </div>
                                <div class="row">
                                    <p class="text-center date-label">Mins</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <p class="text-center date-esp mb-0" id="date-seg"></p>
                                </div>
                                <div class="row">
                                    <p class="text-center date-label">Segs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-r"></div>
                
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-l"></div>
            </div>
        </div> 
    </div>

    <div class="text-center mt-3 mb-3 wow fadeInUp" style="max-width: inherit;" data-wow-delay="0.1s" >
        <div class="names-love">
            <p class="text-center mb-0">Evelyn Silva y Edgar Sanabria</p>
        </div>
    </div>

    <!-- Facts Start -->
    <div class="container-xxl content-info-boda wow fadeInUp mb-4" data-wow-delay="0.1s">
        <div class="container text-center pt-1">
            <img class="img-fluid img-vid" src="img/assets/img-a.jpeg" alt="">
        </div>
    </div>
    <!-- Facts End -->
    <div class="row g-4">
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="fact-item text-center bg-light h-100 p-5 pt-5">
                <img class="img-fluid" src="img/assets/iglesia.jpg" alt="Icon">
                <h3 class="mb-2 mt-3 info-boda-title">Cerenomia</h3>
                <p class="mb-0 info-boda-site">Parroquia del Señor del Campo Florido</p>
                <p class="mb-0 info-boda-address">P.º de la Florida s/n, La Florida, 53160 Naucalpan de Juárez, Méx.</p>
                <p class="mb-0 info-boda-address"><strong>Horario:</strong> 6:00 PM</p>
                <div class="row content-address">
                    <div class="col" onclick="window.open('https://goo.gl/maps/JqqokXNSHvMSsroY7');"><img src="img/assets/google.png"  class="img-fluid icon-address"></div>
                    <div class="col" onclick="window.open('https://waze.com/ul/h9g3qvvtbz');"><img src="img/assets/waze.png" class="img-fluid icon-address"></div>
                </div>
                

            </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="fact-item text-center bg-light h-100 p-5 pt-5">
                <img class="img-fluid" src="img/assets/salon.jpeg" alt="Icon">
                <h3 class="mb-2 mt-3 info-boda-title">Fiesta</h3>
                <p class="mb-0 info-boda-site">WTC Mexiquense</p>
                <p class="mb-0 info-boda-address">Cto. Circunvalación Ote. 10, Cd. Satélite, 53100 Naucalpan de Juárez, Méx.</p>
                <p class="mb-0 info-boda-address"><strong>Horario:</strong> 7:00 PM</p>
                <div class="row content-address">
                    <div class="col" onclick="window.open('https://goo.gl/maps/qmh6nCYQvxa8GiE48');"><img src="img/assets/google.png"  class="img-fluid icon-address"></div>
                    <div class="col" onclick="window.open('https://waze.com/ul/h9g3qvvu56');"><img src="img/assets/waze.png" class="img-fluid icon-address"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-logo-2 container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div style="position:relative" class="background-confirma">
            <div class="text-center contenedor-header-2" >
                <img  src="img/assets/header-3.png" class="img-fluid img-logo"  />
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-r"></div>
                
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-l"></div>
            </div>

            <div class="container container-confirma mt-5 mb-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title">Confirma tu Asistencia</p>
                        <p class="section-info mb-4">Para nosotros es importante conocer quien nos acompañara en este momento tan importante. Te pedimos que nos ayudes colocando tu <strong>nombre completo</strong> y verificando la cantidad de boletos que con seguridad ocuparas.</p>
                        <div class="row g-4">
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow  fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3 pb-3">
                            <div class="col-8 col-sm-8">
                                <input type="text" id="nombre_search" class="form-control" placeholder="Busca tu Nombre" style="height: 55px;">
                            </div>
                            <div class="col-4 col-sm-4">
                                <button class="btn btn-primary w-100 py-3" type="button" onclick="buscar()">Buscar</button>
                            </div>
                        </div>
                        <div class="row g-3" id="datos_encontrados" >
                            <div class="col-12 col-sm-12">
                                <p class="section-info mb-4">Hola <strong id="nombre_encontrado"></strong> tienes disponibles <strong id="boletos_adulto"></strong> <span id="subject_adult"></span> para adulto <span id="ninos_conta">y <strong id="boletos_nino"></strong> <span id="subject_nin"></span> para niño,</span> por favor selecciona la cantidad de boletos que usaras.</p>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="row">
                                    <div class="col" style ="align-self: center;">
                                        <p class="section-info mb-0">Numero de boletos de adulto</p>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" id="select_adultos" style="height: 55px;">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12" id="selector_nino">
                                <div class="row">
                                        <div class="col" style ="align-self: center;">
                                            <p class="section-info mb-0">Numero de boletos de niño</p>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" id="select_ninos" style="height: 55px;">
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <input type="hidden" id="idInvitado" value="">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary w-100 py-3" type="button" onclick="confirmar(true)">Confirmar</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-secondary w-100 py-3" type="button" onclick="confirmar(false)">No Asistire</button>
                                    </div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                    <div id="confirmados" class="row g-3" >
                        <div class="col-12 col-sm-12">
                            <p class="section-info mb-4">Hola <strong id="nombre_encontrado_confirmado"></strong> ya has confirmado tu asistencia con anterioridad, nos vemos en el evento. </p>
                        </div>
                    </div>
                    <div id="gracias" class="row g-3" >
                        <div class="col-12 col-sm-12">
                            <p class="section-info mb-4">¡Tu confirmación ha quedado registrada, muchas gracias!</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    
    <!-- Appointment End -->




    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <img
                    src="img/assets/photos/b-4.jpeg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
              
                  <img
                    src="img/assets/photos/a-30.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="img/assets/photos/a-29.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                  />
              
                  <img
                    src="img/assets/photos/a-27.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  <img
                    src="img/assets/photos/b-3.jpeg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="img/assets/photos/a-16.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                  />
              
                  <img
                    src="img/assets/photos/a-13.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                  />
                </div>
              </div>
              <!-- Gallery -->
        </div>
    </div>
    <!-- About End -->

    

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mt-3 mb-3 wow fadeInUp" style="max-width: inherit;" data-wow-delay="0.1s" >
                <div class="names-love">
                    <p class="text-center mb-0">Estancias/Hoteles cercanos</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4 img-fluid" src="img/assets/Hotel-icon.png">
                            <h3 class="mb-3 title-hotel">Hotel City Express Plus Satélite</h3>
                            <p class="mb-4 text-hotel"><strong>Dirección:</strong> Cto. Arquitectos 3, Cd. Satélite, 53100 Naucalpan de Juárez,
                                Méx.
                            <strong>TEL.</strong> 55 5249 8080
                            <strong>Convenio de alojamiento por Boda WTC Mexiquense</strong>
                            </p>
                            
                            <a class="btn" onclick="window.open('https://goo.gl/maps/sJsLncPD2nKttVSJ7');"><i class="fa fa-plus text-primary me-3"></i>Ubicacion</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img"  alt="">
                        <div class="service-text p-5">
                            <img class="mb-4 img-fluid" src="img/assets/Hotel-icon.png">
                            <h3 class="mb-3 title-hotel">Hotel Krystal Satélite María Bárbara</h3>
                            <p class="mb-4 text-hotel"><strong>Dirección:</strong> Perif. Blvd. Manuel Ávila Camacho 2300, San Lucas
                                Tepetlacalco, 54055 Tlalnepantla de Baz, Méx.
                            <strong>TEL:</strong> 55 53 66 99 24</p>
                            <a class="btn" onclick="window.open('https://goo.gl/maps/cNmiQitwtwGB698y6');"><i class="fa fa-plus text-primary me-3"></i>Ubicacion</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4 img-fluid" src="img/assets/Hotel-icon.png">
                            <h3 class="mb-3 title-hotel">Hotel Parque Satélite</h3>
                            <p class="mb-4 text-hotel"><strong>Dirección:</strong> Perif. Blvd. Manuel Ávila Camacho 1998, San Lucas Tepetlacalco, 54055
                                Tlalnepantla de Baz, Méx.
                            <strong>TEL.</strong> 55 55 98 32 09; 55 53 98 33 95; 55 59 32 36 04</p>
                            <a class="btn" onclick="window.open('https://goo.gl/maps/pys9YsgaDtf2ue716');"><i class="fa fa-plus text-primary me-3"></i>Ubicacion</a>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mt-3 mb-3 wow fadeInUp" style="max-width: inherit;" data-wow-delay="0.1s" >
                <div class="names-love">
                    <p class="text-center mb-0">Nuestras Recomendaciones</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img"  >
                        <div class="service-text p-5" >
                            <img class="mb-4 img-fluid" src="img/assets/amazon-logo.png" >
                            <h3 class="mb-3 title-hotel">Mesa de Regalos de Amazon</h3>
                            <a class="btn" onclick="window.open('https://www.amazon.com.mx/wedding/share/eddy-eve-boda-2022', '_blank');" ><i class="fa fa-plus text-primary me-3"></i>Ver Mesa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img"  >
                        <div class="service-text p-5">
                            <img class="mb-4 img-fluid" src="img/assets/liverpool-logo.png">
                            <h3 class="mb-3 title-hotel">Mesa de Regalos Liverpool</h3>
                            <a class="btn" onclick="window.open('http://mesaderegalos.liverpool.com.mx/milistaderegalos/50850754', '_blank');" ><i class="fa fa-plus text-primary me-3"></i>Ver Mesa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img"  >
                        <div class="service-text p-5" style="width: -webkit-fill-available;">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/assets/mujer.png" class="img-fluid" alt="...">
                                    <div class="carousel-caption">
                                        <p class="mb-0 text-codigov">Formal - Vestido largo excepto color bugambilia</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <h3 class="mb-3 title-hotel">Codigo de Vestimenta</h3>
                        
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


   



    <!-- Footer Start -->
    <div class="container-fluid  text-body footer px-0 wow fadeIn" data-wow-delay="0.1s" style="background-color: #172b4b;">
        <div style="position:relative">
            <div class="text-center contenedor-header-2" >
                <img  src="img/assets/header-3.png" class="img-fluid img-logo img-s" />
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-r"></div>
                
            </div>
            <div class="text-center container-decorator" >
                <div class="grad-l"></div>
            </div>
        </div>
        <div class="container footer-copy" >
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Edgar Sanabria</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>