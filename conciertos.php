<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebMusic — Conciertos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/conciertos.css">
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
    <h1 class="h3 mb-3"> Siguientes Conciertos: </h1>
    <p class="text-secondary">Fechas:</p>

    <div class="row g-4">
      <!-- Octubre 2025 -->
      <div class="col-12 col-md-4">
        <div class="card h-100">
          <div class="card-header fw-semibold">Octubre 2025</div>
          <div class="card-body">
            <table class="calendar w-100">
              <thead>
                <tr>
                  <th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th>
                </tr>
              </thead>
              <tbody>
                <tr><td></td><td></td><td>1</td><td>2</td><td class="event" data-title="Peso Pluma — Guadalajara">3</td><td>4</td><td>5</td></tr>
                <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td></tr>
                <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td class="event" data-title="Beéle — Bogotá">18</td><td>19</td></tr>
                <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
                <tr><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td><td></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-100">
          <div class="card-header fw-semibold">Noviembre 2025</div>
          <div class="card-body">
            <table class="calendar w-100">
              <thead>
                <tr>
                  <th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th>
                </tr>
              </thead>
              <tbody>
                <tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
                <tr><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
                <tr><td>10</td><td>11</td><td>12</td><td>13</td><td class="event" data-title="Bad Bunny — San Juan">14</td><td>15</td><td>16</td></tr>
                <tr><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td></tr>
                <tr><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-100">
          <div class="card-header fw-semibold">Diciembre 2025</div>
          <div class="card-body">
            <table class="calendar w-100">
              <thead>
                <tr>
                  <th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>2</td><td>3</td><td>4</td><td class="event" data-title="Guns N' Roses — Los Ángeles">5</td><td>6</td><td>7</td></tr>
                <tr><td>8</td><td>9</td><td>10</td><td>11</td><td class="event" data-title="Shakira — Miami">12</td><td>13</td><td>14</td></tr>
                <tr><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td></tr>
                <tr><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td></tr>
                <tr><td>29</td><td>30</td><td>31</td><td></td><td></td><td></td><td></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <h2 class="h5 mt-4 mb-2">Próximos conciertos</h2>
    <div class="list-group">
      <div class="list-group-item">
        <strong>03 Octubre 2025 — Peso Pluma</strong>
        <div class="text-secondary small">Barrio Mexico</div>
      </div>
      <div class="list-group-item">
        <strong>18 Octubre 2025 — Beéle</strong>
        <div class="text-secondary small">Parque Viva</div>
      </div>
      <div class="list-group-item">
        <strong>14 Noviembre 2025 — Bad Bunny</strong>
        <div class="text-secondary small">Estadio Nacional</div>
      </div>
      <div class="list-group-item">
        <strong>05 Diciembre 2025 — Guns N' Roses</strong>
        <div class="text-secondary small">Los Ángeles</div>
      </div>
      <div class="list-group-item">
        <strong>12 Dic 2025 — Colaboraciones</strong>
        <div class="text-secondary small">California</div>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
