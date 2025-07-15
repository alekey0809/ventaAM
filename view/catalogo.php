<?php
// Página de catálogo
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - A&M Joyas</title>
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
        <h1>Catálogo de Productos</h1>
        <p>Explora todos nuestros anillos y manillas</p>
    </header>
    <main class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo elegante">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Elegante</h5>
                        <p class="card-text">Anillo de plata inspirado en las olas nocturnas.</p>
                        <span class="badge bg-light text-dark">$80.000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Manilla de cuero">
                    <div class="card-body">
                        <h5 class="card-title">Manilla de Cuero</h5>
                        <p class="card-text">Manilla artesanal con detalles que evocan la arena bajo la luna.</p>
                        <span class="badge bg-light text-dark">$45.000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo minimalista">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Minimalista</h5>
                        <p class="card-text">Diseño sencillo y elegante, perfecto para cualquier ocasión.</p>
                        <span class="badge bg-light text-dark">$60.000</span>
                    </div>
                </div>
            </div>
            
        </div>
                <div class="row g-5">
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo elegante">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Elegante</h5>
                        <p class="card-text">Anillo de plata inspirado en las olas nocturnas.</p>
                        <span class="badge bg-light text-dark">$80.000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Manilla de cuero">
                    <div class="card-body">
                        <h5 class="card-title">Manilla de Cuero</h5>
                        <p class="card-text">Manilla artesanal con detalles que evocan la arena bajo la luna.</p>
                        <span class="badge bg-light text-dark">$45.000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="display: flex; align-items: stretch; margin-bottom: 5rem;">
                <div class="card bg-dark-blue text-light h-100">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Anillo minimalista">
                    <div class="card-body">
                        <h5 class="card-title">Anillo Minimalista</h5>
                        <p class="card-text">Diseño sencillo y elegante, perfecto para cualquier ocasión.</p>
                        <span class="badge bg-light text-dark">$60.000</span>
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
