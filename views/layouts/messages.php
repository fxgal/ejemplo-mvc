<?php if (isset($error->message)): ?>
  <div class="alert alert-danger" role="alert">
    <?= $error->message; ?>
  </div>
<?php endif; ?>
