<?php
// Conexión a la base de datos
$host = "localhost"; // Cambia estos valores según tu configuración
$dbname = "porfolio";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización y validación de datos
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($first_name && $last_name && $email && $message) { // Verificación de campos obligatorios
        // Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO contactos (first_name, last_name, email, phone, service, message, date_submitted)
                VALUES (:first_name, :last_name, :email, :phone, :service, :message, NOW())";
        
        $stmt = $pdo->prepare($sql);
        
        // Vinculación de parámetros
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':service', $service);
        $stmt->bindParam(':message', $message);
        
        // Ejecución y verificación
        if ($stmt->execute()) {
            echo "Gracias por contactarnos. Su solicitud ha sido recibida.";
        } else {
            echo "Hubo un error al procesar su solicitud. Inténtelo de nuevo más tarde.";
        }
    } else {
        echo "Por favor, complete todos los campos obligatorios.";
    }
}
?>
