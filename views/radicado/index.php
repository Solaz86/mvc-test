<div>
  <?php if (isset($_SESSION['is_logged_in'])) : ?>
  <div>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>radicado/add">Crear radicado</a>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>radicado/load">Consultar radicado</a>
  </div>
  <div class="row">
  <?php endif; ?>

</div>