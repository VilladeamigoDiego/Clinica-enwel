<?php

    // Conexion para la base de datos
 
    session_start();

    function conectar(){

        $host = "localhost";
        $user = "root";
        $pass = "";
        $BD = "clinicanenwel";

        $GLOBALS['conexion'] = mysqli_connect($host, $user, $pass);
        $conexion_db = mysqli_select_db($GLOBALS['conexion'], $BD) or die(mysqli_error());
    
    };

    // Guardado de turnos
        function guardarTurnos($datos){
            
            conectar();
            $errores = [];
            $id = ['idUsuario'];

                    if($datos['nombre'] =="" || $datos['nombre'] ==NULL){
                        array_push($errores,"Debe completar el nombre");
                    }
                    if($datos['apellido'] =="" || $datos['apellido'] ==NULL){
                        array_push($errores,"Debe completar el apellido");
                    }
                    if($datos['documento'] =="" || $datos['documento'] ==NULL){
                        array_push($errores,"Debe completar el documento");
                    }
                    if($datos['email'] == NULL){
                        array_push($errores, "Debe completar el email");
                    }
                    if($datos['email'] != NULL){
                        if(filter_var($datos['email'], FILTER_VALIDATE_EMAIL)==false){
                            array_push($errores,"El formato de email no es válido");
                           }
                    }
                    if($datos['domicilio'] =="" || $datos['domicilio'] ==NULL){
                        array_push($errores,"Debe completar el domicilio");                        
                    }
                    if($datos['ciudad'] =="" || $datos['ciudad'] ==NULL){
                        array_push($errores,"Debe completar su ciudad");
                    }
                    if($datos['provincia'] =="" || $datos['provincia'] ==NULL){
                        array_push($errores,"Debe seleccionar una provincia");
                    }
                    if($datos['cod_postal'] =="" || $datos['cod_postal'] ==NULL){
                        array_push($errores,"Debe completar el código postal");
                    }
                    if($datos['especialidad'] =="" || $datos['especialidad'] ==NULL){
                        array_push($errores,"Debe indicar la especialidad");
                    }
                    if($datos['fecha_consulta'] =="" || $datos['fecha_consulta'] ==NULL){
                        array_push($errores,"Debe completar el dia del turno");
                    }
                    if($errores==NULL){
                        $sql = "INSERT INTO turnos (nombreTurno, apellidoTurno, DNI, email, domicilio, ciudad, provincia, codPostal, especialidad, fecha) VALUES('$datos[nombre]', '$datos[apellido]','$datos[documento]', '$datos[email]','$datos[domicilio]', '$datos[ciudad]', '$datos[provincia]','$datos[cod_postal]','$datos[especialidad]','$datos[fecha_consulta]') ";
        
                        mysqli_query($GLOBALS['conexion'],$sql);
                        mysqli_close($GLOBALS['conexion']);
                        array_push($errores,"Usuario creado con éxito!");
                    }
                    return $errores;
                }
        

            // LOGUEAR USUARIO
            function loguear($datos){

                // Conectar a la BD
                conectar();
                
                    global $sql;

                    $email = $datos ['email'];
                    $pass = $datos ['pass'];
                    $errores = [];

                    $sql = mysqli_query($GLOBALS['conexion'], "SELECT * FROM usuarios WHERE email = '$email' ");
                    $consulta = mysqli_fetch_array($sql); 
            
                        if (isset($consulta)){

                            $resultado = password_verify($pass, $consulta['pass']);

                            if ($consulta['email'] == $email && $resultado == TRUE){

                                session_start();
                                $_SESSION = $consulta;

                                header("location: cpanel/dashboard.php"); exit;
                            }else{
                                $errores["datos"] = "No coinciden las contraseñas";
                                return $errores;
                            }    

                        }else{

                            $errores["datos"] = "Los datos ingresados no coinciden";
                            return $errores;

                        }
            }
            function listar(){
                conectar();
        
                global $sql;
        
                $sql = mysqli_query($GLOBALS['conexion'], "SELECT * FROM usuarios");
                mysqli_close($GLOBALS['conexion']);

            }
            function listarTurnos(){
                    conectar();
        
                    global $sql;
            
                    $sql = mysqli_query($GLOBALS['conexion'], "SELECT * FROM turnos ORDER BY fecha");
                    mysqli_close($GLOBALS['conexion']);
            }
            function modificarUsuario($datos){
     
                $id = $datos['idPersona'];
                $nombre = $datos["nombre"];
                $apellido = $datos["apellido"];
                $domicilio = $datos["domicilio"];
                $email = $datos["email"];
                $pass = $datos["pass"];
                $perfil = $datos["perfil"];
                $provincia = $datos["provincia"];
            
                $sql = "UPDATE personas SET 
                    nombre = '$nombre', 
                    apellido = '$apellido',
                    email = '$email', 
                    pass = '$pass', 
                    perfil = '$perfil',
                    provincia = '$provincia' 
                    WHERE idPersona = '$id'";
            
                mysqli_query($GLOBALS['conexion'], "SELECT * FROM turnos");
                mysqli_close($GLOBALS['conexion']);
                header("location:listado-usuarios.php");
            }
            function borrarUsuario($id){
            
                $sql = "UPDATE usuarios SET activo = 0 WHERE idUsuario = '$id' ";
            
                mysqli_query($GLOBALS['conexion'],$sql);
                mysqli_close($GLOBALS['conexion']);
                header("location:listado.php?deleted");
            }

?>