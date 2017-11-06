<?php 
session_start();
if(!isset($_SESSION['registrado'])){  ?>
<h2>Lista de Personas</h2>

<table>
    <thead>
        <div class="divThs"> 
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Accion</th>
        </div>
    </thead>
    <tbody id="tCuerpo">
    </tbody>



</table>
<?php  }  ?>