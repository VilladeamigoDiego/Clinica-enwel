<?php
    include_once('funciones.php');

        listarTurnos();
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel de Control de Luisillo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--CSS PERSONAL-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

</head>

<body>
    
    <table class="table">

  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Provincia</th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Fecha de Turno</th>
    </tr>
  </thead>
  <tbody>
      <?php
        while($consulta = mysqli_fetch_array($sql)){
            echo "
            <tr>
                <td> " . $consulta['nombreTurno'] . "</td>
                <td> " . $consulta['apellidoTurno'] . "</td>
                <td> " . $consulta['DNI'] . "</td>
                <td> " . $consulta['domicilio'] . "</td>
                <td> " . $consulta['ciudad'] . "</td>
                <td> " . $consulta['provincia'] . "</td>
                <td> " . $consulta['codPostal'] . "</td>
                <td> " . $consulta['especialidad'] . "</td>
                <td> " . $consulta['fecha'] . "</td>
            </tr>
            ";
        }
        
      ?>


  </tbody>
</table>
</html>