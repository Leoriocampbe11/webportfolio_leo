
<?php
// Datos de conexión a MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "porfolio";

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Hover effect for images */
        .image-hover img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-hover img:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Transition effects for buttons */
        .btn-custom {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.1);
        }
        
        /* Additional styles */
        .section-title {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="container-fluid bg-dark text-white py-3 text-center">
        <h1 class="display-4">Portfolio de Leo C. Fonkeng</h1>
        <p class="lead">Bienvenido a mi portfolio profesional</p>
    </header>

    <main class="container my-5" data-aos="fade-up">
        <section>
            <h2 class="section-title">Proyectos Destacados</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card image-hover">
                        <img src="path/to/image1.jpg" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proyecto 1</h5>
                            <p class="card-text">Descripción breve del proyecto 1.</p>
                            <a href="#" class="btn btn-custom">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card image-hover">
                        <img src="path/to/image2.jpg" class="card-img-top" alt="Proyecto 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proyecto 2</h5>
                            <p class="card-text">Descripción breve del proyecto 2.</p>
                            <a href="#" class="btn btn-custom">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card image-hover">
                        <img src="path/to/image3.jpg" class="card-img-top" alt="Proyecto 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proyecto 3</h5>
                            <p class="card-text">Descripción breve del proyecto 3.</p>
                            <a href="#" class="btn btn-custom">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="container-fluid bg-dark text-white py-4 text-center">
        <p>&copy; 2023 Leo C. Fonkeng. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
