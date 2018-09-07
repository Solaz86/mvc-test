
<html>
<head></head>
<body>

<div class="card";">

<div class="card-header">
  Registro
</div>

<form class="card-body" method="post" action="<?php $_SERVER['PHP_SELF']?>">

  <div class="form-group">
    <label>Nombre</label>
    <input name="name" type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control">
  </div>

  <input type="submit" class="btn btn-primary" name="submit" value="Submit ">
</form>

</div>

</body>
</html>
