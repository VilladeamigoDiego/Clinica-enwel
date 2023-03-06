<!DOCTYPE html>
<html lang="es">

<head>
    
    <?php include_once ('head.php') ?>
    <title>CLINICA PRIVADA ÑENWELITO - ASOCIARME</title>

</head>

<body>

    <!-- NO BORRAR / MENU DEL SITIO -->

    <?php include_once ('menu.php') ?>

    <!--COLOCA TU FORMULARIO AQUI-->

    <!--
        EL formulario debe contener 
        
        *DNI,
        *domicilio, 
        *un select para provincias (minino 5),
        *Telefono, 
        *Email,
        *Un select con 5 obras sociales,
        *estado civil (soltero, casado, divorciado, viudo),
        *cantidad de personas a cargo,
        *cantidad de hijos
        *checkbox con días de contacto,
        *checkbox con turnos de contacto (mañana, tarde, noche),
        *text area con enfermedades preexitentes,
        *input type file para cargar la foto del nuevo socio


     -->
    <form action="index.php" method="POST">

        <label>Nombre y apellido</label> <input type="text" placeholder="Nombre" name="usuario"><br>
        <label>Email</label> <input type="email" name="dni" placeholder="Email"><br>
        <label>Crear Contraseña</label> <input type="text" name="pass" placeholder="Nueva Contraseña"><br>
        <br>
        <button>ENVIAR</button>
    </form>

    <!-- NO BORRAR-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>