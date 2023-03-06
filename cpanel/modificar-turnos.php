<?php
include_once("funciones.php");
$persona['idPersona'] = "";
$persona["nombre"] = "";
$persona["apellido"] = "";
$persona["domicilio"] = "";
$persona["email"] = "";
$persona["pass"] = "";
$persona["perfil"] = "";
$persona["provincia"] = "";

if(isset($_GET['id'])){
    $datos = buscarId($_GET['id']);
    $persona = mysqli_fetch_array($datos);
}

if($_POST){
    modificarUsuario($_POST);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

    <div class="col">
                <a href="../index.php" >
                    <button>VOLVER</button>
                </a>
            </div> 
    <form action="modificar-usuarios.php" method="post">
        <input type="text" name="idPersona" hidden value="<?php $persona['idPersona']?>">
        <label>Nombre</label><input type="text" name="nombre" value ="<?php $persona['nombre'] ?>"><br>
        <label>Apellido</label><input type="text" name="apellido" value ="<?php $persona['apellido'] ?>"><br>
        <label>Email</label><input type="email" name="email" value ="<?php $persona['email'] ?>"><br>
        <label>Domicilio</label><input type="text" name="domicilio" value ="<?php $persona['domicilio'] ?>"><br>
        <label>Contraseña</label><input type="password" name="pass" value ="<?php $persona['pass'] ?>"><br>
        <label>Foto perfil</label><input type="file" name="perfil" value ="<?php $persona['perfil'] ?>"><br>
        <label>Provincia</label>
        <select name="provincia" id="">
            <option value="Mendoza">Mendoza</option>
            <option value="San Juan">San Juan</option>
            <option value="Buenos Aires">Buenos Aires</option>
        </select>
        <input type="submit" value="GUARDAR">
    </form>
</body>
</html>