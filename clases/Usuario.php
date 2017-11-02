<?php 
require_once "AccesoDatos.php";
class Usuarios
{
    public $usuario;
    public $contraseña;


    public function TraerTodos($request, $response, $args) {
		$todosLosUsuarios=Usuarios::TraerTodosLosUsuarios();
		  
     	$newResponse = $response->withJson($todosLosUsuarios, 200);  
    	return $newResponse;
    }
    public static function TraerTodosLosUsuarios()
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT id,usuario,contraseña FROM usuarios');
		$consulta->Execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS,"Usuarios");
	}
}

?>