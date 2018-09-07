
<html>
<head></head>
<body>

<div class="card";">

<div class="card-header">
  Ingreso
</div>

<form class="card-body" method="post" action="<?php $_SERVER['PHP_SELF']?>">

  <div class="form-group">
    <label>Numero de radicado</label>
    <input name="numero_radicado" type="text" class="form-control">
  </div>

  <input name="submit" type="submit" class="btn btn-primary" value="Submit ">
</form>

</div>

</body>
</html>

<div>
  <?php if (isset($_SESSION['is_logged_in'])) : ?>
    <div class="row">
      <?php if (isset($viewmodel)) : ?>
        <?php foreach($viewmodel as $item) : ?>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <label>Numero de radicado</label>
                <h3><?php echo $item['numero_radicado']; ?></h3>
                <label>Fecha</label>
                <small><?php echo $item['fecha']; ?></small>
                <hr />
                <label>Título</label>
                <p><?php echo $item['titulo']; ?></p>
                <label>Temas</label>
                <p><?php echo $item['temas']; ?></p>
                </div>
            </div>
          </div>


        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  <?php endif; ?>

</div>
