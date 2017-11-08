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
    case 'AgregarPersonas':
            echo "hola a todos";
         //include "partes/Agregado.php";
         break;

}
?>