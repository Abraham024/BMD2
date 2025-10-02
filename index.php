<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Inicio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/index.css">
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
        <li class="nav-item"><a class="nav-link" href="error404.php">Error 404</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="py-3 bg-light border-bottom">
  <div class="container">
    <div class="alert alert-primary mb-0" role="alert">
      <strong>¡Bienvenido(a) a WebMusic!</strong>
      Explora artistas con sus álbumes más recientes, las noticias más curiosas y todo este mundo maravilloso de la música.
    </div>
  </div>
</div>

<header class="py-5 bg-gradient text-white hero">
  <div class="container">
    <div class="d-flex justify-content-center">
      <img src="/WebMusic/IMG/imagen de index.png"
           class="img-fluid rounded shadow-lg d-block mx-auto"
           style="max-width: 720px"
           alt="Portada"
           onerror="this.style.display='none'">
    </div>
  </div>
</header>

<section class="py-5">
  <div class="container">
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
