<h2>Editar mis datos</h2>
<form method="POST" action="<?= URL_BASE ?>usuarios/edit">
  <fieldset>
    <div class="row">
      <div class="col">
        <label for="nombres">Usuario</label>
        <input type="text" name="usuario" value="<?= $usuario->usuario ?>" class="form-control" placeholder="Nombre de Usuario" required>
      </div>
      <div class="col">
        <label for="apellidos">Clave</label>
        <input type="password" name="clave" value="" class="form-control" placeholder="Clave">
      </div>
    </div>
  </fieldset>
  <button type="submit" class="btn btn-primary float-right mt-3">Guardar</button>
</form>
