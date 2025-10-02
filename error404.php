<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Error 404</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tus estilos (estás dentro de /JS/) -->
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/index.css"><!-- o crea 404.css si quieres -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">WebMusic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="artistas.php">Artistas</a></li>
        <li class="nav-item"><a class="nav-link" href="albumes.php">Álbumes</a></li>
        <li class="nav-item"><a class="nav-link" href="conciertos.php">Conciertos</a></li>
        <li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
        <li class="nav-item"><a class="nav-link" href="noticias.php">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
        <li class="nav-item"><a class="nav-link" href="acerca de.php">Acerca de</a></li>
        <li class="nav-item"><a class="nav-link active" href="error404.php">Error 404</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="py-5">
  <div class="container">
    <div class="mx-auto" style="max-width:720px">
      <h1 class="h3 mb-2">Error 404</h1>
      <p class="text-secondary">La página que buscas no existe. Puedes volver al inicio.</p>

      <div class="card p-3 border-0" style="background:#121621;border-radius:14px">
        <img src="/WebMusic/IMG/Robotito.png" alt="Ilustración 404" class="img-fluid mx-auto d-block"
             style="max-width:280px" onerror="this.style.display='none'">
      </div>

      <div class="mt-3">
        <a class="btn btn-primary" href="index.php">Volver al inicio</a>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
