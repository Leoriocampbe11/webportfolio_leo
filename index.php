<?php
// Datos de conexión a MySQL
$servername = "localhost"; // Cambia "localhost" por el servidor que uses
$username = "root"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = ""; // Cambia "tu_contraseña" por tu contraseña de MySQL
$database = "porfolio"; // Cambia "nombre_base_de_datos" por el nombre de tu base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Leo C. Fonkeng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Mejoras en el estilo */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .card-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1.25rem;
        }
        @media (max-width: 768px) {
            .card-title {
                font-size: 2rem;
            }
            .card-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="50" tabindex="0">

<!-- Navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Leo Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonios</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Sobre mí</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
            </ul>
            <form class="d-flex" role="search" id="searchForm">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" id="searchInput">
                <button class="btn btn-outline-light" type="button" id="searchButton">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!-- Sección Inicio -->
<section id="home" class="text-center mt-5 pt-5">
    <div class="card text-bg-dark">
        <img src="portada.png" class="card-img" alt="Imagen de Portada">
        <div class="card-img-overlay d-flex flex-column justify-content-center">
            <h5 class="card-title display-4" style="color:azure;">Bienvenido a mi Portfolio</h5>
            <p class="card-text lead" style="color: azure;">
                Aquí encontrarás una muestra de mis trabajos, habilidades y proyectos más recientes.
            </p>
        </div>
    </div>
</section>

<!-- Sección Proyectos -->
<section id="projects" class="text-center my-5">
    <h1>Proyectos</h1>
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-3 mb-4">
                  <div class="card">
                      <img src="imagenweb2.png" alt="Descripción 1" class="card-img-top" style="height: 200px; object-fit: cover;">
                      <div class="card-body text-center">
                          <h5 class="card-title">Zay</h5>
                          <p class="card-text">Descripción: Sitio de venta de zapatillas deportivas y casuales, con un catálogo filtrable por marca y estilo, y reseñas de clientes.</p>
                          <a href="proyecto1/index.html" class="btn btn-primary">Visitar Página</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 mb-4">
                  <div class="card">
                      <img src="imagenweb3.png" alt="Descripción 2" class="card-img-top" style="height: 200px; object-fit: cover;">
                      <div class="card-body text-center">
                          <h5 class="card-title">Limelight</h5>
                          <p class="card-text">Descripción: Plataforma en línea para comprar muebles de hogar y oficina, con categorías de productos, personalización y un blog sobre diseño interior.</p>
                          <a href="proyecto2/pagina1.html" class="btn btn-primary">Visitar Página</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 mb-4">
                  <div class="card">
                      <img src="imagenweb1.png" alt="Descripción 3" class="card-img-top" style="height: 200px; object-fit: cover;">
                      <div class="card-body text-center">
                          <h5 class="card-title">Cafe</h5>
                          <p class="card-text">Descripción: Tienda en línea de café y té, con recetas y consejos de preparación, creando una experiencia educativa y acogedora.</p>
                          <a href="proyecto3/index.html" class="btn btn-primary">Visitar Página</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 mb-4">
                  <div class="card">
                      <img src="4.png" alt="Descripción 4" class="card-img-top" style="height: 200px; object-fit: cover;">
                      <div class="card-body text-center">
                          <h5 class="card-title">Travel</h5>
                          <p class="card-text">Descripción: Plataforma para planificar viajes, reservar vuelos y hoteles, con guías de destinos y un foro para viajeros.</p>
                          <a href="proyecto4/index.html" class="btn btn-primary">Visitar Página</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
    </section>
        </div>
    </div>
</section>

<!-- Sección Servicios -->
<section id="services" class="bg-light text-center py-5">
    <div class="container">
        <h1>Servicios</h1>
        <div class="row">
            <div class="col-md-4">
                <h3>Desarrollo Web</h3>
                <p>Creamos soluciones web dinámicas y atractivas para tu negocio.</p>
                <img src="2.png" width="200px" height="200px">
            </div>
            <div class="col-md-4">
                <h3>Consultoría</h3>
                <p>Te ayudamos a definir e implementar la mejor estrategia digital.</p>
                <img src="3.png" width="200px" height="200px">
            </div>
            <div class="col-md-4">
                <h3>Soporte Técnico</h3>
                <p>Brindamos soporte técnico personalizado para todas tus necesidades.</p>
                <img src="tech.webp" width="200px" height="200px">
            </div>
        </div>
    </div>
</section>

<!-- Sección Testimonios -->
<section id="testimonials" class="text-center py-5">
    <div class="container">
        <h1>Testimonios</h1>
        <div class="row">
        <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Leo es un desarrollador increíble. Gracias a su trabajo, nuestra web ahora es más rápida y eficiente." – Cliente 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Su atención al detalle y habilidades técnicas nos ayudaron a mejorar nuestra plataforma en tiempo récord." – Cliente 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Trabajar con Leo fue una excelente experiencia. Siempre disponible para solucionar cualquier problema." – Cliente 3</p>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- Sección Sobre mí -->
<section id="about" class="about text-center py-5">
    <div class="container">
        <h1 class="display-4 mb-4">Acerca de mí</h1>
        <p class="about-intro mb-4">Hola, soy <strong>Leo C. Fonkeng</strong>, desarrollador web apasionado...</p>
        <p class="about-intro mb-4">Hola, soy <strong>Leo C. Fonkeng</strong>, desarrollador web apasionado con amplia experiencia en tecnologías modernas. Me dedico a crear soluciones digitales que no solo cumplen con las expectativas de mis clientes, sino que las superan, ayudando a sus negocios a crecer de manera efectiva.</p>
          
          <p class="about-description mb-4">Mi trayectoria incluye el manejo de diversas tecnologías como <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, y frameworks como <strong>React</strong> y <strong>Node.js</strong>. Me enfoco en crear proyectos que sean atractivos visualmente y, a la vez, fáciles de usar, asegurando una excelente experiencia de usuario.</p>
          
          <p class="about-skills mb-4">También tengo experiencia en la integración de sistemas y el desarrollo de aplicaciones móviles, lo que me permite ofrecer un servicio integral adaptado a las necesidades específicas de mis clientes.</p>
          
          <p class="about-commitment mb-5">Mi objetivo es colaborar estrechamente con cada cliente, comprendiendo sus metas y desafíos para desarrollar soluciones a medida que se alineen con su visión estratégica.</p>
          
          <p class="lead mb-0">¿Buscas un desarrollador web que combine creatividad y técnica con un enfoque centrado en el cliente? <a href="#contact" class="fw-bold text-decoration-none">Contáctame</a> y llevemos tu presencia digital al siguiente nivel.</p>
    </div>
</section>

<!-- Sección Contacto -->
<section id="contact" class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1>Contacto</h1>
        <p>Puedes contactarme llenando el formulario o visitando mi oficina.</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">Formulario de Contacto</button>
    </div>
</section>

<!-- Modal de Contacto -->

<!-- Modal de Contacto Mejorado -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="contactModalLabel">Formulario de Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm" method="POST" action="guardar_contacto.php">
                    <!-- Nombre Completo -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                    </div>

                    <!-- Email y Teléfono -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Opcional">
                        </div>
                    </div>

                    <!-- Selección de Servicios -->
                    <div class="mb-3">
                        <label for="service" class="form-label">Servicio de Interés</label>
                        <select class="form-select" id="service" name="service">
                            <option value="" selected disabled>Seleccione un servicio</option>
                            <option value="web_development">Desarrollo Web</option>
                            <option value="seo">SEO</option>
                            <option value="digital_marketing">Marketing Digital</option>
                            <option value="consulting">Consultoría</option>
                        </select>
                    </div>

                    <!-- Mensaje -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>

                    <!-- Consentimiento de Privacidad -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">
                            He leído y acepto la <a href="politica_privacidad.html" target="_blank">Política de Privacidad</a>.
                        </label>
                    </div>

                    <!-- Botón de Enviar -->
                    <button type="submit" class="btn btn-primary w-100">Enviar Solicitud</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="text-center mt-5 py-4 bg-dark text-white">
    <p>© 2024 Portfolio de Leo C. Fonkeng | Contacto: leoburlades@gmail.com</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Scroll suave en los enlaces del navbar
    document.querySelectorAll('.navbar-nav a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Función de búsqueda
    $(document).ready(function() {
        $("#searchButton").click(function() {
            var searchText = $("#searchInput").val().toLowerCase();
            $("section").each(function() {
                var sectionText = $[_{{{CITATION{{{_1{](https://github.com/WilliamArdila/Proyecto/tree/8df0e67b1e5586f38c2cdc3db5d065e1949fc307/consultaCodigo.php)[_{{{CITATION{{{_2{](https://github.com/litposthinker/Tugas-aydin/tree/d488355075682b7260e2bc77502204a9221c1596/portofolio-gue%2Fdetail.php)[_{{{CITATION{{{_3{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_4{](https://github.com/lucathree/lucathree.github.io/tree/69d9a3b4dbdf5bb88afbdd94858cfb95b2aa75cc/_posts%2F2021%2F2021-07-28-1-miniproject3.md)[_{{{CITATION{{{_5{](https://github.com/Maviism/cek-buku/tree/738b459a10acfbb0c71493af7dc6308210c6194f/resources%2Fviews%2Flayouts%2Fnavbar.blade.php)[_{{{CITATION{{{_6{](https://github.com/jperezg-ideatik/IdeatikMainWeb/tree/4526e7eda09469f1ac1c54428a2f0d665e7525a9/layout%2Fnavbar.php)[_{{{CITATION{{{_7{](https://github.com/geologiaymapas/mapa-ciudadano/tree/a16bee9028a8ade3d87eebd882dbdbaf665f8292/resources%2Fviews%2Fescritorio%2Fabout.blade.php)[_{{{CITATION{{{_8{](https://github.com/Hack-ademy-4/ProyectoBenja/tree/9120bc06327d9544810040c2cf75ee5345e5973d/main.js)[_{{{CITATION{{{_9{](https://github.com/feliking/frutalero/tree/740db8ebf264d0b0a310205be7417aef7de179cb/index.php)[_{{{CITATION{{{_10{](https://github.com/ErnestoJose23/despacho-laravel/tree/8b2552fe363319895de5211ee6e991b7ce8f031b/resources%2Fviews%2FApp%2Findex.blade.php)[_{{{CITATION{{{_11{](https://github.com/AlexisAmand/HistoiresDePoilus/tree/291edb46e6aa6e94ff5dc9fadfd5585f000293a3/include%2Fcontact.inc.php)[_{{{CITATION{{{_12{](https://github.com/FernandoCo92/Kigen2.0/tree/d5599458e5dd2530541e72a8801204df23176745/resources%2Fviews%2Fpage%2Fproveedores-editar.blade.php)[_{{{CITATION{{{_13{](https://github.com/antoHero/vendor-app/tree/53691f02f62d4f97f90fd3f5be8cfce0462d07a5/resources%2Fviews%2Fvendor%2Fmodals%2Fadd_product.blade.php)[_{{{CITATION{{{_14{](https://github.com/designifrit/Cesde/tree/2904928da7a3b5fda49a7729ef6adc58535d0ca8/3er_periodo%2Fprogramacion_web%2F02_actividades%2F02_alquiler_inmuebles%2Fapp%2FViews%2Fsignup_view.php)[_{{{CITATION{{{_15{](https://github.com/tamaszentai/ttech_member_school/tree/6134c560d9c517be193ca0a10499e652c5611090/resources%2Fviews%2Fcreate.blade.php)[_{{{CITATION{{{_16{](https://github.com/yaniv0601/digg/tree/f3531deaa7a46a88477e708b43012ed72743c64a/signup.php)[_{{{CITATION{{{_17{](https://github.com/Mos-nutthapon/CRUD_PHP_OOP/tree/94e3b1785e3e4d170ea1f897fcdc5c7e13226f8e/Homepage%2Fregister.php)[_{{{CITATION{{{_18{](https://github.com/creativeleo/creativeleo.github.io/tree/97b15a3da2e24ef495399a736917b1a63d7df098/assets%2Fjs%2Fscripts2.js)`</script>

                    