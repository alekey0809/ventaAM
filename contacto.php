<?php
// Página de contacto con enlace a WhatsApp
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - A&M Joyas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-night">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">A&M Joyas</a>
            <div class="ms-auto">
                <a href="index.php" class="btn btn-outline-light me-2">Inicio</a>
                <a href="existencias.php" class="btn btn-outline-light me-2">Existencias</a>
                <a href="catalogo.php" class="btn btn-outline-light me-2">Catálogo</a>
                <a href="contacto.php" class="btn btn-light">Contáctanos</a>
            </div>  
        </div>
    </nav>
    <header class="text-center text-light py-5">
        <h1>Contáctanos</h1>
        <p>¿Tienes dudas o quieres hacer un pedido? ¡Escríbenos por WhatsApp!</p>
    </header>
    <main class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 40vh;">
        <a href="https://wa.me/573053734502" target="_blank" class="btn btn-success btn-lg mb-4" style="box-shadow: 0 4px 24px 0 rgba(37, 211, 102, 0.3);">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width:32px; height:32px; margin-right:10px; vertical-align:middle;"> 
            Chatea con nosotros en WhatsApp
        </a>
        <p class="text-light">Atendemos consultas, pedidos y sugerencias.<br>Horario: 9:00am - 8:00pm</p>
    </main>
    <footer class="text-center text-light py-4 mt-5 bg-dark-blue">
        &copy; 2025 A&M Joyas. Inspirados en la noche en la playa.
    </footer>
</body>
</html>
