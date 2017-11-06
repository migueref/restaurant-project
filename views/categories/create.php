
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Crear categoría</title>
  </head>
  <body>
		<?php
			include_once('../partials/header.php');
		?>
		<main>
			<section>
				<div class="container">

          <form action="../../controllers/CategoriesController.php" method="post">
            <input type="hidden" name="operacion" value="registrarCategoria">
            <div class="form-group">
              <input type="text" class="form-control" name="nombreCategoria" placeholder="Ingrese nombre de categoría" required>
            </div>
            <div class="form-group">
              <textarea name="descripcionCategoria" class="form-control" placeholder="Escriba descripción aquí" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
          </form>
				</div>
			</section>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
