<?php 
include_once("clases/Empleado.php");
/*session_start();
if(!isset($_SESSION['registrado'])){  
*/
$array = Empleado::TraerTodosLosEmpleados();
echo "<h2>Lista de Personas</h2>

<table>
    <thead>
        <div class='divThs'> 
            <th>Nombre</th>
            <th>Apellido</th>
            <th>clave</th>
            <th>mail</th>
        </div>
    </thead>
    <tbody id='tCuerpo'>";

    foreach ($array as $us){
		echo " 	<tr>
					<td>".$us->nombre."</td>
					<td>".$us->apellido."</td>
                    <td>".$us->clave."</td>
                    <td>".$us->mail."</td>
                </tr>";
            }
                
		


echo "</table></br>

<input type='button' id='AgregarPersona' value='Agregar personas' onclick='AgregarPersonas()'>
</tbody>";



 //}  ?>