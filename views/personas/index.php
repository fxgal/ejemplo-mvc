<h2>Lista de personas registradas</h2>
<?php if ($personas->num_rows>0): ?>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Apodo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while($persona = $personas->fetch_object()): ?>
      <tr>
        <td><?= $persona->id ?></td>
        <td><?= $persona->nombres ?></td>
        <td><?= $persona->apellidos ?></td>
        <td><?= $persona->apodo ?></td>
        <td>
          <div class="btn-group">
            <a href="<?= URL_BASE ?>personas/edit&id=<?= $persona->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
            <a href="<?= URL_BASE ?>personas/delete&id=<?= $persona->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
          </div>
        </td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
<?php else: ?>
<?php endif; ?>
