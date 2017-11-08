<?php 
require_once "clases/AccesoDatos.php";
require_once "clases/Empleado.php";

$queHago = $_POST['accion'];

switch($queHago){
    case 'MostrarLogin':
        include "partes/Logeo.php";
        break;
    case 'MostrarListadoUsuarios':
        include "partes/ListadoUsuarios.php";
        break;
    case 'MostrarEstacionados':
        include "partes/AutosEstacionados.php";
        break;
    case 'AgregarPersona':
         include "partes/AgregadoPersona.php";
         break;
    case 'Agregar':
        $empleado = new Empleado();
        $empleado->nombre = $_POST['nombre'];
        $empleado->apellido = $_POST['apellido'];
        $empleado->clave = $_POST['clave'];
        $empleado->mail = $_POST['mail'];
        $cantidad=$empleado->GuardarEmpleado();
        echo $cantidad;
        break;

}
?>