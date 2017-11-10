<?php 
require_once "AccesoDatos.php";

class  Empleado{
    public $id;
    public $nombre;
    public $apellido;
    public $clave;
    public $mail;
    //public $turno;
    //public $perfil;
    //public $fecha_creacion;
    //public $foto;

    public function BorrarEmpleado(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
            delete 
            from empleados
            WHERE id= :id");
        $consulta->bindValue(':id',$this->id,PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->rowCount();
    }

    public function ModificarEmpleado(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
            update empleados
            set nombre='$this->nombre',
            apellido='$this->apellido',
            clave='$this->clave',
            mail='$this->mail'
            WHERE id='$this->id'");
        return $consulta->execute();
    }

    public function InsertarEmpleado(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
            INSERT into empleados(nombre,apellido,clave,mail)
            values('$this->nombre','$this->apellido','$this->clave','$this->mail')");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public function ModificarEmpleadoParametros(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
            update empleados
            set nombre = :nombre,
            apellido = :apellido,
            clave = :clave,
            mail = :mail
            WHERE id=:id");
        $consulta->bindValue(':id',$this->id,PDO::PARAM_INT);
        $consulta->bindValue(':nombre',$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(':apellido',$this->apellido,PDO::PARAM_STR);
        $consulta->bindValue(':clave',$this->clave,PDO::PARAM_STR);
        $consulta->bindValue(':mail',$this->mail,PDO::PARAM_STR);
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public function InsertarElEmpleadoParametros(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
            INSERT into empleados(nombre,apellido,clave,mail)
            values(:nombre,:apellido,:clave,:mail)");
        $consulta->bindValue(':nombre',$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(':apellido',$this->apellido,PDO::PARAM_STR);
        $consulta->bindValue(':clave',$this->clave,PDO::PARAM_STR);
        $consulta->bindValue(':mail',$this->mail,PDO::PARAM_STR);
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public function GuardarEmpleado(){
        if($this->id > 0){
            $this->ModificarEmpleadoParametros();
        }else{
            $this->InsertarElEmpleadoParametros();
        }
    }

    public static function TraerTodosLosEmpleados(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("
        SELECT id, nombre,apellido,clave,mail from empleados");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_CLASS,'empleado');
    }

    public static function TraerUnEmpleado($id){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("select id, nombre, apellido,clave,mail where id = $id");
        $consulta->execute();
        $EmpleadoBuscado = $consulta->fetchObject('empleados');
        return $EmpleadoBuscado;
    }
    
}
?>