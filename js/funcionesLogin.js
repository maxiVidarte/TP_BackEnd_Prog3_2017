function MostrarLogin()
{
    var funcionAjax= $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarLogin"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function MostrarListadoPersonas(){
    var funcionAjax = $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarListadoUsuarios"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function MostrarEstacionados(){
    var funcionAjax = $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarEstacionados"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function AgregarPersonas(){
   var funcionAjax = $.ajax({
       url:"nexo.php",
       type:"post",
       data:{accion:"AgregarPersona"}
   });
   funcionAjax.done(function(retorno){
       $("#contenido2").html(retorno);
   });
}
function Agregar(){
    var funcionAjax = $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"Agregar",
        nombre:$("#nuevoNombre").val(),
        apellido:$("#nuevoApellido").val(),
        clave:$("#nuevaClave").val(),
        mail:$("nuevoMail").val()}
    });
    funcionAjax.done(function(retorno){
        alert(retorno);
        })
}

 
