<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Artistas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/artistas.css">
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

<main class="py-4">
  <div class="container">
    <h1 class="h3 mb-3">Artistas mas buscados:</h1>
    <p class="text-secondary">Cinco artistas de géneros distintos.</p>

    <div class="row g-3">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100">
          <img src="/WebMusic/IMG/Beele.png" class="card-img-top" alt="Beéle" onerror="this.style.display='none'">
          <div class="card-body">
            <strong>Beéle</strong><br><small class="text-secondary">Pop latino</small>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100">
          <img src="/WebMusic/IMG/bad-bunny.png" class="card-img-top" alt="Bad Bunny" onerror="this.style.display='none'">
          <div class="card-body">
            <strong>Bad Bunny</strong><br><small class="text-secondary">Reggaetón / Trap</small>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100">
          <img src="/WebMusic/IMG/guns-n-roses.png" class="card-img-top" alt="Guns N' Roses" onerror="this.style.display='none'">
          <div class="card-body">
            <strong>Guns N' Roses</strong><br><small class="text-secondary">Rock </small>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100">
          <img src="/WebMusic/IMG/peso-pluma.png" class="card-img-top" alt="Peso Pluma" onerror="this.style.display='none'">
          <div class="card-body">
            <strong>Peso Pluma</strong><br><small class="text-secondary">Corridos tumbados</small>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100">
          <img src="/WebMusic/IMG/colaboraciones.png" class="card-img-top" alt="Colaboraciones" onerror="this.style.display='none'">
          <div class="card-body">
            <strong>Colaboraciones</strong><br><small class="text-secondary">Varios</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
