<?php  

include_once('cpanel/funciones.php');
  if($_POST){
    guardarTurnos($_POST);


  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once ('head.php') ?>
  <title>CLINICA PRIVADA ÑENWELITO - TURNOS</title>
        <!-- menu -->

        <?php include_once ('menu.php') ?>
    <!--CSS PERSONAL-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  


    <div class="container mt-4">   
    <div class="row">
    <form class="row g-3" action= "turnos.php" method= "POST" >
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombre</label>
          <input type="text" class="form-control" name ="nombre" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="inputPassword4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">D.N.I.</label>
          <input type="text" class="form-control" name="documento" id="inputPassword4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Email.</label>
          <input type="email" class="form-control" name="email" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Domicilio</label>
          <input type="text" class="form-control" name="domicilio" id="inputAddress" placeholder="Entre Rios 158 ">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Ciudad</label>
          <input type="text" class="form-control" name="ciudad" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Provincia</label>
          <select id="inputState" class="form-select" name="provincia">
            <option selected>Selecciona una provincia</option>
            <option value = "Mendoza">Mendoza</option>
            <option value = "San Juan">San Juan</option>
            <option value = "San Luis">San Luis</option>
            <option value = "Cordoba">Cordoba</option>
            <option value = "La Pampa">La Pampa</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Codigo Postal</label>
          <input type="text" class="form-control" id="inputZip" name="cod_postal">
        </div>

        <div class="col-4">
            <label for="inputState" class="form-label">Especialidad</label>
            <select id="inputState" class="form-select" name="especialidad">
              <option selected>Elige una especialidad</option>
              <option value= "clinica">Clinica</option>
              <option value= "oftalmologia">Oftalmología</option>
              <option value= "odontologia">Odontología</option>
              <option value= "cardiologia">Cardiología</option>
            </select>
          </div>

        <div class="col-4">
            <label for="inputState" class="form-label">Fecha de consulta</label>
            <input type="date" class="form-control" name="fecha_consulta" id="">
          </div>
          <div class="col-12">
            <input type="submit" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>
</div> 
</div>
</body>
</html>