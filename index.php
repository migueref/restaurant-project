<?php
	session_start();
	include_once("controllers/ProductsController.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
		<header>
		  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		    <a class="navbar-brand" href="#">Navbar</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav mr-auto">
		        <li class="nav-item active">
		          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="./views/categories/create.php">Insertar categoría</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="./views/customers/create.php">Insertar Cliente</a>
		        </li>
		        <li class="nav-item dropdown">
							<?php if(! isset($_SESSION['is_logged_in'])):?>
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            ¿Quieres ingresar?
			          </a>
			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <a class="dropdown-item" href="./views/users/login.php">Iniciar sesión</a>
			            <a class="dropdown-item" href="#">Registrarse</a>
			          </div>
							<?php else:?>
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Bienvenido <?php echo $_SESSION['user_data']['nombre'];?>
			          </a>
			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <a class="dropdown-item" href="./views/users/login.php">Cerrar sesión</a>
			          </div>
							<?php endif?>
		        </li>

		      </ul>

		    </div>
		  </nav>
		</header>


		<main>
			<section>
				<div class="row">
					<?php foreach ($productos as $producto) { ?>
					<article class="card col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img class="card-img-top" src="./views/img/pizza-pepperoni.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title"><?php echo $producto['nombre'];?></h4>
					    <p class="card-text"><?php echo $producto['descripcion'];?>.</p>
					    <form action="./controllers/ProductsController.php" method="post">
								<input type="hidden" name="operacion" value="eliminarProducto">
								<input type="hidden" name="idProducto" value="<?php echo $producto['id'];?>">
								<input type="submit" class="btn btn-danger" value="Eliminar">
					    </form>
					  </div>
					</article>
					<?php }?>
				</div>
			</section>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
