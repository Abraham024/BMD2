<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Galería</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/galeria.css">
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
    <h1 class="h3 mb-3">Galería de conciertos</h1>
    <p class="text-secondary">Mira los recientes conciertos de los tres principales artistas: <code></code></p>

    <h2 class="h5 mt-4 mb-3">Beéle</h2>
    <div class="row g-3">
      <div class="col-12 col-md-4">
        <figure class="card-gallery">
           <img src="/WebMusic/IMG/Concierto beele.png"
           class="img-fluid rounded shadow-lg d-block mx-auto"
           style="max-width: 300px"
           alt="Concierto beele"
           onerror="this.style.display='none'">
        </figure>
      </div>
    </div>

    <h2 class="h5 mt-4 mb-3">Bad Bunny</h2>
    <div class="row g-3">
      <div class="col-12 col-md-4">
        <figure class="card-gallery">
           <img src="/WebMusic/IMG/Concierto bad bunny.png"
           class="img-fluid rounded shadow-lg d-block mx-auto"
           style="max-width: 300px"
           alt="Concierto bad bunny"
           onerror="this.style.display='none'">
        </figure>
      </div>
    </div>

    <h2 class="h5 mt-4 mb-3">Guns N' Roses</h2>
    <div class="row g-3">
      <div class="col-12 col-md-4">
        <figure class="card-gallery">
           <img src="/WebMusic/IMG/Concierto Guns N' Roses.png"
           class="img-fluid rounded shadow-lg d-block mx-auto"
           style="max-width: 300px"
           alt="Concierto Guns N' Roses"
           onerror="this.style.display='none'">
        </figure>
      </div>
    </div>
  </div>
</main>

</body>
</html>
