<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Contacto</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/contacto.css"><!-- puede estar vacío -->
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

<main class="py-4">
  <div class="container" style="max-width: 640px;">
    <h1 class="h4 mb-3">Contacto</h1>
    <p class="text-secondary">Cuéntanos qué te parece la página o qué artista quisieras ver.</p>

    <div id="ok" class="alert alert-success d-none">¡Enviado con éxito!</div>

    <form id="form" class="vstack gap-3">
      <div>
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-control" id="nombre" name="nombre" required>
      </div>
      <div>
        <label class="form-label" for="correo">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
      </div>
      <div>
        <label class="form-label" for="telefono">Número</label>
        <input class="form-control" id="telefono" name="telefono">
      </div>
      <div>
        <label class="form-label" for="comentario">Comentario</label>
        <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-outline-secondary" type="reset">Limpiar</button>
      </div>
    </form>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para que aparezca el enviado con exito del formulario-->
<script>
document.getElementById('form').addEventListener('submit', function(e){
  e.preventDefault();
  document.getElementById('ok').classList.remove('d-none');
  this.reset();
});
</script>
</body>
</html>
