
<html>
<head>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body>

<div id="succesmsg"></div>
  <div class="card";">

    <div class="card-header" id="crear-rad" style="display: none">
      Crear radicado
    </div>

    <form class="card-body" method="post" action="<?php $_SERVER['PHP_SELF']?>">

      <div class="form-group">
        <label>Radicado</label>
        <input name="numero_radicado" type="text" class="form-control" id="radicado">
      </div>

      <div class="form-group">
        <label for="fecha">Fecha</label>
        <select class="form-control" id="fecha" name="fecha">
          <?php for ($x = 2007; $x <= 2013; $x++) :?>
            <option> <?php echo $x; ?>  </option>
          <?php endfor; ?>
        </select>
      </div>

      <div class="form-group">
        <label>Titulo</label>
        <input name="titulo" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Temas</label>
        <input name="temas" type="text" class="form-control">
      </div>

      <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit">
      <a href="<?php echo ROOT_PATH?>radicado" class="btn btn-danger">Cancel</a>
    </form>

  </div>

  <script>

      $("#submit").onclick(function () {
        if ($.isNumeric($("#radicado").val()) == false) {
          errorMessage = "<p>Ingrese solo numeros en el campo radicado</p>"
          $("#succesmsg").html(errorMessage);
          $("#succesmsg").css("display", "block");
          $("#succesmsg").addClass("alert alert-danger");
        }
      });


  </script>


</body>
</html>

