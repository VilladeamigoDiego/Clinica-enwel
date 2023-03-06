<?php
    include_once('funciones.php');

        listar();
    

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
      <th scope="col">#</th>
      <th scope="col">USUARIO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTIVO</th>
    </tr>
  </thead>
  <tbody>
      <?php
        while($consulta = mysqli_fetch_array($sql)){
            echo "
            <tr>
                <td> " . $consulta['idUsuario'] . "</td>
                <td> " . $consulta['nombre'] . "</td>
                <td> " . $consulta['email'] . "</td>
                <td> " . $consulta['activo'] . "</td>
            </tr>
            ";
        }
        
      ?>
          <div class="col pt-3 pb-5 ps-2">
            <a href="dashboard.php" >
                <button>VOLVER</button>
            </a>
          </div> 


  </tbody>
</table>
</html>