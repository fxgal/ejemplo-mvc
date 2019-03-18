<h2>Editando datos de <?= $persona->nombres ?></h2>
<form method="POST" action="<?= URL_BASE ?>personas/edit">
  <input type="hidden" name="id" value="<?= $persona->id ?>" required>
  <fieldset>
    <div class="row">
      <div class="col">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?= $persona->nombres ?>" class="form-control" placeholder="Nombres" required>
      </div>
      <div class="col">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $persona->apellidos ?>" class="form-control" placeholder="Apellidos">
      </div>
      <div class="col">
        <label for="apellidos">Apodo</label>
        <input type="text" name="apodo" value="<?= $persona->apodo ?>" class="form-control" placeholder="Apodo">
        <small class="text-muted">Opcional</small>
      </div>
    </div>
  </fieldset>
  <button type="submit" class="btn btn-primary float-right">Guardar</button>
</form>
