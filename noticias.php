<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Noticias</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tus estilos -->
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/noticias.css">
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
    <h1 class="h3 mb-3">Noticias</h1>
    <p class="text-secondary">Actualizaciones y lanzamientos de tus artistas favoritos.</p>

    <div class="row g-4">
      <!-- Beéle -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <span class="badge bg-primary mb-2">Beéle</span>
            <h2 class="h5">Beéle estrena sencillo “Brisa del Caribe”</h2>
            <small class="text-muted">Publicado: 10 oct 2025</small>
            <p class="mt-2 mb-0 text-secondary">
              El cantante colombiano lanzó un tema veraniego con guitarras y ritmos caribeños.
              El video oficial se grabó en Santa Marta y ya suma miles de reproducciones.
            </p>
          </div>
        </article>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <span class="badge bg-warning text-dark mb-2">Bad Bunny</span>
            <h2 class="h5">Bad Bunny anuncia fechas extra para su gira</h2>
            <small class="text-muted">Publicado: 14 nov 2025</small>
            <p class="mt-2 mb-0 text-secondary">
              Debido a la alta demanda, se agregaron nuevas fechas en San Juan, Ciudad de México
              y Buenos Aires. La gira incluirá un set especial con invitados sorpresa.
            </p>
          </div>
        </article>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <span class="badge bg-danger mb-2">Guns N' Roses</span>
            <h2 class="h5">Guns N' Roses prepara edición deluxe de “Appetite”</h2>
            <small class="text-muted">Publicado: 05 dic 2025</small>
            <p class="mt-2 mb-0 text-secondary">
              La banda planea relanzar su álbum clásico con demos inéditos y grabaciones en vivo
              remasterizadas, además de un libreto con fotos de archivo.
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
