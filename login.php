<?php
  require_once('cpanel/funciones.php');
  if($_POST){

    loguear($_POST);

  }
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once ('head.php'); ?>
  <title>CLINICA PRIVADA ÑENWELITO - LOGIN</title>

</head>

<body>
    <!-- menu -->

    <?php include_once ('menu.php'); ?>

    <div class="container logueo">
        <form action="login.php" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4"  class="form-label fs-4 fw-bold shadows">INGRESE SUS DATOS</label>
          <input type="text" placeholder="Email" class="form-control" name ="email" id="inputEmail4">
        </div>
        <div class="col-md-6 mt-3">
          <input type="password" placeholder="Contraseña" class="form-control" name="pass" id="inputPassword4">
        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-success mt-3">
          </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
