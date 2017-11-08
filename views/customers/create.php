
<form action="../../controllers/CustomersController.php" method="post">
  Nombre
  <input type="text" name="nombre" placeholder="John Doe" required/>
  Dirección
  <input type="text" name="direccion" placeholder="Av. justicia #4" required/>
  Teléfono
  <input type="text" name="telefono" placeholder="7775144126"required />

  <input type="hidden" name="operacion" value="AgregarCliente">
  <input type="submit" name="" value="Guardar">
</form>
