<?php if (isset($message)): ?>
  <div class="alert alert-<?= ($message['type']==='error')?'danger':$message['type']?>" role="alert">
    <?= $message['text']; ?>
  </div>
<?php endif; ?>
