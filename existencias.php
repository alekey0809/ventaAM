<?php
// Página de existencias
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existencias - A&M Joyas</title>
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
        <h1>Existencias</h1>
        <p>Consulta la disponibilidad de nuestros productos</p>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-dark table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Existencias</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Anillo Elegante</td>
                            <td>Anillo de plata inspirado en las olas nocturnas.</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Manilla de Cuero</td>
                            <td>Manilla artesanal con detalles que evocan la arena bajo la luna.</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Anillo Minimalista</td>
                            <td>Diseño sencillo y elegante, perfecto para cualquier ocasión.</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="text-center text-light py-4 mt-5 bg-dark-blue">
        &copy; 2025 A&M Joyas. Inspirados en la noche en la playa.
    </footer>
</body>
</html>
