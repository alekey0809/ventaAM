<?php
// Página principal de productos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anillos y Manillas - Noche en la Playa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-night">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">A&M Joyas</a>
            <div class="ms-auto">
                <a href="index.php" class="btn btn-outline-light me-2">Inicio</a>
                <a href="existencias.php" class="btn btn-outline-light me-2">Existencias</a>
                <a href="catalogo.php" class="btn btn-outline-light me-2">Catálogo</a>
                <a href="contacto.php" class="btn btn-light">Contáctanos</a>
            </div>
        </div>
    </nav>
    <header class="text-center text-light py-5">
        <h1>Anillos y Manillas</h1>
        <p>Descubre nuestra colección inspirada en la noche en la playa</p>
    </header>
    <main class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo elegante">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Elegante</h5>
                        <p class="card-text">Anillo de plata inspirado en las olas nocturnas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Manilla de cuero">
                    <div class="card-body">
                        <h5 class="card-title">Manilla de Cuero</h5>
                        <p class="card-text">Manilla artesanal con detalles que evocan la arena bajo la luna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo minimalista">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Minimalista</h5>
                        <p class="card-text">Diseño sencillo y elegante, perfecto para cualquier ocasión.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center text-light py-4 mt-5 bg-dark-blue">
        &copy; 2025 A&M Joyas. Inspirados en la noche en la playa.
    </footer>
</body>
</html>
