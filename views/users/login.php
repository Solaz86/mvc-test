
<html>
<head></head>
<body>

<div class="card";">

<div class="card-header">
  Ingreso
</div>

<form class="card-body" method="post" action="<?php $_SERVER['PHP_SELF']?>">

  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control">
  </div>

  <input name="submit" type="submit" class="btn btn-primary" value="Submit ">
</form>

</div>

</body>
</html>
