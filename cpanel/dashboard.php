<?php
include_once('funciones.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css\dashboard.css">
    
    <title>Bienvenido Luisillo El Gordillo</title>
</head>
<body class="bg-dark">
    <main class="border ">
        <article class="container p-2 m-4 col-4 d-flex justify-content-between">
            <div class="col">
                <a href="listado-usuarios.php" >
                    <button>LISTA DE USUARIOS</button>
                </a>
            </div>    
            <div class="col">
                <a href="modificar-turnos.php" >
                    <button>MODIFICAR TURNOS</button>
                </a>
            </div> 
            <div class="col">
                <a href="borrar-turnos.php" >
                    <button>ELIMINAR TURNOS</button>
                </a>
            </div> 
            <div class="col">
                <a href="listado-turnos.php" >
                    <button>LISTA DE TURNOS</button>
                </a>
            </div>
            <div class="col">
                <a href="logout.php" >
                    <button>Cerrar Sesion</button>
                </a>
            </div> 
        </article>  
    </main>


</body>
</html>