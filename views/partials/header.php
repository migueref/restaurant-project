<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../../">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../categories/create.php">Insertar categoría</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customers/create.php">Insertar Cliente</a>
        </li>
        <li class="nav-item dropdown">
          <?php if(! isset($_SESSION['is_logged_in'])):?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ¿Quieres ingresar?
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../users/login.php">Iniciar sesión</a>
              <a class="dropdown-item" href="#">Registrarse</a>
            </div>
          <?php else:?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Bienvenido <?php echo $_SESSION['user_data']['nombre'];?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../../controllers/logout.php">Cerrar sesión</a>
            </div>
          <?php endif?>
        </li>

      </ul>

    </div>
  </nav>
</header>
